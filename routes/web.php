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
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminAdminController;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelAuthorController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllSearchController;
// Route::get('/profil', function () {
//     return view('profil');
// });
Route::resource('/',ProfilController::class);
Route::resource('/profil',ProfilController::class);
Route::get('/editprofil',[ProfilController::class, 'editprofil']);
Route::post('/updtprofil',[ProfilController::class, 'updateprofil'] );

Route::post('/daftar', [LoginController::class, 'store']);
Route::get('/daftar', [LoginController::class, 'HalamanDaftar']);
Route::get('/login', [LoginController::class, 'HalamanLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/functionlogout', [LoginController::class, 'logout']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{id}', [KategoriController::class, 'detailkategori']);
Route::get('/kategori/artikel/{id}', [KategoriController::class, 'detailartikel']);
Route::get('/author', [KategoriController::class, 'author']);
Route::get('/author/{id}', [KategoriController::class, 'detailauthor']);
Route::get('/author/artikel/{id}', [KategoriController::class, 'detailArtikelAuthor']);

Route::get('/artikelbuat', function () {
    return view('artikel_buat');
});
// Route::get('/adminakun', [AdminAkunController::class, 'HalamanAdmin']);
// Route::get('/adminakun', function () {
//     return view('adminakun');
// });
Route::resource('/adminakun',AdminAkunController::class);
Route::post('deleteakun', [AdminAkunController::class, 'delete']);
Route::post('updatelvl', [AdminAkunController::class, 'updatelvl']);
Route::get('/adminakuncari', function () {
    return view('adminakuncari');
});
Route::get('/adminakuncari', [AdminAkunController::class, 'searchakun']);
Route::resource('/adminadmin',AdminAdminController::class);
Route::get('/adminadmincari', function () {
    return view('adminadmincari');
});
Route::get('/adminadmincari', [AdminAdminController::class, 'searchadmin']);
Route::post('downgradelvl', [AdminAkunController::class, 'downgradelvl']);

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

Route::get('/adminkatcari', [adminKategoriController::class, 'search']);
Route::resource('/favorit',FavoritController::class);
Route::get('/artikeledit', function () {
    return view('artikel_edit');
});
Route::resource('/beranda',BerandaController::class);
Route::get('/authorprofile/{idauthor}', [ProfilController::class, 'authorprofil']);

Route::get('/search', function () {
    return view('search');
});
Route::get('/searchakun', function () {
    return view('searchakun');
});
Route::get('/adminkategori',[adminKategoriController::class,'index']);
Route::get('editkategori/{id}',[adminKategoriController::class,'edit']);
Route::post('/updatekategori',[adminKategoriController::class,'update']);
Route::get('tambahkategori',[adminKategoriController::class,'upload']);
Route::post('/simpankategori',[adminKategoriController::class,'upload_proses']);
// Route::get('/adminkategori/delete{id}',[adminKategoriController::class,'destroy'])->name('adKategoridelete');
Route::post('/deletekategori', [adminKategoriController::class, 'delete']);
Route::get('searchkategori',[adminKategoriController::class,'search'])->name('search');
//LINE IMMANUEL
Route::get('/artikel',function(){
  return view('artikel');
});
//LINE YEHEXKIEL
Route::get('/authorartikel/{idauthor}', [ArtikelAuthorController::class, 'authorartikel']);
Route::get('/searchall', [AllSearchController::class, 'allsearch']);
//LINE RIZKI
// Route::get('/favorit',function(){
//   return view('favorit');
// });

Route::get('/penulis',function(){
  return view('penulis');
});
//LINE BANG ZAID

// Artikel author

// Route::get('/author/artikel',function(){
//   return view('authorartikel');
// });
