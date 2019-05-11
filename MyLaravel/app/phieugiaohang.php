<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phieugiaohang extends Model
{
    protected $table="phieugiaohang";
    public function chitietphieugiaohang()
    {
    	return $this->hasMany('App\chitietphieugiaohang','MaGH','MaGH');
    }
    public function nhanvien()
    {
    	return $this->belongsTo('App\nhanvien','MaNV','MaGH');
    }
}
