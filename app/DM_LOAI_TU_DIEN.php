<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_LOAI_TU_DIEN extends Model
{
    protected $table = "DM_LOAI_TU_DIEN";

    protected $fillable = [
    	'MA_LOAI_TU_DIEN', 
    	'TEN_LOAI_TU_DIEN',
    	'GHI_CHU'];

    public $timestamps = false;
}
