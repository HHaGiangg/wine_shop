<?php

use Illuminate\Support\Facades\Route;

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
//  FRONTEND
Route::group(['namespace' => 'Frontend'], function (){
    //Trang Chu
    Route::get('','HomeController@index')->name('get.home');

    //Danh Muc San Pham
    Route::get('danh-muc/{slug}','CategoryController@index')->name('get.category');

    //San Pham Chi Tiet
    Route::get('san-pham/{slug}','ProductDetailController@index')->name('get.product_detail');

    //Menu Bai Viet
    Route::get('menu/{slug}','MenuController@index')->name('get.menu');

    //Chi Tiet Bai Viet
    Route::get('bai-viet/{slug}','ArticleDetailController@index')->name('get.article_detail');
});

include 'route_admin.php';

