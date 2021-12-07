<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_akun;
use App\Models\table_author;

class ProfilController extends Controller
{
    public function index(){
      session_start();
      $dataakun = DB::table('table_akun')
        ->where('id_akun', $_SESSION['id'])->get();
      $datafav = DB::table('table_fav_artikel')
        ->leftJoin('table_artikel', 'table_fav_artikel.id_artikel', '=', 'table_artikel.id_artikel')
        ->leftjoin('table_kategori', 'table_fav_artikel.id_kategori', '=', 'table_kategori.id_kat')
        ->where('id_akun' , $_SESSION['id'])
        ->orderBy('id_favArt', 'desc')
        ->skip(0)->take(2)
        ->get();

      return view('profil', ['dataakun'=>$dataakun,'datafav'=>$datafav] );
    }

    public function authorprofil($idauthor){
      session_start();
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
    public function editprofil(){
      session_start();
      $idakunedit = 1;
      $dataakunedit = DB::table('table_akun')
      ->where('id_akun', $idakunedit)
      ->get();
      return view('editakun', ['listdata'=>$dataakunedit]);
    }
    public function updateprofil(Request $req){
      session_start();
      $idakun = $req->idakun;
      $nama = $req->nama;
      $nohp = $req->nohp;
      $password = $req->password;
      $passwordre = $req->repassword;
      $cekdb = DB::table('table_akun')->where('id_akun',$idakun)->get();
      foreach($cekdb as $checkdb)
      if($checkdb->nama == $nama && $checkdb->no_hp==$nohp && $checkdb->pass==$password){
        return redirect('profil');
      }else{
        $updtcmd = DB::table('table_akun')->where('id_akun')->update(
          ['nama'=>$nama, 'no_hp'=>$nohp, 'pass'=>$password]);
        return redirect('profil')->with('success','Akun berhasil di ubah!');

      }
      // $updtcmd = DB::table('table_akun')->where('id_akun')->update(
      //   ['nama'=>$nama, 'no_hp'=>$nohp, 'pass'=>$password]);
      // return redirect('profil')->with('success','Akun berhasil di ubah!');
    }
}
