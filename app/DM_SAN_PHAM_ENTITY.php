<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_SAN_PHAM_ENTITY extends Model
{
    protected $table = "DM_SAN_PHAM_ENTITY";

    protected $fillable = [
    	'ID_KHO',
    	'ID_SAN_PHAM', 
    	'SERIAL',
    	'SERIAL_NHA_CUNG_CAP',
    	'ID_TRANG_THAI_SAN_PHAM'
    	];

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
		DM_SAN_PHAM_ENTITY::create($request->all());
	}

	public static function updateItem($request, $id) {
		DM_SAN_PHAM_ENTITY::where('ID', $id)->update($request->all());
	}

	public static function deleteItem($id) {
		DM_SAN_PHAM_ENTITY::where('ID', $id)
				->delete();
	}
}
