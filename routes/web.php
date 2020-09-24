<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return view('users.users');
});

Route::get('sums', function () {
    echo $a = 4 + 5;

    return $a; 
});

Route::get('user-list','users\UserController@index')->name('userlist');
Route::get('user-list/create', 'users\UserController@create');