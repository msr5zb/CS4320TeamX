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

// Route::get('testScore', 'AccessTypeController@testScore');

Route::get('testScore', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@testScore']);
Route::post('testScore', 'AccessTypeController@updateFScore');

Route::get('updateTestScore', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@updateTestScore']);
Route::post('updateTestScore', 'AccessTypeController@updateFerpaScore');

Route::get('accessDesc', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@accessDesc']);
Route::post('accessDesc', 'AccessTypeController@storeDesc');

Route::get('accessAcademic', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@accessAcademic']);
Route::post('accessAcademic', 'AccessTypeController@storeAccAcad');

Route::get('studentRecPrompt', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@studentRecPrompt']);
Route::post('studentRecPrompt', 'AccessTypeController@isStudentRecordsAccess');
Route::get('recordAccess', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@recordAccess']);
Route::post('recordAccess', 'AccessTypeController@recordAccessStore');

Route::get('admissionPrompt', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@admissionPrompt']);
Route::post('admissionPrompt', 'AccessTypeController@isAdmissionAccess');
Route::get('admissionAccess', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@admissionAccess']);
Route::post('admissionAccess', 'AccessTypeController@storeAdmissions');

Route::get('finanCashierPrompt', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@finanCashierPrompt']);
Route::post('finanCashierPrompt', 'AccessTypeController@isFinanCashier');
Route::get('finanCashier', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@finanCashier']);
Route::post('finanCashier', 'AccessTypeController@storeCashier');

Route::get('finanAidPrompt', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@finanAidPrompt']);
Route::post('finanAidPrompt', 'AccessTypeController@isFinanAid');
Route::get('financialAidAccess',['middleware' => 'auth', 'uses'=> 'AccessTypeController@financialAidAccessShow']);
Route::post('financialAidAccess','AccessTypeController@studentFinancialAidStore');

Route::get('reservedPrompt', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@reservedPrompt']);
Route::post('reservedPrompt', 'AccessTypeController@isReserved');
Route::get('accessReserved', ['middleware' => 'auth', 'uses'=> 'AccessTypeController@accessReserved']);
Route::post('accessReserved', 'AccessTypeController@storeReserved');

Route::get('store', 'AccessTypeController@store');

Route::get('cancel', 'AccessTypeController@cancel');

Route::get('viewForms',['middleware' => 'auth', 'uses'=> 'ViewFormsController@index']);
Route::post('viewForms','ViewFormsController@viewRequest');

Route::get('pdf', 'PDFController@index' );

//catch all other routes and redirect correctl
Route::get( '{x}', 'HomeController@index' );

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
