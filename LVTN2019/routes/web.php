<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loai-san-pham',
	'uses'=>'PageController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chi-tiet-san-pham',
	'uses'=>'PageController@getChiTiet'
]);
Route::get('lien-he',[
	'as'=>'lien-he',
	'uses'=>'PageController@getLienHe'
]);
Route::get('gioi-thieu',[
	'as'=>'gioi-thieu',
	'uses'=>'PageController@getGioiThieu'
]);

