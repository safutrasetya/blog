<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_author;
use App\Models\table_artikel;

class ArtikelAuthorController extends Controller
{
  public function authorartikel($idauthor)
  {
    session_start();
    $semuaartikel=DB::table('table_artikel')
    ->where('id_author',$idauthor)
    ->get();
    $nama=DB::table('table_akun')
    ->rightjoin('table_author', 'table_akun.id_akun', '=', 'table_author.id_akun_author')
    ->where('id_author',$idauthor)
    ->first();
    return view('authorartikel', ['artikelauthor'=>$semuaartikel,'nama_author'=>$nama ]);
  }


}
