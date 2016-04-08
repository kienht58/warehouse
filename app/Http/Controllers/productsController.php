<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_SAN_PHAM_ENTITY;

use Response;

class productsController extends Controller
{
    //index
    public function index() {
        return Response::json(DM_SAN_PHAM_ENTITY::getAll());
    }  

    public function show($warehouseID, $categoryID, $productID) {
        return Response::json(DM_SAN_PHAM_ENTITY::getById($productID));
    }

    public function create(Request $request) {
        return DM_SAN_PHAM_ENTITY::createItem($request);
    }

    public function update(Request $request, $warehouseID, $categoryID, $productID) {
        DM_SAN_PHAM_ENTITY::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($warehouseID, $categoryID, $productID) {
        DM_SAN_PHAM_ENTITY::deleteItem($productID);
        return "delete successfully";
    }
}
