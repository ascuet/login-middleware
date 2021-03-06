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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','HomeController@login');

Route::post('loginStore', 'HomeController@loginStore');

Route::get('logout','HomeController@logout');

Route::group(['middleware' => 'logged'], function(){
	Route::get('dashboard','HomeController@dashboard');
});

Route::get('join', 'HomeController@join');


