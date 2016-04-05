<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_NHA_CUNG_CAP extends Model
{
    protected $table = "DM_NHA_CUNG_CAP";

    protected $fillable = [
    	'MA_NHA_CUNG_CAP',
    	'TEN_NHA_CUNG_CAP'
    ];

    public $timestamps = false;
}
