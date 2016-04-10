<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GD_XUAT_KHO_DETAIL_DETAIL extends Model
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

     public static function getAll() {
        $results = GD_XUAT_KHO_DETAIL::all();
        return $results;
    }  

    public static function getById($id) {
        return GD_XUAT_KHO_DETAIL::where('ID', $id)
                        ->get();
    }

    public static function createItem($request) {
        GD_XUAT_KHO_DETAIL::create($request->all());
    }

    public static function updateItem($request, $id) {
        GD_XUAT_KHO_DETAIL::where('ID', $id)->update($request->all());
    }

    public static function deleteItem($id) {
        GD_XUAT_KHO_DETAIL::where('ID', $id)
                ->delete();
    }
}
