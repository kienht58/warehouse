<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\GD_NHAP_KHO;

use Response;

class importTransactionController extends Controller
{
    //index
    public function index() {
        return Response::json(GD_NHAP_KHO::getAll());
    }  

    public function show($id) {
        return Response::json(GD_NHAP_KHO::getById($id));
    }

    public function create(Request $request) {
        GD_NHAP_KHO::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        GD_NHAP_KHO::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($id) {
        GD_NHAP_KHO::deleteItem($id);
        return "delete successfully";
    }
}
