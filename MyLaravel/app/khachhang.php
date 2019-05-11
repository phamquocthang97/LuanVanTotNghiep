<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table="khachhang";
    public function phieudathang()
    {
    	return $this->hasMany('App\phieudathang','MaKH','MaKH');
    }
}
