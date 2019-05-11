<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phieudathang extends Model
{
    protected $table="phieudathang";
    public function chitietphieudathang()
    {
    	return $this->hasMany('App\chitietphieudathang','MaDDH','MaDDH');
    }
    public function khachhang()
    {
    	return $this->belongsTo('App\khachhang','MaKH','MaDDH');
    }
}
