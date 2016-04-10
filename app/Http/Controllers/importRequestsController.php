<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\GD_NHAP_KHO;

use App\DM_KHO;
class importRequestsController extends Controller
{
    public function index($warehouseID) {
    	$warehouse = DM_KHO::getById($warehouseID);
        $imports = GD_NHAP_KHO::getAll();
        return view('imports/index', compact('imports', 'warehouse'));
    }  

    public function show($warehouseID, $importID) {
        $import =GD_NHAP_KHO::getById($importID);
        return view('imports/show', compact('import'));
    }

    public function create($warehouseID) {
        return view('imports/new', compact('warehouseID'));
    }

    public function store(Request $request, $warehouseID) {
        GD_NHAP_KHO::createItem($request);
        return redirect()->route('imports.index', compact('warehouseID'));
    }

    public function edit($warehouseID, $importID) {
        $import = GD_NHAP_KHO::getById($importID);
        return view('imports/edit', compact('import', 'importID', 'warehouseID'));
    }

    public function update(Request $request, $importeID, $importID) {
        GD_NHAP_KHO::updateItem($request, $importID);
        return redirect()->route('imports.show', compact('warehouseID', 'importID'));
    }

    public function destroy($warehouseID, $importID) {
        GD_NHAP_KHO::deleteItem($importID);
        return redirect()->route('imports.index', compact('warehouseID'));
    }
}
