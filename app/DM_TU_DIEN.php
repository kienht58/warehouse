<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_TU_DIEN extends Model
{
    protected $table = "DM_TU_DIEN";

    protected $fillable = [
    	'ID_LOAI_TU_DIEN',
    	'MA_TU_DIEN',
    	'TEN_TU_DIEN',
    	'GHI_CHU'
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
		$data = new DM_TU_DIEN;
		
		$data->ID_LOAI_TU_DIEN = $request->ID_LOAI_TU_DIEN;
		$data->MA_TU_DIEN = $request->MA_TU_DIEN;
		$data->TEN_TU_DIEN = $request->TEN_TU_DIEN;
		$data->GHI_CHU = $request->GHI_CHU;

		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_TU_DIEN::where('ID', $id)
				->update(['ID_LOAI_TU_DIEN' => $request->ID_LOAI_TU_DIEN,
						  'MA_TU_DIEN' => $request->MA_TU_DIEN,
						  'TEN_TU_DIEN' => $request->TEN_TU_DIEN,
						  'GHI_CHU' => $request->GHI_CHU]);
	}

	public static function deleteItem($id) {
		DM_TU_DIEN::where('ID', $id)
				->delete();
	}
}
