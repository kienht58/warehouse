<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_SAN_PHAM_TRONG_KHO extends Model
{
    protected $table = "DM_SAN_PHAM_TRONG_KHO";

    protected $fillable = [
    	'ID_SAN_PHAM',
    	'MA_SAN_PHAM',
    	'TEN_SAN_PHAM',
    	'MA_SAN_PHAM_NHA_CUNG_CAP',
    	'ID_DON_VI_TINH'
    ];

    public $timestamps = false;
}
