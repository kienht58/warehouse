<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\GD_XUAT_KHO;

use Response;

class importsController extends Controller
{
    //index
    public function index() {
        return Response::json(GD_XUAT_KHO::getAll());
    }  

    public function show($id) {
        return Response::json(GD_XUAT_KHO::getById($id));
    }

    public function create(Request $request) {
        GD_XUAT_KHO::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        GD_XUAT_KHO::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($id) {
        GD_XUAT_KHO::deleteItem($id);
        return "delete successfully";
    }
}
