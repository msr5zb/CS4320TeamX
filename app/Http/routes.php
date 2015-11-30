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

Route::get('accessAcademic', 'AccessTypeController@accessAcademic');
Route::post('accessAcademic', 'AccessTypeController@storeAccAcad');

Route::get('studentRecPrompt', 'AccessTypeController@studentRecPrompt');
Route::post('studentRecPrompt', 'AccessTypeController@isStudentRecordsAccess');
Route::get('recordAccess', 'AccessTypeController@recordAccess');
Route::post('recordAccess', 'AccessTypeController@recordAccessStore');

Route::get('admissionPrompt', 'AccessTypeController@admissionPrompt');
Route::post('admissionPrompt', 'AccessTypeController@isAdmissionAccess');
Route::get('admissionAccess', 'AccessTypeController@admissionAccess');
Route::post('admissionAccess', 'AccessTypeController@storeAdmissions');

Route::get('finanCashierPrompt', 'AccessTypeController@finanCashierPrompt');
Route::post('finanCashierPrompt', 'AccessTypeController@isFinanCashier');

Route::get('finanAidPrompt', 'AccessTypeController@finanAidPrompt');
Route::post('finanAidPrompt', 'AccessTypeController@isFinanAid');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
