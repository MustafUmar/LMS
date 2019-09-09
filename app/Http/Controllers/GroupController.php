<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\User;

class GroupController extends Controller
{
    public function index()
    {
    	$groups = Group::withCount('users')->paginate(10);
    	return view('users.groups', compact('groups'));
    }

    public function view(Group $circle)
    {
    	$circle->load('users');
    	return view('users.groupdetail', compact('circle'));
    }

    public function add()
    {
    	return view('users.addgroup');
    }

    public function search($gid, $q)
    {
    	$members = DB::table('users')->leftJoin('group_member', 'users.id', '=', 'group_member.user_id')
					->where('users.memberid','like', $q.'%')
					->where(function($q) use($gid) {
						$q->where('group_member.group_id', '<>', $gid)
						->orWhereNull('group_member.group_id');
					})
					->take(10)
					->get();
    	return $members;
    }

    public function invite(Request $request)
    {
    	return $request;
    	$checkgroup = DB::table('group_member')->where('user_id', $request['mid'])->where('group_id')->get();
    	if(count($checkgroup))
    		return 'Already in circle';
    	$checkrequest = DB::table('group_request')->where('receiver', $request['mid'])->where('group_id', $request['grid'])->where('status','Pending')->get();
    	if(count($checkrequest))
    		return 'sent already';
    	DB::table('group_request')->insert([
    		'group_id' => $request['grid'],
    		'receiver' => $request['mid'],
    		'sender' => Auth::user()->id,
    		'status' => 'Pending'
    	]);

    	return 'invite sent';
    }

    public function create(Request $request)
    {
    	$request->validate([
    		'name' => 'required|string|max:100|min:2|unique:groups',
    		'description' => 'required|string|max:150',
    		'pubpriv' => 'required|in:private,public'
    	]);
    	DB::rollBack();
    	DB::beginTransaction();

    	$group = new Group;
    	$group->name = $request->name;
    	$group->description = $request->description;
    	$group->public_private = $request->pubpriv;
    	$group->ownedby()->associate(Auth::guard('web')->user());
    	$group->save();
    	
    	$group->users()->attach(Auth::guard('web')->user());

    	DB::commit();
    	return redirect('/circles')->with(['status' => 'Group successfully created.', 'level' => 'success']);
    }
}
