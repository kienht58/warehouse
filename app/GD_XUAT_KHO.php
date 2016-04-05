<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_XUAT_KHO extends Model
{
    protected $table = "GD_XUAT_HO";

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
}
