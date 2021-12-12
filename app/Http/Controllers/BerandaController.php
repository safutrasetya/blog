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
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        $cekartterbaru = DB::table('table_artikel')
          ->leftjoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
          ->leftjoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
          ->orderBy('id_artikel', 'desc')
          ->skip(0)->take(10)
          ->get();

        return view('/beranda', ['artikelterbaru'=>$cekartterbaru])->with('berhasil', 'berhasil!');
      }
      else{
        return redirect('/login');
      }
    }
}
