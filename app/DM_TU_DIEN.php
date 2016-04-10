<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_TU_DIEN extends Model
{
    protected $table = "DM_TU_DIEN";

    protected $fillable = [
    	'MA_TU_DIEN',
    	'TEN_TU_DIEN',
    	'GHI_CHU',
    	'TEN_LOAI_TU_DIEN'
    ];

    public $timestamps = false;

     public static function getAll() {
		$results = DM_TU_DIEN::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_TU_DIEN::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		DM_TU_DIEN::create($request->all());
	}

	public static function updateItem($request, $id) {
		DM_TU_DIEN::where('ID', $id)->update($request->all());
	}

	public static function deleteItem($id) {
		DM_TU_DIEN::where('ID', $id)
				->delete();
	}
}
