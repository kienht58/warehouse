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
        $results = DM_TU_DIEN::all();
        return $results;
    }  

    public static function getById($id) {
        return DM_TU_DIEN::where('ID', $id)
                        ->get();
    }

    public static function createItem($request) {
        $data = new DM_TU_DIEN;
        
        $data->ID_LY_DO_NHAP_KHO = $request->ID_LY_DO_NHAP_KHO;
        $data->ID_YEU_CAU = $request->ID_YEU_CAU;
        $data->NGAY_NHAP_KHO = $request->NGAY_NHAP_KHO;
        $data->MA_CHUNG_TU = $request->MA_CHUNG_TU;
        $data->ID_KHO = $request->ID_KHO;
        $data->DA_XOA_YN = $request->DA_XOA_YN;
        $data->NGUOI_TAO = $request->NGUOI_TAO;
        $data->NGUOI_SUA = $request->NGUOI_SUA;
        $data->NGAY_LAP = $request->NGAY_LAP;
        $data->NGAY_SUA = $request->NGAY_SUA;
        $data->GHI_CHU = $request->GHI_CHU;

        $data->save();
    }

    public static function updateItem($request, $id) {
        DM_TU_DIEN::where('ID', $id)
                ->update(['ID_LY_DO_NHAP_KHO' => $request->ID_LY_DO_NHAP_KHO,
                          'ID_YEU_CAU' => $request->ID_YEU_CAU,
                          'NGAY_NHAP_KHO' => $request->NGAY_NHAP_KHO,
                          'MA_CHUNG_TU' => $request->MA_CHUNG_TU,
                          'ID_KHO' => $request->ID_KHO,
                          'DA_XOA_YN' => $request->DA_XOA_YN,
                          'NGUOI_TAO' => $request->NGUOI_TAO,
                          'NGUOI_SUA' => $request->NGUOI_SUA,
                          'NGAY_LAP' => $request->NGAY_LAP,
                          'NGAY_SUA' => $request->NGAY_SUA,
                          'GHI_CHU' => $request->GHI_CHU]);
    }

    public static function deleteItem($id) {
        DM_TU_DIEN::where('ID', $id)
                ->delete();
    }
}
