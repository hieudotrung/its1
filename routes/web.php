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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin',function(){
	return view('layout.master');
});
Route::get('trangchu', function () {
    return view('layout/index_backend');
});

route::get('a/{thanhvien}', function($thanhvien){
    echo "thanhvien thu nhat". $thanhvien;
});

Route::get('user', 'UserController@index')->name('backend.user.index');
Route::get('user/create', 'UserController@create')->name('backend.user.create');
Route::post('user', 'UserController@store')->name('backend.user.store');
Route::get('user/edit/{id}', 'UserController@edit')->name('backend.user.edit');
Route::put('user/{id}', 'UserController@update')->name('backend.user.update');
route::get('user/delete/{id}','UserController@destroy')->name('backend.user.destroy');
