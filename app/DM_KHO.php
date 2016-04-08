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
		DM_KHO::create($request->all());
	}

	public static function updateItem($request, $id) {
		DM_KHO::where('ID', $id)->update($request->all());
	}

	public static function deleteItem($id) {
		$result = DM_KHO::where('ID', $id)->delete();
	}
}
