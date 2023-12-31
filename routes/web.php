<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NamaDanLogoController;
use App\Http\Controllers\ContactWebsiteController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CustomLembarController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;



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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart',[WebsiteController::class,'cart']);
    Route::post('/cart',[WebsiteController::class,'addtocart']);
    Route::get('/cart/{id}/hapus',[WebsiteController::class,'deletetocart']);
    Route::get('/checkout',[WebsiteController::class,'checkout']);
    Route::post('/checkout-data',[WebsiteController::class,'CheckoutData']);
    Route::get('/terimakasih',[WebsiteController::class,'terimakasih']);

    Route::get('/riwayat-transaksi',[WebsiteController::class,'RiwayatTransaksi']);
    Route::get('/riwayat-transaksi/{created_at}',[WebsiteController::class,'RiwayatTransaksiDetail']);

});

Route::get('/',[WebsiteController::class,'index']);
Route::get('/category/{id}/detail',[WebsiteController::class,'categorydetail']);
Route::get('/product/{id}/detail',[WebsiteController::class,'productdetail']);
Route::get('/support/{id}/detail',[WebsiteController::class,'supportdetail']);
Route::get('/get-harga/{sizeId}', [WebsiteController::class,'getHargasize']);
Route::get('/url_get_harga/{id}', [WebsiteController::class, 'getHargacustomLembar']);



// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth', 'admin']], function () {
    
Route::post('/change-profile-picture',[AdminController::class,'changeProfilePicture'])->name('change-profile-picture');

Route::get('admin/dashboard',[AdminController::class,'index']);


Route::get('/admin/transaksi',[AdminController::class,'transaksi']);
Route::get('/admin/detail/{created_at}/transaksi',[AdminController::class,'transaksidetail']);
Route::put('/admin/konfirmasi-proses/{created_at}/transaksi',[AdminController::class,'Prosestransaksidetail']);
Route::get('/admin/konfirmasi-proses/{created_at}/transaksi',[AdminController::class,'KonfirmasiTransaksi']);
Route::get('/admin/cetak/transaksi',[AdminController::class,'Formtransaksidetailcetak']);
Route::get('/admin/transaksi/cetak-semua-data',[AdminController::class,'TransaksiCetakSemuaData']);

Route::post('admin/transaksi/cetak-data-pertanggal',[AdminController::class,'TransaksiCetakaDataPerTanggal']);
Route::post('admin/transaksi/search',[AdminController::class,'transaksiSearch']);

Route::get('admin/category',[CategoryController::class,'index']);
Route::get('admin/category/create',[CategoryController::class,'create']);
Route::post('admin/category/create',[CategoryController::class,'store']);
Route::get('admin/category/{id}/edit',[CategoryController::class,'edit']);
Route::put('admin/category/{id}/edit',[CategoryController::class,'update']);
Route::get('admin/category/{category}/hapus',[CategoryController::class,'destroy']);


Route::get('admin/product',[ProductController::class,'index']);
Route::get('admin/product/create',[ProductController::class,'create']);
Route::post('admin/product/create',[ProductController::class,'store']);
Route::get('admin/product/{id}/edit',[ProductController::class,'edit']);
Route::put('admin/product/{id}/edit',[ProductController::class,'update']);
Route::get('admin/product/{id}/detail',[ProductController::class,'show']);
Route::get('admin/product/{product}/hapus',[ProductController::class,'destroy']);


Route::get('admin/slider',[SliderController::class,'index']);
Route::get('admin/slider/create',[SliderController::class,'create']);
Route::post('admin/slider/create',[SliderController::class,'store']);
Route::get('admin/slider/{id}/edit',[SliderController::class,'edit']);
Route::put('admin/slider/{id}/edit',[SliderController::class,'update']);
Route::get('admin/slider/{slider}/hapus',[SliderController::class,'destroy']);

Route::get('admin/nama_dan_logo',[NamaDanLogoController::class,'index']);
Route::get('admin/nama_dan_logo/create',[NamaDanLogoController::class,'create']);
Route::post('admin/nama_dan_logo/create',[NamaDanLogoController::class,'store']);
Route::get('admin/nama_dan_logo/{id}/edit',[NamaDanLogoController::class,'edit']);
Route::put('admin/nama_dan_logo/{id}/edit',[NamaDanLogoController::class,'update']);
Route::get('admin/nama_dan_logo/{NamaDanLogo}/hapus',[NamaDanLogoController::class,'destroy']);

Route::get('admin/contact_website',[ContactWebsiteController::class,'index']);
Route::get('admin/contact_website/create',[ContactWebsiteController::class,'create']);
Route::post('admin/contact_website/create',[ContactWebsiteController::class,'store']);
Route::get('admin/contact_website/{id}/edit',[ContactWebsiteController::class,'edit']);
Route::put('admin/contact_website/{id}/edit',[ContactWebsiteController::class,'update']);
Route::get('admin/contact_website/{ContactWebsite}/hapus',[ContactWebsiteController::class,'destroy']);

Route::get('admin/support',[SupportController::class,'index']);
Route::get('admin/support/create',[SupportController::class,'create']);
Route::post('admin/support/create',[SupportController::class,'store']);
Route::get('admin/support/{id}/detail',[SupportController::class,'show']);
Route::get('admin/support/{id}/edit',[SupportController::class,'edit']);
Route::put('admin/support/{id}/edit',[SupportController::class,'update']);
Route::get('admin/support/{support}/hapus',[SupportController::class,'destroy']);

Route::get('admin/size',[SizeController::class,'index']);
Route::get('admin/size/create',[SizeController::class,'create']);
Route::post('admin/size/create',[SizeController::class,'store']);
Route::get('admin/size/{id}/edit',[SizeController::class,'edit']);
Route::put('admin/size/{id}/edit',[SizeController::class,'update']);
Route::get('admin/size/{size}/hapus',[SizeController::class,'destroy']);

Route::get('admin/custom_lembar',[CustomLembarController::class,'index']);
Route::get('admin/custom_lembar/create',[CustomLembarController::class,'create']);
Route::post('admin/custom_lembar/create',[CustomLembarController::class,'store']);
Route::get('admin/custom_lembar/{id}/edit',[CustomLembarController::class,'edit']);
Route::put('admin/custom_lembar/{id}/edit',[CustomLembarController::class,'update']);
Route::get('admin/custom_lembar/{customlembar}/hapus',[CustomLembarController::class,'destroy']);


Route::get('admin/admin_user',[AdminUserController::class,'index']);
Route::get('admin/admin_user/{id}/edit',[AdminUserController::class,'edit']);
Route::put('admin/admin_user/{id}/edit',[AdminUserController::class,'update']);
});