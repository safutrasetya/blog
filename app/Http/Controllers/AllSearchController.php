<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\table_author;
use App\Models\table_akun;
use App\Models\table_artikel;
use App\Models\table_kategori;

class AllSearchController extends Controller
{

    public function allsearch()
    {
      $search_text = $_GET['cari'];
      $hasil_kategori = DB::table('table_kategori')
      ->where('nama_kat','LIKE', '%'.$search_text.'%')
      ->get();
      $hasil_artikel = DB::table('table_artikel')
      ->where('judul','LIKE', '%'.$search_text.'%')
      ->get();
      $hasil_author = DB::table('table_author')
      ->leftjoin('table_akun','table_author.id_akun_author', '=', 'table_akun.id_akun')
      ->where('nama','LIKE', '%'.$search_text.'%')
      ->get();
      return view('search',[
        'search_kategori'=>$hasil_kategori,
        'search_artikel'=>$hasil_artikel,
        'search_author'=>$hasil_artikel]);
    }
}
