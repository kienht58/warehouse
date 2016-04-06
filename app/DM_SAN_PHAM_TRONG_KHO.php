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
		$results = DM_SAN_PHAM_TRONG_KHO::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_SAN_PHAM_TRONG_KHO::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		$data = new DM_SAN_PHAM_TRONG_KHO;
		
		$data->ID_SAN_PHAM = $request->ID_SAN_PHAM;
		$data->MA_SAN_PHAM = $request->MA_SAN_PHAM;
		$data->TEN_SAN_PHAM = $request->TEN_SAN_PHAM;
		$data->MA_SAN_PHAM_NHA_CUNG_CAP = $request->MA_SAN_PHAM_NHA_CUNG_CAP;
		$data->ID_DON_VI_TINH = $request->ID_DON_VI_TINH;

		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_SAN_PHAM_TRONG_KHO::where('ID', $id)
				->update(['ID_SAN_PHAM' => $request->ID_SAN_PHAM,
						  'MA_SAN_PHAM' => $request->MA_SAN_PHAM,
						  'TEN_SAN_PHAM' => $request->SERIAL_NHA_CUNG_CAP,
						  'MA_SAN_PHAM_NHA_CUNG_CAP' => $request->MA_SAN_PHAM_NHA_CUNG_CAP,
						  'ID_DON_VI_TINH' => $request->ID_DON_VI_TINH]);
	}
	
	public static function deleteItem($id) {
		DM_SAN_PHAM_TRONG_KHO::where('ID', $id)
				->delete();
	}
}
