<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_KHO;

use Response;

class warehousesController extends Controller
{
    public function index() {
        $warehouses = DM_KHO::getAll();
        return view('warehouses/index', compact('warehouses'));
    }  

    public function show($id) {
        $warehouse =DM_KHO::getById($id);
        return view('warehouses/show', compact('warehouse'));
    }

    public function create() {
        return view('warehouses/new');
    }

    public function store(Request $request) {
        DM_KHO::createItem($request);
        return redirect()->route('warehouses.index');
    }

    public function edit($id) {
        $warehouse = DM_KHO::getById($id);
        return view('warehouses/edit', compact('warehouse'));
    }

    public function update(Request $request, $id) {
        DM_KHO::updateItem($request, $id);
        return redirect()->route('warehouses.show', $id);
    }

    public function destroy($id) {
        DM_KHO::deleteItem($id);
        return redirect()->route('warehouses.index');
    }
}
