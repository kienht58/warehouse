<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\DM_TU_DIEN;

class DM_SAN_PHAM_TRONG_KHO extends Model
{
    protected $table = "DM_SAN_PHAM_TRONG_KHO";

    protected $fillable = [
    	'ID_KHO',
    	'ID_SAN_PHAM', 
    	'MA_SAN_PHAM',
    	'TEN_SAN_PHAM',
    	'MA_SAN_PHAM_NHA_CUNG_CAP',
    	'ID_DON_VI_TINH',
    	'SO_LUONG'];

    public $timestamps = false;

    public static function getAll($warehouseID) {
		$categories = DM_SAN_PHAM_TRONG_KHO::where('ID_KHO', $warehouseID)->get();
		return $categories;
	}  

	public static function getById($id) {
		return DM_SAN_PHAM_TRONG_KHO::where('ID', $id)->get();
	}

	public static function createItem($request, $warehouseID) {
		$category = new DM_SAN_PHAM_TRONG_KHO;
		$category->ID_KHO = $warehouseID;
		$category->ID_SAN_PHAM = $request->ID_SAN_PHAM;
		$category->MA_SAN_PHAM = $request->MA_SAN_PHAM;
		$category->TEN_SAN_PHAM = $request->TEN_SAN_PHAM;
		$category->MA_SAN_PHAM_NHA_CUNG_CAP = $request->MA_SAN_PHAM_NHA_CUNG_CAP;
		$category->ID_DON_VI_TINH = $request->ID_DON_VI_TINH;
		$category->save();
	}

	public static function updateItem($request, $id) {
		DM_SAN_PHAM_TRONG_KHO::where('ID', $id)->update($request->except('_method', '_token'));
	}

	public static function deleteItem($id) {
		DM_SAN_PHAM_TRONG_KHO::where('ID', $id)
				->delete();
	}
}
