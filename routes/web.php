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
//LINE SAFUTRA
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/', function () {
    return view('profil');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/artikelbuat', function () {
    return view('artikel_buat');
});
Route::get('/adminakun', function () {
    return view('admin_akun');
});
//LINE IMMANUEL
Route::get('/artikel',function(){
  return view('artikel');
});
//LINE YEHEXKIEL
Route::get('/beranda',function(){
  return view('beranda');
});
//LINE RIZKI
Route::get('/favorit',function(){
  return view('favorit');
});
//LINE BANG ZAID
