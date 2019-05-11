<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaihanghoa;
use App\hanghoa;
use App\nhasanxuat;

class PageController extends Controller
{
    public function getIndex()
    {
    	$loaihanghoa=loaihanghoa::all();
    	$nhasanxuat=nhasanxuat::all();
    	return view('page.trangchu',['loaihanghoa'=>$loaihanghoa,'nhasanxuat'=>$nhasanxuat]);
    }
    public function getChiTiet($id){
    	$sp = hanghoa::where('MaHH','=',$id)->get();
    	return view('welcome',['sanpham'=>$sp]);
    	
    }
}
