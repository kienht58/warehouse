<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_KHO extends Model
{
    protected $table = 'DM_KHO';

    protected $fillable = [
    	'MA_KHO',
    	'TEN_KHO',
    	'VI_TRI',
    	'LIEN_HE',
    	'GHI_CHU'
    ];

    public $timestamps = false;

    public static function getAll() {
		$results = DM_KHO::all();
		return $results;
	}  

	public static function getById($id) {
		return DM_KHO::where('ID', $id)
						->get();
	}

	public static function createItem($request) {
		$data = new DM_KHO;
		$data->MA_KHO = $request->MA_KHO;
		$data->TEN_KHO = $request->TEN_KHO;
		$data->VI_TRI = $data->VI_TRI;
		$data->LIEN_HE = $data->LIEN_HE;
		$data->GHI_CHU = $data->GHI_CHU;
		$data->save();
	}

	public static function updateItem($request, $id) {
		DM_KHO::where('ID', $id)
				->update(['TEN_KHO' => $request->TEN_KHO,
						  'VI_TRI' => $request->VI_TRI,
						  'LIEN_HE' => $request->LIEN_HE,
						  'GHI_CHU' => $request->GHI_CHU]);
	}

	public static function deleteItem($id) {
		DM_KHO::where('ID', $id)
				->delete();
	}
}
