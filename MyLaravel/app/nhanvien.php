<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table="nhanvien";
    public function phieugiaohang()
    {
    	return $this->hasMany('App\phieugiaohang','MaNV','MaNV');
    }
}
