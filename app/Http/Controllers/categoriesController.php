<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_SAN_PHAM_TRONG_KHO;

use App\DM_KHO;

use App\DM_TU_DIEN;

use DB;

class categoriesController extends Controller
{
    public function index($warehouseID) {
    	$warehouse = DM_KHO::getById($warehouseID);
        $categories = DM_SAN_PHAM_TRONG_KHO::getAll($warehouseID);
        return view('categories/index', compact('categories', 'warehouse'));
    }  

    public function show($warehouseID, $categoryID) {
        $category =DM_SAN_PHAM_TRONG_KHO::getById($categoryID);
        return view('categories/show', compact('category'));
    }

    public function create($warehouseID) {
        $dictionary = DB::table('DM_TU_DIEN')->lists('TEN_TU_DIEN');
        return view('categories/new', compact('warehouseID', 'dictionary'));
    }

    public function store(Request $request, $warehouseID) {
        DM_SAN_PHAM_TRONG_KHO::createItem($request, $warehouseID);
        return redirect()->route('categories.index', compact('warehouseID'));
    }

    public function edit($warehouseID, $categoryID) {
        $category = DM_SAN_PHAM_TRONG_KHO::getById($categoryID);
        return view('categories/edit', compact('category', 'categoryID', 'warehouseID'));
    }

    public function update(Request $request, $warehouseID, $categoryID) {
        DM_SAN_PHAM_TRONG_KHO::updateItem($request, $categoryID);
        return redirect()->route('categories.show', compact('warehouseID', 'categoryID'));
    }

    public function destroy($warehouseID, $categoryID) {
        DM_SAN_PHAM_TRONG_KHO::deleteItem($categoryID);
        return redirect()->route('categories.index', compact('warehouseID'));
    }
}
