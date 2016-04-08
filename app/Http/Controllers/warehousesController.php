<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_KHO;

use Response;

class warehousesController extends Controller
{
    //index
    public function index() {
        $warehouses = DM_KHO::getAll();
        return view('warehouses/index', compact('warehouses'));
        //return Response::json(DM_KHO::getAll());
    }  

    public function show($id) {
        return Response::json(DM_KHO::getById($id));
    }

    public function create(Request $request) {
        DM_KHO::createItem($request);

        return "create successfully";
    }

    public function update(Request $request, $id) {
        DM_KHO::updateItem($request, $id);
        return "update successfully";
    }

    public function destroy($id) {
        DM_KHO::deleteItem($id);
        return redirect()->route('warehouse.index');
    }
}
