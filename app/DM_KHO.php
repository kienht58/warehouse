<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DM_KHO extends Model
{
    protected $table = 'DM_KHO';

    protected $fillable = [
    	'MA_KHO',
    	'TEN_KHO',
    	'VI_TRI',
    	'LIEN_HE',
    	'GHI_CHU'
    ];
}
