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
      $search_text = $_GET['searchi'];
      $hasil_kategori = DB::table('table_kategori')
      ->where('nama_kat','LIKE', '%'.$search_text.'%')
    }
}
