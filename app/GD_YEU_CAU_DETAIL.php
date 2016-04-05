<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_YEU_CAU_DETAIL extends Model
{
    protected $table = "GD_YEU_CAU_DETAIL";

    protected $fillable = [
    	'ID_YEU_CAU',
    	'MA_SAN_PHAM_NHA_CUNG_CAP',
    	'SO_LUONG',
    	'NGAY_SAN_XUAT',
    	'HAN_SU_DUNG'
    	'MA_NHA_CUNG_CAP',
    	'GHI_CHU',
    	'GIA_NHAP'
    ];

    public $timestamps = false;
}
