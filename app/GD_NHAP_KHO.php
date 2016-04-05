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
}
