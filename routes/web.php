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

Route::get('/', 'UserController@index')->name('home');//->middleware('verified');
Route::get('contact', 'UserController@contact');
Route::get('about', 'UserController@about');

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('user/profile', 'UserController@profile');
	Route::get('loan/apply', 'UserController@loanform');

	Route::get('circles', 'GroupController@index');
	Route::get('circle/{circle}', 'GroupController@view');
	Route::get('circle/new', 'GroupController@add');
	Route::post('circle/create', 'GroupController@create');

	Route::post('member/search/{gid}/{q}', 'GroupController@search');
	Route::post('member/invite', 'GroupController@invite');

	Route::get('user/accounts', 'AccountController@index');
	Route::get('user/account/new', 'AccountController@newAccount');
	Route::post('user/account/create', 'AccountController@create');
	Route::get('user/ctbaccount/{id}/new', 'AccountController@newContribAccount');
	Route::post('user/ctbaccount/create', 'AccountController@createContribAccount');
	Route::post('user/contribute', 'AccountController@contribute');
});
Route::group(['middleware' => ['visitors']], function () {
	Route::get('signin', 'UserController@signin');
	Route::get('signup', 'UserController@register');
});

Auth::routes(['verify'=>true]);

Route::get('admin/login', 'Admin\AdminController@showLoginForm');
Route::post('admin/login', 'Admin\AdminController@login');
Route::post('admin/logout', 'Admin\AdminController@logout');
Route::group(['middleware' => ['admin.auth']], function () {
	Route::get('admin/dashboard', 'Admin\DashboardController@index');

	Route::get('users', 'Admin\UserController@index');
	Route::get('users/data', 'Admin\UserController@getUsers');
	Route::get('user/new', 'Admin\UserController@newUser');
	Route::post('user/create', 'Admin\UserController@create');
	Route::get('user/{admin}', 'Admin\UserController@view');
	Route::get('user/edit/{admin}', 'Admin\UserController@edit');

	Route::get('members', 'Admin\MemberController@index');
	Route::get('member/{member}', 'Admin\MemberController@view');

	Route::get('loans', 'Admin\LoanController@index');
});

// Route::get('/home', 'UserController@index');
Route::get('/home', 'HomeController@index');
Route::post('/test', 'UserController@postForm');
