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

Route::get('/','Home\IndexController@index');
Route::get('/cate','Home\IndexController@cate');
Route::get('/art','Home\IndexController@article');
Route::get('admin/index','Admin\indexController@index');
Route::any('admin/code','Admin\LoginController@code');
Route::any('admin/crypt','Admin\LoginController@crypt');
Route::get('admin/info','Admin\indexController@info');
Route::any('admin/login','Admin\LoginController@login');
Route::any('admin/quit','Admin\LoginController@quit');
Route::any('admin/pass','Admin\indexController@pass');
Route::any('admin/category','Admin\indexController@edit');
Route::resource('admin/category','Admin\CategoryController');
Route::post('admin/cate/changeorder','Admin\CategoryController@changeOrder');
Route::resource('admin/article','Admin\ArticleController');
Route::any('admin/upload','Admin\CommonController@upload');
Route::resource('admin/links','Admin\LinksController');
Route::post('admin/links/changeorder','Admin\LinksController@changeOrder');
Route::resource('admin/navs','Admin\NavsController');
Route::post('admin/navs/changeorder','Admin\NavsController@changeOrder');
Route::resource('admin/config','Admin\ConfigController');
Route::post('admin/config/changeorder','Admin\ConfigController@changeOrder');
Route::post('admin/config/changecontent','Admin\ConfigController@changeContent');
Route::post('admin/config/putfile','Admin\ConfigController@Putfile');