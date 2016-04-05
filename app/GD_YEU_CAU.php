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
}
