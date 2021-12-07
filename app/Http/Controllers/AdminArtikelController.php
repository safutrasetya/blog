<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_artikel;
class AdminArtikelController extends Controller
{
    public function index()
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $listart = DB::table('table_artikel')
                        ->leftJoin('table_kategori', 'table_artikel.id_kat', '=', 'table_kategori.id_kat')
                        ->rightJoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
                        ->rightJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                        ->paginate(7);
        $listkat = DB::table('table_kategori')->get();
        return view('adminartikel', ['listarts'=>$listart,'allkategori'=>$listkat]);
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

    public function deleteart(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $idartdel= $req->idakun;
        $searchid = DB::table('table_artikel')->where('id_artikel',$idartdel)->delete();
        return back()->with('success','Artikel telah dihapus!');
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

    public function searchart(){
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_artikel')->where('judul','LIKE', '%'.$search_text.'%')
                      ->leftJoin('table_kategori', 'table_artikel.id_kat', '=', 'table_kategori.id_kat')
                      ->rightJoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
                      ->rightJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                      ->paginate(7);
        $listkat = DB::table('table_kategori')->get();
        return view('adminartikelcari',['hasil'=>$hasil,'allkategori'=>$listkat]);
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
    public function updtartkat(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $idartikel = $req->idart;
        $kategori = $req->updtartikelkat;
        $updatekatart = DB::table('table_artikel')->where('id_artikel',$idartikel)->update(
          ['id_kat'=>$kategori]
        );
        return redirect('adminartikel')->with('success','Kategori artikel telah diupdate!!');
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
