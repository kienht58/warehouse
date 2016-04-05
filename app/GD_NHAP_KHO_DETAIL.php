<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_NHAP_KHO_DETAIL extends Model
{
    protected $table = "GD_NHAP_KHO_DETAIL";

    protected $fillable = [
    	'ID_GD_NHAP_KHO',
    	'ID_SAN_PHAM',
    	'SO_LUONG',
    	'NGAY_SAN_XUAT',
    	'HAN_SU_DUNG',
    	'GIA_NHAP',
    	'ID_NHA_CUNG_CAP',
    	'GHI_CHU'
    ];

    public $timestamps = false;
}
