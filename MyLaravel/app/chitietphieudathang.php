<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphiuedathang extends Model
{
    protected $table="chitietphieudathang";
    public function hanghoa()
    {
    	return $this->belongsTo('App\hanghoa','MaHH','MaDDH');
    }
    public function phieudathang()
    {
    	return $this->belongsTo('App\phieudathang','MaDDH','MaDDH');
    }
}
