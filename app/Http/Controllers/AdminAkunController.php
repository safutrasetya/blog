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
        $listakun = DB::table('table_akun')->paginate(3);
        return view('adminakun', ['listakuns'=>$listakun]);
        //return view('adminakun');
      }
      else {
        return redirect('/login');
      }
    }

    public function delete(Request $req)
    {
        $iddel= $req->idakun;
        $searchid = DB::table('table_akun')->where('id_akun',$iddel)->delete();
        return back()->with('success','Akun telah dihapus!');
        // return redirect()->route('/adminakun')
        // ->with('success','Akun telah dihapus!');
    }
    public function updatelvl(Request $req)
    {
        $idupdt = $req->idakun;
        $levelakun = $req->levelakun;
        $updatelvl = DB::table('table_akun')->where('id_akun',$idupdt)->update(
          ['level'=>$levelakun]
        );
        if($levelakun==2){
          $searchnama = DB::table('table_akun')->where('id_akun',$idupdt)->first();
          $namaauth = $searchnama->nama;
          $instagram = "https://www.instagram.com/";
          $twitter= "https://twitter.com/";
          $newauth = array('id_akun_author'=>$idupdt,'nama_author'=>$namaauth,'instagram'=>$instagram,'twitter'=>$twitter);
          $addtoauthor = DB::table('table_author')->insert($newauth);
        }elseif($levelakun==3){
          $cariauth = DB::table('table_author')->where('id_akun_author',$idupdt)->delete();
        }
        return redirect('adminakun')->with('success','Level akun telah diupdate!!');
    }
    public function searchakun(){
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_akun')->where('nama','LIKE', '%'.$search_text.'%')->get();
        return view('adminakuncari',compact('hasil'));
    }
}
