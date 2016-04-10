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


//warehouses
Route::get('/warehouses', [
	'as' => 'warehouses.index',
	'uses' => 'warehousesController@index'
	]);

Route::get('/warehouses/create', [
	'as' => 'warehouses.create',
	'uses' => 'warehousesController@create'
	]);

Route::get('/warehouses/{warehouseID}', [
	'as' => 'warehouses.show',
	'uses' => 'warehousesController@show'
	]);

Route::post('/warehouses', [
	'as' => 'warehouses.store',
	'uses' => 'warehousesController@store'
	]);

Route::get('/warehouses/{warehouseID}/edit', [
	'as' => 'warehouses.edit',
	'uses' => 'warehousesController@edit'
	]);

Route::put('/warehouses/{warehouseID}', [
	'as' => 'warehouses.update',
	'uses' => 'warehousesController@update'
	]);

Route::delete('/warehouses/{warehouseID}', [
	'as' => 'warehouses.destroy',
	'uses' => 'warehousesController@destroy'
]);

//categories
Route::get('warehouses/{warehouseID}/categories', [
	'as' => 'categories.index',
	'uses' => 'categoriesController@index'
	]);

Route::get('/warehouses/{warehouseID}/categories/create', [
	'as' => 'categories.create',
	'uses' => 'categoriesController@create'
	]);

Route::get('/warehouses/{warehouseID}/categories/{categoryID}', [
	'as' => 'categories.show',
	'uses' => 'categoriesController@show'
	]);

Route::post('/warehouses/{warehouseID}/categories', [
	'as' => 'categories.store',
	'uses' => 'categoriesController@store'
	]);

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/edit', [
	'as' => 'categories.edit',
	'uses' => 'categoriesController@edit'
	]);

Route::put('/warehouses/{warehouseID}/categories/{categoryID}', [
	'as' => 'categories.update',
	'uses' => 'categoriesController@update'
	]);

Route::delete('/warehouses/{warehouseID}/categories/{categoryID}', [
	'as' => 'categories.destroy',
	'uses' => 'categoriesController@destroy'
]);


//products
Route::get('warehouses/{warehouseID}/categories/{categoryID}/products', [
	'as' => 'products.index',
	'uses' => 'productsController@index'
	]);

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/create', [
	'as' => 'products.create',
	'uses' => 'productsController@create'
	]);

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'products.show',
	'uses' => 'productsController@show'
	]);

Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products', [
	'as' => 'products.store',
	'uses' => 'productsController@store'
	]);

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}/edit', [
	'as' => 'products.edit',
	'uses' => 'productsController@edit'
	]);

Route::put('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'products.update',
	'uses' => 'productsController@update'
	]);

Route::delete('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'products.destroy',
	'uses' => 'productsController@destroy'
]);


// ImportController

Route::get('warehouses/{warehouseID}/imports',[
	'as'   => 'imports.index',
	'uses' => 'importRequestsController@index'
	]);

Route::get('warehouses/{warehouseID}/imports/create',[
	'as'   => 'imports.create',
	'uses' => 'importRequestsController@create'
	]);

Route::get('warehouses/{warehouseID}/imports/{importID}',[
	'as'   => 'imports.show',
	'uses' => 'importRequestsController@show'
	]);

Route::post('warehouses/{warehouseID}/imports',[
	'as' => 'imports.store',
	'uses' => 'importRequestsController@store'
	]);

Route::get('warehouses/{warehouseID}/imports/{importID}/edit',[
	'as' => 'imports.edit',
	'uses' => 'importRequestsController@edit'
	]);

Route::put('warehouses/{warehouseID}/imports/{importID}',[
	'as' => 'imports.update',
	'uses' => 'importRequestsController@update'
	]);

Route::delete('warehouses/{warehouseID}/imports/{importID}', [
	'as' => 'imports.destroy',
	'uses' => 'importRequestsController@destroy'
]);

// ExportController
Route::get('warehouses/{warehouseID}/exports',[
	'as'   => 'exports.index',
	'uses' => 'exportRequestsController@index'
	]);

Route::get('warehouses/{warehouseID}/exports/create',[
	'as'   => 'exports.create',
	'uses' => 'exportRequestsController@create'
	]);

Route::get('warehouses/{warehouseID}/exports/{importID}',[
	'as'   => 'exports.show',
	'uses' => 'exportRequestsController@show'
	]);

Route::post('warehouses/{warehouseID}/exports',[
	'as' => 'exports.store',
	'uses' => 'exportsController@store'
	]);

Route::get('warehouses/{warehouseID}/exports/{importID}/edit',[
	'as' => 'exports.edit',
	'uses' => 'importRequestsController@edit'
	]);

Route::put('warehouses/{warehouseID}/exports/{importID}',[
	'as' => 'exports.update',
	'uses' => 'importRequestsController@update'
	]);

Route::delete('warehouses/{warehouseID}/exports/{importID}', [
	'as' => 'exports.destroy',
	'uses' => 'exportRequestsController@destroy'
]);
/*
Route::get('/warehouses/{warehouseID}/categories', 'categoriesController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@show');
Route::post('/warehouses/{warehouseID}/categories', 'categoriesController@create');
Route::post('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@update');
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}', 'categoriesController@delete');

//Product

Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products', [
	'as' => 'product.index',
	'uses' => 'productsController@index']);
Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'product.show',
	'uses' => 'productsController@show']);
Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products', [
	'as' => 'product.create',
	'uses' => 'productsController@create']);
Route::post('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'product.edit',
	'uses' => 'productsController@update']);
Route::delete('/warehouses/{warehouseID}/categories/{categoryID}/products/{productID}', [
	'as' => 'product.destroy',
	'uses' => 'productsController@destroy']);

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
Route::delete('/requests/{id}', 'requestsController@delete');*/