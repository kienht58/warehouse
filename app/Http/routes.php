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

Route::get('/warehouselists', [ 
	'uses' => 'DM_KHOController@index']);
Route::get('/warehouselists/{id}', [
	'uses' => 'DM_KHOController@show']);
Route::post('/warehouselists', [
	'uses' => 'DM_KHOController@store']);
Route::post('/warehouselists/{id}', [
	'uses' => 'DM_KHOController@update']);
Route::delete('/warehouselists/{id}', [
	'uses' => 'DM_KHOController@delete']);