<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_NHA_CUNG_CAP extends Model
{
    protected $table = "DM_NHA_CUNG_CAP";

    protected $fillable = [
    	'MA_NHA_CUNG_CAP', 
    	'TEN_NHA_CUNG_CAP'];

    public $timestamps = false;

    public static function getAll() {
		$results = DM_NHA_CUNG_CAP::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_NHA_CUNG_CAP::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		$data = new DM_NHA_CUNG_CAP;
		
		$data->MA_NHA_CUNG_CAP = $request->MA_NHA_CUNG_CAP;
		$data->TEN_NHA_CUNG_CAP = $request->TEN_NHA_CUNG_CAP;

		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_NHA_CUNG_CAP::where('ID', $id)
				->update(['MA_NHA_CUNG_CAP' => $request->MA_NHA_CUNG_CAP,
						  'TEN_NHA_CUNG_CAP' => $request->TEN_NHA_CUNG_CAP]);
	}

	public static function deleteItem($id) {
		DM_NHA_CUNG_CAP::where('ID', $id)
				->delete();
	}
}
