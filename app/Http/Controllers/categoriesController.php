<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_SAN_PHAM_TRONG_KHO;

use App\DM_KHO;

class categoriesController extends Controller
{
    public function index($warehouseID) {
    	$warehouse = DM_KHO::getById($warehouseID);
        $categories = DM_SAN_PHAM_TRONG_KHO::getAll();
        return view('categories/index', compact('categories', 'warehouse'));
    }  

    public function show($warehouseID, $categoryID) {
        $category =DM_SAN_PHAM_TRONG_KHO::getById($categoryID);
        return view('categories/show', compact('category'));
    }

    public function create($warehouseID) {
        return view('categories/new', compact('warehouseID'));
    }

    public function store(Request $request, $warehouseID) {
        DM_SAN_PHAM_TRONG_KHO::createItem($request);
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
