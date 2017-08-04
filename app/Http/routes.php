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
<<<<<<< HEAD
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
=======
<<<<<<< HEAD
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
=======
<<<<<<< HEAD
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/category','Admin\CategoryController@changeorder');
=======
Route::any('admin/pass','Admin\indexController@pass');
Route::resource('admin/category','Admin\CategoryController');
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
