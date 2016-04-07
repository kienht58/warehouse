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

    public function show($id) {
        return Response::json(DM_SAN_PHAM_ENTITY::getById($id));
    }

    public function create(Request $request) {
        DM_SAN_PHAM_ENTITY::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        DM_SAN_PHAM_ENTITY::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($id) {
        DM_SAN_PHAM_ENTITY::deleteItem($id);
        return "delete successfully";
    }
}
