<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhasanxuat extends Model
{
    protected $table="nhasanxuat";

    public function hanghoa()
    {
    	return $this->hasMany('App\hanghoa','MaNSX','MaNSX');
    }
}
