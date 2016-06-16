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

Route::group(['middleware' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web'], 'namespace' => 'Backend'], function () {
    //Login Routes...
    Route::get('/admin/login','AuthController@showLoginForm');
    Route::post('/admin/login','AuthController@login');
    Route::get('/admin/logout','AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AuthController@showRegistrationForm');
    Route::post('admin/register', 'AuthController@register');

    Route::get('/admin', 'IndexController@index');
});  
