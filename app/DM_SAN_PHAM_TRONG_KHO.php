<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_SAN_PHAM_TRONG_KHO extends Model
{
    protected $table = "DM_SAN_PHAM_TRONG_KHO";

    protected $fillable = [
    	'ID_SAN_PHAM', 
    	'MA_SAN_PHAM',
    	'TEN_SAN_PHAM',
    	'MA_SAN_PHAM_NHA_CUNG_CAP',
    	'ID_DON_VI_TINH'];

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
