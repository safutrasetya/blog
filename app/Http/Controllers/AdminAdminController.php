<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminAdminController extends Controller
{
    //
    public function index()
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
          // code...
        $listadmin = DB::table('table_admin')
        ->leftjoin('table_akun', 'table_admin.id_akun_admin','=','table_akun.id_akun')
        ->paginate(7);
        return view('adminadmin', ['listadmins'=>$listadmin]);
      }
      else {
        return back();
      }
        //return view('adminakun');
      }
      else {
        return redirect('/login');
      }
    }

    public function searchadmin(){
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_admin')
        ->leftjoin('table_akun', 'table_admin.id_akun_admin','=','table_akun.id_akun')
        ->where('nama','LIKE', '%'.$search_text.'%')->paginate(7);
        return view('adminadmincari',['listadmins'=>$hasil]);
      }
      else {
        return back();
      }
        //return view('adminakun');
      }
      else {
        return redirect('/login');
      }
    }

    public function downgradelvl(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $idupdt = $req->idakun;
        $lvl = 3;
        $updatelvl = DB::table('table_akun')->where('id_akun',$idupdt)->update(
          ['level'=>$lvl]
        );
        $deladmin = DB::table('table_admin')
        ->where('id_akun_admin', $idupdt)
        ->delete();
        $delauthor = DB::table('table_author')
        ->where('id_akun_author', $idupdt)
        ->delete();
        return redirect('adminakun')->with('warning','Akun telah didowngrade menjadi regular!');
      }
      else {
        return back();
      }
        //return view('adminakun');
      }
      else {
        return redirect('/login');
      }
    }
}
