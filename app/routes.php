<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get(
	'admin/logout',
	array(
		'as' => 'admin.logout',
		'uses' => 'App\Controllers\Admin\AuthController@getLogout'
	)
);
Route::get(
	'admin/login',
	array(
		'as' => 'admin.login',
		'uses' => 'App\Controllers\Admin\AuthController@getLogin'
	)
);
Route::post(
	'admin/login',
	array(
		'as' => 'admin.login.post',
		'uses' => 'App\Controllers\Admin\AuthController@postLogin'
	)
);
Route::get(
	'admin/category',
	[
		'as' => 'admin.category',
		'uses' => 'App\Controllers\Admin\CategoryController@index',
	]
);
Route::get(
	'admin/subCategory',
	[
		'as' => 'admin.category.subCategory',
		'uses' => 'App\Controllers\Admin\CategoryController@subCategory',
	]
);
Route::get(
	'admin/page',
	[
		'as' => 'admin.page',
		'uses' => 'App\Controllers\Admin\PageController@index',
	]
);
Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
	Route::any('/', 'App\Controllers\Admin\AuthController@test');
	Route::resource('category', 'App\Controllers\Admin\CategoryController');
	Route::resource('page', 'App\Controllers\Admin\PageController');
});

//前端路由
Route::get('/{name}', 'HomeController@index');
Route::get('/{name}/aboutus/{culture}', 'HomeController@aboutus');
Route::get('/{name}/product/{id}', 'HomeController@productList');
Route::get('/{name}/product/{id}/{pid}', 'HomeController@productInfo');