<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaihanghoa extends Model
{
    protected $table="loaihanghoa";

    public function hanghoa()
    {
    	return $this->hasMany('App\hanghoa','MaLHH','MaLHH');
    }
}
