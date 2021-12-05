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
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\AdminAuthorController;
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
Route::resource('/adminakun',AdminAkunController::class);
Route::post('deleteakun', [AdminAkunController::class, 'delete']);
Route::post('updatelvl', [AdminAkunController::class, 'updatelvl']);
Route::get('/adminakuncari', function () {
    return view('adminakuncari');
});
Route::get('/adminakuncari', [AdminAkunController::class, 'searchakun']);

Route::get('/adminartikel', function () {
    return view('adminartikel');
});
Route::resource('/adminartikel',AdminArtikelController::class);
Route::resource('/adminartikelcari',AdminArtikelController::class);
Route::get('/adminartcari', [AdminArtikelController::class, 'tampilkatmodal']);
Route::post('deleteartikel', [AdminArtikelController::class, 'deleteart']);
Route::post('updtartkat', [AdminArtikelController::class, 'updtartkat']);
Route::get('/adminartcari', function () { return view('adminartcari');});
Route::get('/adminartcari', [AdminArtikelController::class, 'searchart']);

Route::get('/adminauthor', function () {
    return view('adminauthor');
});
Route::resource('/adminauthor',AdminAuthorController::class);
Route::post('deleteauthor', [AdminAuthorController::class, 'deleteauth']);
Route::get('/adminauthcari', function () { return view('adminauthorcari');});
Route::get('/adminauthcari', [AdminAuthorController::class, 'searchauth']);
Route::get('/artikeledit', function () {
    return view('artikel_edit');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/searchakun', function () {
    return view('searchakun');
});
Route::get('/adminkategori', function () {
    return view('adminkategori');
});
Route::get('/editakun/{idupdt}',[AdminAkunController::class, 'update']);
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

Route::get('/penulis',function(){
  return view('penulis');
});
//LINE BANG ZAID
