<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_XUAT_KHO_DETAIL extends Model
{
    protected $table = "GD_XUAT_KHO_DETAIL";

    protected $fillable = [
    	'ID_GD_XUAT_KHO',
    	'ID_SAN_PHAM',
    	'SO_LUONG',
    	'ID_LOAI_KHACH_HANG',
    	'GHI_CHU'
    ];

    public $timestamps = false;
}
