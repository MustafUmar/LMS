<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@index');//->middleware('verified');
Route::get('contact', 'UserController@contact');

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('user/profile', 'UserController@profile');
	Route::get('loan/apply', 'UserController@loanform');

	Route::get('user/accounts', 'AccountController@index');
	Route::get('user/account/new', 'AccountController@newAccount');
	Route::post('user/account/create', 'AccountController@create');
});



Route::get('signin', 'UserController@signin');

Route::get('signup', 'UserController@register');

Route::get('admin', function () {
    return view('layouts.adminlayout');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/test', 'HomeController@postForm');
