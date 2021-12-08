<?php

namespace App\Http\Controllers;
Use  illuminate\Support\Facades\Hash;
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
      $dataauth = DB::table('table_akun')
      ->leftJoin('table_author', 'table_akun.id_akun', '=', 'table_author.id_akun_author')
      ->where('id_akun' , $_SESSION['id'])
      ->get();
      return view('profil', ['dataakun'=>$dataakun,'datafav'=>$datafav,'dataauth'=>$dataauth] );
    }

    public function authorprofil($idauthor){
      session_start();
      $dataauthor = Db::table('table_author')
        ->rightjoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
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
      $idakunedit = $_SESSION['id'];
      $dataakunedit = DB::table('table_akun')
      ->where('id_akun', $idakunedit)
      ->get();
      if($_SESSION['level']==2||$_SESSION['level']==1){
        $dataauthor = DB::table('table_author')
        ->where('id_akun_author', $idakunedit)
        ->get();
      }
      return view('editakun', ['listdata'=>$dataakunedit, 'listauthor'=>$dataauthor]);
    }
    public function updateprofil(Request $req){
      session_start();
      $idakun = $req->idakun;
      $nama = $req->nama;
      $nohp = $req->nohp;
      $password = $req->password;
      $passwordre = $req->repassword;
      if($_SESSION['level']==2||$_SESSION['level']==1){
        $instagram= $req->instagram;
        $twitter = $req->twitter;
        $tgllahir = $req->tgllahir;
        $quote = $req->quote;
      }
      $req->validate([
        'gambarakun'=>'required|image'
      ]);
      $banner = time().'.'.$req->gambarakun->extension();
      $req->gambarakun->move(public_path('img'),$banner);
      if(!isset($banner)){
        $banner = "author_6.png";
      }
      $cekdb = DB::table('table_akun')->where('id_akun',$idakun)->get();
      if($password!=$_SESSION['pass']){
        $password = Hash::make($password);
      }
          if($_SESSION['level']==2||$_SESSION['level']==1){
            $updtcmd = DB::table('table_akun')->where('id_akun',$idakun)->update([
              'nama'=>$nama,
              'no_hp'=>$nohp,
              'pass'=>$password,
              'gambar_akun'=>$banner
            ]);
            $_SESSION['gambarakun']=$banner;
            $updtauthor = DB::table('table_author')->where('id_akun_author',$idakun)
            ->update([
              'instagram'=>$instagram,
              'twitter'=>$twitter,
              'tanggal_lahir'=>$tgllahir,
              'quote'=>$quote
            ]);
            return redirect('profil')->with('success','Akun berhasil diupdate');
          }else{
            $updtcmd = DB::table('table_akun')->where('id_akun')->update([
              'nama'=>$nama,
              'no_hp'=>$nohp,
              'pass'=>$password,
              'gambar_akun'=>$banner
            ]);
            $_SESSION['gambarakun']=$banner;
            return redirect('profil')->with('success','A');
          }
    }
}
