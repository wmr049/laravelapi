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

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'api'], function(){
	
	Route::group(['prefix' => 'user'], function(){
		// /api/user
		Route::get('', ['uses' => 'UserController@allUsers']);
		Route::get('{id}', ['uses' => 'UserController@getUser']);
		Route::post('', ['uses' => 'UserController@saveUser']);
		Route::put('{id}', ['uses' => 'UserController@updateUser']);
		Route::delete('{id}', ['uses' => 'UserController@deleteUser']);
	});

	Route::group(['prefix' => 'contato'], function(){
		// /api/contato
		Route::get('', ['uses' => 'ContatoController@allContatos']);
		Route::post('', ['uses' => 'ContatoController@saveContato']);

	});

	Route::group(['prefix' => 'operadora'], function(){
		// /api/operadora
		Route::get('', ['uses' => 'OperadoraController@allOperadoras']);
		Route::post('', ['uses' => 'OperadoraController@saveOperadora']);

	});

});
