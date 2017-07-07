<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/index','Admin\indexController@index');
Route::any('admin/code','Admin\LoginController@code');
Route::any('admin/crypt','Admin\LoginController@crypt');
Route::get('admin/info','Admin\indexController@info');
Route::any('admin/login','Admin\LoginController@login');
Route::any('admin/quit','Admin\LoginController@quit');
Route::any('admin/pass','Admin\indexController@pass');
