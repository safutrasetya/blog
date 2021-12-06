<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_fav_artikel;
use App\Models\table_fav_kat;
use App\Models\table_fav_author;
class FavoritController extends Controller
{
    public function index(){
      $cekartfav = DB::table('table_fav_artikel')
        ->rightjoin('table_artikel', 'table_fav_artikel.id_artikel', '=', 'table_artikel.id_artikel')
        ->where('id_akun', 1)
        ->orderBy('id_favArt', 'desc')
        ->skip(0)->take(4)
        ->get();
      $cekkatfav = DB::table('table_fav_kat')
        ->rightjoin('table_kategori', 'table_fav_kat.id_kat', '=', 'table_kategori.id_kat')
        ->where('id_akun', 1)
        ->orderBy('id_fav_kat', 'desc')
        ->skip(0)->take(4)
        ->get();
      $cekauthfav = DB::table('table_fav_author')
        ->rightjoin('table_author', 'table_fav_author.id_author', '=', 'table_author.id_author')
        ->where('id_akun', 1)
        ->orderBy('id_favAuthor', 'desc')
        ->skip(0)->take(4)
        ->get();
      return view('favorit', ['listartfav'=>$cekartfav , 'listkatfav'=>$cekkatfav, 'listauthfav'=>$cekauthfav]);
    }
}
