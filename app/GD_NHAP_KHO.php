<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_NHAP_KHO extends Model
{
    protected $table = "GD_NHAP_KHO";

    protected $fillable = [
    	'ID_LY_DO_NHAP_KHO',
    	'ID_YEU_CAU',
    	'NGAY_NHAP_KHO',
    	'MA_CHUNG_TU',
    	'ID_KHO',
    	'DA_XOA_YN',
    	'NGUOI_TAO',
    	'NGUOI_SUA',
    	'NGAY_LAP',
    	'NGAY_SUA',
    	'GHI_CHU'
    ];

    public $timestamps = false;

    public static function getAll() {
        $results = GD_NHAP_KHO::all();
        return $results;
    }  

    public static function getById($id) {
        return GD_NHAP_KHO::where('ID', $id)
                        ->get();
    }

    public static function createItem($request) {
        GD_NHAP_KHO::create($request->all());
    }

    public static function updateItem($request, $id) {
        GD_NHAP_KHO::where('ID', $id)->update($request->all());
    }

    public static function deleteItem($id) {
        GD_NHAP_KHO::where('ID', $id)
                ->delete();
    }
}
