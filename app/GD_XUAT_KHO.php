<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_XUAT_KHO extends Model
{
    protected $table = "GD_XUAT_KHO";

    protected $fillable = [
    	'NGAY_XUAT_KHO',
    	'ID_LY_DO_XUAT_KHO',
    	'ID_YEU_CAU',
    	'MA_CHUNG_TU',
    	'DA_XOA_YN',
    	'NGUOI_TAO',
    	'NGUOI_SUA',
    	'NGAY_TAO',
    	'NGAY_SUA',
    	'GHI_CHU',
    	'ID_KHO'
    ];

    public $timestamps = false;

    public static function getAll() {
        $results = GD_XUAT_KHO::all();
        return $results;
    }  

    public static function getById($id) {
        return GD_XUAT_KHO::where('ID', $id)
                        ->get();
    }

    public static function createItem($request) {
        GD_XUAT_KHO::create($request->all());
    }

    public static function updateItem($request, $id) {
        GD_XUAT_KHO::where('ID', $id)->update($request->all());
    }

    public static function deleteItem($id) {
        GD_XUAT_KHO::where('ID', $id)
                ->delete();
    }
}
