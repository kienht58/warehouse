<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_KHO;

use App\DM_SAN_PHAM_TRONG_KHO;

use App\DM_SAN_PHAM_ENTITY;

class productsController extends Controller
{
    public function index($warehouseID, $categoryID) {
        $products = DM_SAN_PHAM_ENTITY::getAll();
        return view('products/index', compact('products', 'warehouseID', 'categoryID'));
    }  

    public function show($warehouseID, $categoryID, $productID) {
        $product =DM_SAN_PHAM_ENTITY::getById($productID);
        return view('products/show', compact('product'));
    }

    public function create($warehouseID, $categoryID) {
        return view('products/new', compact('warehouseID', 'categoryID'));
    }

    public function store(Request $request, $warehouseID, $categoryID) {
        DM_SAN_PHAM_ENTITY::createItem($request, $warehouseID, $categoryID);
        return redirect()->route('products.index', compact('warehouseID', 'categoryID'));
    }

    public function edit($warehouseID, $categoryID, $productID) {
        $product = DM_SAN_PHAM_ENTITY::getById($productID);
        return view('products/edit', compact('product', 'categoryID', 'warehouseID', 'productID'));
    }

    public function update(Request $request, $warehouseID, $categoryID, $productID) {
        DM_SAN_PHAM_ENTITY::updateItem($request, $productID);
        return redirect()->route('categories.show', compact('warehouseID', 'categoryID', 'productID'));
    }

    public function destroy($warehouseID, $categoryID, $productID) {
        DM_SAN_PHAM_ENTITY::deleteItem($productID);
        return redirect()->route('products.index', compact('warehouseID', 'categoryID'));
    }
}
