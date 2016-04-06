<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_SAN_PHAM_ENTITY extends Model
{
    protected $table = "DM_SAN_PHAM_ENTITY";

    protected $fillable = [
    	'ID_SAN_PHAM', 
    	'SERIAL',
    	'SERIAL_NHA_CUNG_CAP',
    	'ID_TRANG_THAI_SAN_PHAM',
    	'SO_LUONG'];

    public $timestamps = false;

    public static function getAll() {
		$results = DM_SAN_PHAM_ENTITY::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_SAN_PHAM_ENTITY::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		$data = new DM_SAN_PHAM_ENTITY;
		
		$data->ID_SAN_PHAM = $request->ID_SAN_PHAM;
		$data->SERIAL = $request->SERIAL;
		$data->SERIAL_NHA_CUNG_CAP = $request->SERIAL_NHA_CUNG_CAP;
		$data->ID_TRANG_THAI_SAN_PHAM = $request->ID_TRANG_THAI_SAN_PHAM;
		$data->SO_LUONG = $request->SO_LUONG;

		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_SAN_PHAM_ENTITY::where('ID', $id)
				->update(['ID_SAN_PHAM' => $request->ID_SAN_PHAM,
						  'SERIAL' => $request->SERIAL,
						  'SERIAL_NHA_CUNG_CAP' => $request->SERIAL_NHA_CUNG_CAP,
						  'ID_TRANG_THAI_SAN_PHAM' => $request->ID_TRANG_THAI_SAN_PHAM,
						  'SO_LUONG' => $request->SO_LUONG]);
	}

	public static function deleteItem($id) {
		DM_SAN_PHAM_ENTITY::where('ID', $id)
				->delete();
	}
}
