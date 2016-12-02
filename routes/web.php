<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('login','LoginController@login')->name('backend.login');
Route::post('login','LoginController@postLogin')->name('backend.postLogin');
Route::get('logout','LoginController@logout')->name('backend.logout');


Route::group(['middleware'=>'auth'], function(){
	Route::resource('user', 'UserController');
});

