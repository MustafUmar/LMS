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

Route::get('/', 'UserController@index');

Route::get('/contact', 'UserController@contact');

Route::get('/loan/apply', 'UserController@loanform');

Route::get('/signin', 'UserController@signin');

Route::get('/signup', 'UserController@register');

Route::get('/admin', function () {
    return view('layouts.adminlayout');
});
