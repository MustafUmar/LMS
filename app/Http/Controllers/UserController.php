<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('users.home');
    }

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('users.profile', compact('user'));
    }

    public function contact()
    {
    	return view('users.contact');
    }

    public function loanform()
    {
    	return view('users.loanform');
    }

    public function signin()
    {
    	return view('users.login');
    }

    public function register()
    {
    	return view('users.register');
    }
}
