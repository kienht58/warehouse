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

Route::get('/warehouses', 'warehousesController@index');
Route::get('/warehouses/{warehouseID}', 'warehousesController@show');
Route::post('/warehouses', 'warehousesController@create');
Route::post('/warehouses/{warehouseID}', 'warehousesController@update');
Route::delete('/warehouses/{warehouseID}', 'warehousesController@delete');

Route::get('/warehouses/{warehouseID}/categories', 'categoriesController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@show');
Route::post('/warehouses/{warehouseID}/categories', 'categoriesController@create');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@update');
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@delete');

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products', 'productsController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', 'productsController@show');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products', 'productsController@create');
Route::post('warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', 'productsController@update');
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}/products', 'productsController@delete');

Route::get('/suppliers', 'warehousesController@index');
Route::get('/suppliers/{supplierID}', 'warehousesController@show');
Route::post('/suppliers', 'warehousesController@create');
Route::post('/suppliers/{supplierID}', 'warehousesController@update');
Route::delete('/suppliers/{supplierID}', 'warehousesController@delete');

Route::get('/imports', 'warehousesController@index');
Route::get('/imports/{supplierID}', 'warehousesController@show');
Route::post('/imports', 'warehousesController@create');
Route::post('/imports/{supplierID}', 'warehousesController@update');
Route::delete('/imports/{supplierID}', 'warehousesController@delete');

