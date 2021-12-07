<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\tabel_akun;
use App\Models\table_author;

class AdminAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
          // code...
        $listakun = DB::table('table_akun')
        ->rightjoin('table_levelnama', 'table_akun.level','=','table_levelnama.id_level')
        ->paginate(7);
        return view('adminakun', ['listakuns'=>$listakun]);
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

    public function delete(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $iddel= $req->idakun;
        $searchid = DB::table('table_akun')->where('id_akun',$iddel)->delete();
        return back()->with('success','Akun telah dihapus!');
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
    public function updatelvl(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $idupdt = $req->idakun;
        $levelakun = $req->levelakun;
        $updatelvl = DB::table('table_akun')->where('id_akun',$idupdt)->update(
          ['level'=>$levelakun]
        );
        if($levelakun==2){
          $searchnama = DB::table('table_akun')->where('id_akun',$idupdt)->first();
          $instagram = "https://www.instagram.com/";
          $twitter= "https://twitter.com/";
          $newauth = array('id_akun_author'=>$idupdt,'instagram'=>$instagram,'twitter'=>$twitter);
          $addtoauthor = DB::table('table_author')->insert($newauth);
        }elseif($levelakun==3){
          $cariauth = DB::table('table_author')->where('id_akun_author',$idupdt)->delete();
        }
        return redirect('adminakun')->with('success','Level akun telah diupdate!!');
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
    public function searchakun(){
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_akun')->where('nama','LIKE', '%'.$search_text.'%')->paginate(7);
        return view('adminakuncari',['hasil'=>$hasil]);
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
