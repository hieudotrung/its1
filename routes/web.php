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
Route::get('login', ['as' => 'backend.login', 'uses' => 'LoginController@login']);
Route::post('login', ['as' => 'backend.postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'backend.logout', 'uses' => 'LoginController@logout']);
Route::group(['middleware' => 'auth'], function() {
    Route::resource('user', 'UserController');
});