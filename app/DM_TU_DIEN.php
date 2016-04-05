<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_TU_DIEN extends Model
{
    protected $table = "DM_TU_DIEN";

    protected $fillable = [
    	'ID_LOAI_TU_DIEN',
    	'MA_TU_DIEN',
    	'TEN_TU_DIEN',
    	'GHI_CHU'
    ];

    public $timestamps = false;
}
