<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\GD_XUAT_KHO;

use App\DM_KHO;
class exportRequestsController extends Controller
{
    public function index($warehouseID) {
    	$warehouse = DM_KHO::getById($warehouseID);
        $exports = GD_XUAT_KHO::getAll();
        return view('exports/index', compact('exports', 'warehouse'));
    }  

    public function show($warehouseID, $exportID) {
        $export =GD_XUAT_KHO::getById($exportID);
        return view('exports/show', compact('export'));
    }

    public function create($warehouseID) {
        return view('exports/new', compact('warehouseID'));
    }

    public function store(Request $request, $warehouseID) {
        GD_XUAT_KHO::createItem($request);
        return redirect()->route('exports.index', compact('warehouseID'));
    }

    public function edit($warehouseID, $exportID) {
        $export = GD_XUAT_KHO::getById($exportID);
        return view('exports/edit', compact('export', 'exportID', 'warehouseID'));
    }

    public function update(Request $request, $exporteID, $exportID) {
        GD_XUAT_KHO::updateItem($request, $exportID);
        return redirect()->route('imports.show', compact('warehouseID', 'exportID'));
    }

    public function destroy($warehouseID, $exportID) {
        GD_XUAT_KHO::deleteItem($exportID);
        return redirect()->route('exports.index', compact('warehouseID'));
    }
}
