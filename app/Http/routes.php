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
/**
 * Client controller route protected by auth middleware
 * for user protections only .
 * the client controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('client', 'ClientController@index');
    Route::get('client/create', 'ClientController@create');
    Route::post('client/store', 'ClientController@store');
    Route::get('client/edit', 'ClientController@edit');
    Route::post('client/update', 'ClientController@update');
    Route::get('client/{$id}', 'ClientController@show');

});
/**
 * Owner controller route protected by auth middleware
 * for user protections only .
 * the Owner controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('owner', 'OwnerController@index');
    Route::get('owner/create', 'OwnerController@create');
    Route::post('owner/store', 'OwnerController@store');
    Route::get('owner/edit', 'OwnerController@edit');
    Route::post('owner/update', 'OwnerController@update');
    Route::get('owner/{$id}', 'OwnerController@show');

});
/**
 * RentalAgreement controller route protected by auth middleware
 * for user protections only .
 * the RentalAgreement controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('RentalAgreement', 'RentalAgreementController@index');
    Route::get('RentalAgreement/create', 'RentalAgreementController@create');
    Route::post('RentalAgreement/store', 'RentalAgreementController@store');
    Route::get('RentalAgreement/edit', 'RentalAgreementController@edit');
    Route::post('RentalAgreement/update', 'RentalAgreementController@update');
    Route::get('RentalAgreement/{$id}', 'RentalAgreementController@show');

});

/**
 * Property controller route protected by auth middleware
 * for user protections only .
 * the Property controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('Property', 'PropertyController@index');
    Route::get('Property/create', 'PropertyController@create');
    Route::post('Property/store', 'PropertyController@store');
    Route::get('Property/edit', 'PropertyController@edit');
    Route::post('Property/update', 'PropertyController@update');
    Route::get('Property/{$id}', 'PropertyController@show');

});