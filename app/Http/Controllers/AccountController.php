<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Accounts;
use App\User;

class AccountController extends Controller
{
    public function index()
    {
    	$accounts = Auth::user()->account()->get();
        return view('users.accounts', compact('accounts'));
    }

    public function newAccount()
    {
    	return view('users.addaccount');
    }

    public function create(Request $request)
    {
    	$request->validate([
	        'account_name' => 'required|string',
	        'account_number' => 'required|unique:accounts|max:10',
	    ]);

	    // return Auth::user()->memberid;

    	Auth::user()->account()->create([
    		'account_name' => $request['account_name'],
    		'account_number' => $request['account_number'],
    		'memberid' => Auth::user()->memberid
    	]);

    	return redirect('/user/accounts')->with('status','Account successfully created');
    }
}
