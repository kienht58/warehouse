<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_YEU_CAU extends Model
{
    protected $table = "GD_YEU_CAU";

    protected $fillable = [
    	'MA_YEU_CAU',
    	'ID_LOAI_YEU_CAU',
    	'ID_TRANG_THAI_YEU_CAU',
    	'NGAY_YEU_CAU',
    	'GHI_CHU',
    	'DA_XOA_YN',
    	'NGUOI_TAO',
    	'NGUOI_SUA',
    	'NGAY_TAO',
    	'NGAY_SUA'
    ];

    public $timestamps = false;

    public static function getAll() {
        $results = GD_YEU_CAU::all();
        return $results;
    }  

    public static function getById($id) {
        return GD_YEU_CAU::where('ID', $id)
                        ->get();
    }

    public static function createItem($request) {
        GD_YEU_CAU::create($request->all());
    }

    public static function updateItem($request, $id) {
        GD_YEU_CAU::where('ID', $id)->update($request->all());
    }

    public static function deleteItem($id) {
        GD_YEU_CAU::where('ID', $id)
                ->delete();
    }
}
