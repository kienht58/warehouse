<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_TU_DIEN;

use Response;

class dictionaryController extends Controller
{
    //index
    public function index() {
        return Response::json(DM_TU_DIEN::getAll());
    }  

    public function show($id) {
        return Response::json(DM_TU_DIEN::getById($id));
    }

    public function create(Request $request) {
        DM_TU_DIEN::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        DM_TU_DIEN::updateItem($request, $id);
        return "update successfully";
    }

    public function delete($id) {
        DM_TU_DIEN::deleteItem($id);
        return "delete successfully";
    }
}
