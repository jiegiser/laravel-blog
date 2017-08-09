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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
Route::any('admin/category','Admin\indexController@edit');
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
Route::resource('admin/article','Admin\ArticleController');
<<<<<<< HEAD
Route::any('admin/upload','Admin\CommonController@upload');
=======
<<<<<<< HEAD
Route::any('admin/upload','Admin\CommonController@upload');
=======
=======
<<<<<<< HEAD
Route::any('admin/category','Admin\indexController@edit');
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
=======
Route::resource('admin/category','Admin\CategoryController');
<<<<<<< HEAD
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
=======
<<<<<<< HEAD
Route::post('admin/cate/changeorder','Admin\CategoryController@changeorder');
=======
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
>>>>>>> 199dc8b4469af12636e4fa275d3163100edb7b7b
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
