<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_SAN_PHAM_TRONG_KHO;

use Response;

class categoriesController extends Controller
{
    //index
    public function index() {
        return Response::json(DM_SAN_PHAM_TRONG_KHO::getAll());
    }  

    public function show($warehouseID, $categoryID) {
        return Response::json(DM_SAN_PHAM_TRONG_KHO::getById($categoryID));
    }

    public function create(Request $request) {
        DM_SAN_PHAM_TRONG_KHO::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $warehouseID, $categoryID) {
        DM_SAN_PHAM_TRONG_KHO::updateItem($request, $categoryID);
        return "update successfully";
    }

    public function delete($warehoueID, $categoryID) {
        DM_SAN_PHAM_TRONG_KHO::deleteItem($categoryID);
        return "delete successfully";
    }
}
