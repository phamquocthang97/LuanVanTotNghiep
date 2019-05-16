<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex()
    {
    	$slide=Slide::all();
    	$new_product=Product::where('new','=',1)->paginate(4);
    	$sanpham_khuyenmai=Product::where('promotion_price','<>',0)->paginate(8);
    	//return view('page.trangchu',['slide'=>$slide],['new_product'=>$new_product]);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp($type){
        $sanpham=Product::where('id_type',$type)->get();
        $sanphamkhac=Product::where('id_type','<>',$type)->paginate(3);
        $loai=ProductType::all();
        $loaisanpham=ProductType::where('id',$type)->first();
    	return view('page.loai_sanpham',compact('sanpham','sanphamkhac','loai','loaisanpham'));
    }
    public function getChiTiet($id){
        $sanphamchitiet=Product::where('id',$id)->first();
        $sanphamtuongtu=Product::where('id_type',$sanphamchitiet->id_type)->paginate(6);
    	return view('page.chitiet_sanpham',compact('sanphamchitiet','sanphamtuongtu'));
    }
    public function getLienHe(){
    	return view('page.lienhe');
    }
    public function getGioiThieu(){
    	return view('page.gioithieu');
    }
}
