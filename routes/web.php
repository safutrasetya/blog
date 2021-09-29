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
//LINE IMMANUEL
Route::get('/artikel',function(){
  return view('artikel');
});
//LINE YEHEXKIEL

//LINE RIZKI

//LINE BANG ZAID
