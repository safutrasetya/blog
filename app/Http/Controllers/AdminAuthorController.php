<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_author;
use App\Models\table_akun;
class AdminAuthorController extends Controller
{
    //
    public function index()
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $listauthor = DB::table('table_author')
                        ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                        ->paginate(7);
        return view('adminauthor', ['listauthors'=>$listauthor]);
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
    public function deleteauth(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $idauthdel= $req->idauth;
        $idakun = $req->idakun;
        $lvl = 3;
        $searchid = DB::table('table_author')->where('id_author',$idauthdel)->delete();
        $searchakun = DB::table('table_akun')->where('id_akun',$idakun)->update(
          ['level'=>$lvl]
        );
        return back()->with('success','Author telah dihapus!');
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
    public function searchauth(){
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_author')
        ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
        ->where('nama','LIKE', '%'.$search_text.'%')->paginate(7);
        return view('adminauthorcari',['hasil'=>$hasil]);
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
