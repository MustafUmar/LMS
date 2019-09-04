<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Admin;
use App\Role;

class UserController extends Controller
{
    public function index()
    {
    	return view('admin.users.users');
    }

    public function getUsers()
    {
        $admin = Admin::with('roles')->selectRaw('distinct admins.*');
        // $admin = Admin::with('roles')->get();
        
    	return Datatables::of($admin)
        ->addColumn('role', function($user) {
            return $user->roles->map(function($role) {
                return ucfirst($role->name);
            })->implode('<br>');
        })
        ->addColumn('active', function($user) {
            if($user->is_active)
                return '<span class="text-success"><i class="fa fa-check fa-lg"></i></span>';
            else
                return '<span class="text-danger"><i class="fa fa-times fa-lg"></i></span>';
        })
    	->addColumn('action', function($user){
           	$btn = '<a href="/user/'.$user->id.'" class="edit btn btn-primary btn-sm">View</a>';
            return $btn;
        })
        ->rawColumns(['action','active'])
    	->make(true);
    }

    public function view(Admin $admin)
    {
        $admin->load('roles');
        return view('admin.users.userprofile', compact("admin"));
    }

    public function newUser()
    {
    	return view('admin.users.adduser');
    }

    public function create(Request $request)
    {
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:admins',
            'phone' => 'required',
            'usertype' => ['required', Rule::in(['admin','manager','account','staff'])]
        ]);

        DB::beginTransaction();

        try {
            // if($request->hasFile('userimage')) {
            //     $mainimage = $request->file('userimage');
            //     $filename = Carbon::now()->timestamp.'_'.uniqid().'.'.$mainimage->getClientOriginalExtension();
            //     $mainimage->storeAs('public/products', $filename);
            //     $product->mainimage = $filename;
            // }
            $admin = Admin::create([
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'password' => Hash::make($request['usertype'].'123'),
                'is_active' => true
            ]);
            $role = Role::where('name',$request['usertype'])->first();
            $admin->roles()->attach($role);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/users')->with(['status' => 'Unable to create user at the moment.', 'level' => 'danger']);
        }

        return redirect('/users')->with(['status' => 'User successfully created!', 'level' => 'success']);
    }

    public function edit(Admin $admin)
    {
        return view('admin.users.edit', compact("admin"));
    }
}
