<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminKategoriController;

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
    return view('adminakun');
});
Route::get('/adminartikel', function () {
    return view('adminartikel');
});
Route::get('/adminauthor', function () {
    return view('adminauthor');
});
Route::get('/artikeledit', function () {
    return view('artikel_edit');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/searchakun', function () {
    return view('searchakun');
});
Route::get('/adminkategori',[adminKategoriController::class,'index'])->name('adKategori');
// Route::get('/adminkategori/delete{id}',[adminKategoriController::class,'destroy'])->name('adKategoridelete');
Route::post('/deletekategori', [adminKategoriController::class, 'delete']);
Route::get('/adminkategori/search',[adminKategoriController::class,'search']);
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
Route::get('/editakun',function(){
  return view('editakun');
});
Route::get('/penulis',function(){
  return view('penulis');
});
//LINE BANG ZAID
