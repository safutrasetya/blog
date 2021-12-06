<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_author;
use App\Models\table_artikel;
class BerandaController extends Controller
{
    //
    public function index(){
      $cekartterbaru = DB::table('table_artikel')
        ->rightjoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
        ->orderBy('id_artikel', 'desc')
        ->skip(0)->take(10)
        ->get();

      return view('beranda', ['artikelterbaru'=>$cekartterbaru]);

    }
}
