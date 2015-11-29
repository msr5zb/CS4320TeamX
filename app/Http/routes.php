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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('testScore', 'AccessTypeController@testScore');
Route::post('testScore', 'AccessTypeController@updateFScore');
Route::get('accessDesc', 'AccessTypeController@accessDesc');
Route::post('accessDesc', 'AccessTypeController@storeDesc');
Route::get('accessAcademic', 'AccessTypeController@accessDesc');
Route::post('accessAcademic', 'AccessTypeController@storeAccAcad');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
