<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_LOAI_TU_DIEN extends Model
{
    protected $table = "DM_LOAI_TU_DIEN";

    protected $fillable = [
    	'MA_LOAI_TU_DIEN', 
    	'TEN_LOAI_TU_DIEN',
    	'GHI_CHU'];

    public $timestamps = false;

    public static function getAll() {
		$results = DM_LOAI_TU_DIEN::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_LOAI_TU_DIEN::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		$data = new DM_LOAI_TU_DIEN;
		
		$data->MA_LOAI_TU_DIEN = $request->MA_LOAI_TU_DIEN;
		$data->TEN_LOAI_TU_DIEN = $request->TEN_LOAI_TU_DIEN;
		$data->GHI_CHU = $request->GHI_CHU;

		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_LOAI_TU_DIEN::where('ID', $id)
				->update(['MA_LOAI_TU_DIEN' => $request->MA_LOAI_TU_DIEN,
						  'TEN_LOAI_TU_DIEN' => $request->TEN_LOAI_TU_DIEN,
						  'GHI_CHU' => $request->GHI_CHU]);
	}

	public static function deleteItem($id) {
		DM_LOAI_TU_DIEN::where('ID', $id)
				->delete();
	}
}
