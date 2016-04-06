<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_NHA_CUNG_CAP;

use Response;

class supplierListController extends Controller
{
    //index
    public function index() {
        return Response::json(DM_NHA_CUNG_CAP::getAll());
    }  

    public function show($id) {
        return Response::json(DM_NHA_CUNG_CAP::getById($id));
    }

    public function create(Request $request) {
        DM_NHA_CUNG_CAP::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        DM_NHA_CUNG_CAP::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($id) {
        DM_NHA_CUNG_CAP::deleteItem($id);
        return "delete successfully";
    }
}
