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



Route::get('/warehouses', [
	'as' => 'warehouse.index',
	'uses' => 'warehousesController@index']);

Route::get('/warehouses/{warehouseID}', [
	'as' => 'warehouse.show',
	'uses' => 'warehousesController@show'
]);

Route::post('/warehouses', [
	'as' => 'warehouse.create',
	'uses' => 'warehousesController@create'
]);

Route::post('/warehouses/{warehouseID}', [
	'as' => 'warehouse.edit',
	'uses' => 'warehousesController@update'
]);

Route::delete('/warehouses/{warehouseID}', [
	'as' => 'warehouse.destroy',
	'uses' => 'warehousesController@destroy'
]);



Route::get('/warehouses/{warehouseID}/categories', 'categoriesController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@show');
Route::post('/warehouses/{warehouseID}/categories', 'categoriesController@create');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@update');
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@delete');

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products', 'productsController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', 'productsController@show');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products', 'productsController@create');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', 'productsController@update');
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', 'productsController@delete');

Route::get('/suppliers', 'suppliersController@index');
Route::get('/suppliers/{supplierID}', 'suppliersController@show');
Route::post('/suppliers', 'suppliersController@create');
Route::post('/suppliers/{supplierID}', 'suppliersController@update');
Route::delete('/suppliers/{supplierID}', 'suppliersController@delete');

Route::get('/imports', '@index');
Route::get('/imports/{id}', 'importsController@show');
Route::post('/imports', 'importsController@create');
Route::post('/imports/{id}', 'importsController@update');
Route::delete('/imports/{id}', 'importsController@delete');

Route::get('/exports', 'exportsController@index');
Route::get('/exports/{id}', 'exportsController@show');
Route::post('/exports', 'exportsController@create');
Route::post('/exports/{id}', 'exportsController@update');
Route::delete('/exports/{id}', 'exportsController@delete');

Route::get('/requests', 'requestsController@index');
Route::get('/requests/{id}', 'requestsController@show');
Route::post('/requests', 'requestsController@create');
Route::post('/requests/{id}', 'requestsController@update');
Route::delete('/requests/{id}', 'requestsController@delete');