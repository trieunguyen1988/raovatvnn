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

Route::group(['middleware' => ['web'], 'namespace' => 'Backend', 'prefix' => 'admin'], function () {
    //Login Routes...
    Route::get('/login','AuthController@showLoginForm');
    Route::post('/login','AuthController@login');
    Route::get('/logout','AuthController@logout');

    // Registration Routes...
    Route::get('/register', 'AuthController@showRegistrationForm');
    Route::post('/register', 'AuthController@register');

    //admin homepage
    Route::get('/', 'IndexController@index');

    //Country
    Route::group(['prefix' => 'country'], function(){
        //List
        Route::get('/', ['as' => 'admin.country.index', 'uses' => 'CountryController@index']);

        //Add
        Route::get('add', ['as' => 'admin.country.getAdd', 'uses' => 'CountryController@getAdd']);
        Route::post('add', ['as' => 'admin.country.postAdd', 'uses' => 'CountryController@postAdd']);

        //Edit
        Route::get('edit/{country_id}', ['as' => 'admin.country.getEdit', 'uses' => 'CountryController@getEdit']);
        Route::post('edit/{country_id}', ['as' => 'admin.country.postEdit', 'uses' => 'CountryController@postEdit']);

        //Delete
        Route::get('delete/{country_id}', ['as' => 'admin.country.getDelete', 'uses' => 'CountryController@getDelete']);
    });
});  
