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

Route::get('/warehouselists', 'warehouseListController@index');
Route::get('/warehouselists/{id}', 'warehouseListController@show');
Route::post('/warehouselists', 'warehouseListController@create');
Route::post('/warehouselists/{id}', 'warehouseListController@update');
Route::delete('/warehouselists/{id}', 'warehouseListController@delete');

Route::get('/suppliers', 'supplierListController@index');
Route::get('/suppliers/{id}', 'supplierListController@show');
Route::post('/suppliers', 'supplierListController@create');
Route::post('/suppliers/{id}', 'supplierListController@update');
Route::delete('/suppliers/{id}', 'supplierListController@delete');

Route::get('/products', 'productEntityListController@index');
Route::get('/products/{id}', 'productEntityListController@show');
Route::post('/products', 'productEntityListController@create');
Route::post('/products/{id}', 'productEntityListController@update');
Route::delete('/products/{id}', 'productEntityListController@delete');