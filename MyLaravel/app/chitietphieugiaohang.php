<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphieugiaohang extends Model
{
    protected $table="chitietphieugiaohang";
    public function hanghoa()
    {
    	return $this->belongsTo('App\hanghoa','MaHH','MaGH');
    }
    public function phieugiaohang()
    {
    	return $this->belongsTo('App\phieugiaohang','MaGH','MaGH');
    }
}
