<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_SAN_PHAM_ENTITY extends Model
{
    protected $table = "DM_SAN_PHAM_ENTITY";

    protected $fillable = [
    	'ID_SAN_PHAM',
    	'SERIAL',
    	'SERIAL_NHA_CUNG_CAP',
    	'ID_TRANG_THAI_SAN_PHAM',
    	'SO_LUONG'
    ];

    public $timestamps = false;
}
