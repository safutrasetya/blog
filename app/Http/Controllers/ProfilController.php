<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_akun;
use App\Models\table_author;

class ProfilController extends Controller
{
    public function index(){
      $idakun = 1;
      $dataakun = DB::table('table_akun')
        ->where('id_akun', $idakun)->get();
      $datafav = DB::table('table_fav_artikel')
        ->leftJoin('table_artikel', 'table_fav_artikel.id_artikel', '=', 'table_artikel.id_artikel')
        ->leftjoin('table_kategori', 'table_fav_artikel.id_kategori', '=', 'table_kategori.id_kat')
        ->where('id_akun' , $idakun)
        ->orderBy('id_favArt', 'desc')
        ->skip(0)->take(2)
        ->get();

      return view('profil', ['dataakun'=>$dataakun,'datafav'=>$datafav] );
    }

    public function authorprofil($idauthor){
      $dataauthor = Db::table('table_author')
        ->rightjoin('table_akun', 'table_author.id_author', '=', 'table_akun.id_akun')
        ->where('id_author', $idauthor)
        ->get();
      $dataartauth = DB::table('table_artikel')
        ->where('id_author', $idauthor)
        ->orderBy('id_artikel', 'desc')
        ->skip(0)->take(2)
        ->get();
      return view('authorprofile', ['dataauthor'=>$dataauthor,'dataart'=>$dataartauth]);
    }
}