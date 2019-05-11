<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hanghoa extends Model
{
    protected $table="hanghoa";

    public function loaihanghoa()
    {
    	return $this->belongsTo('App\loaihanghoa','MaLHH','MaHH');
    }
    public function nhasanxuat()
    {
    	return $this->belongsTo('App\nhasanxuat','MaNSX','MaHH');
    }
    public function chitietphieudathang()
    {
    	return $this->hasMany('App\chitietphieudathang','MaHH','MaHH');
    }
    public function chitietphieugiaohang()
    {
    	return $this->hasMany('App\chitietphieugiaohang','MaHH','MaHH');
    }
}
