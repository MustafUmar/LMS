<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\User;

class MemberController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax()) {
    		$draw = $request->get('draw');
	        $start = $request->get('start');
	        $length = $request->get('length');
            $search = $request['search']['value'];
            error_log('Datassearch:'.$search);

            $members = DB::table('users');
            if(!empty($search)) {
                $members->where("firstname", "LIKE",'%'.$search.'%')
                  ->orWhere("lastname", "LIKE", '%'.$search.'%')
                  ->orWhere("email", "LIKE", '%'.$search.'%')
                  ->orWhere("phone", "LIKE", '%'.$search.'%')
                  ->orWhere("memberid", "LIKE", '%'.$search.'%');
            }
    		$members->skip($start)->take($length)->select('users.*');

    		return Datatables::of($members)
            // ->addColumn('active', function() {

            // })
            ->addColumn('action', function($user){
                $btn = '<a href="/member/'.$user->id.'" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    	}
    	return view('admin.members.members');
    }

    public function view(User $member)
    {
        $member->load(['account.contribute','userdetail']);
        // return $member;
        return view('admin.members.memberinfo', compact('member'));
    }
}
