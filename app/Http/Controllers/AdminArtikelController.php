<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_artikel;
class AdminArtikelController extends Controller
{
    public function index()
    {
        $listart = DB::table('table_artikel')
                        ->leftJoin('table_kategori', 'table_artikel.id_kat', '=', 'table_kategori.id_kat')
                        ->rightJoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
                        ->rightJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                        ->get();
        $listkat = DB::table('table_kategori')->get();
        return view('adminartikel', ['listarts'=>$listart,'allkategori'=>$listkat]);
    }

    public function deleteart(Request $req)
    {
        $idartdel= $req->idakun;
        $searchid = DB::table('table_artikel')->where('id_artikel',$idartdel)->delete();
        return back()->with('success','Artikel telah dihapus!');
    }

    public function searchart(){
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_artikel')->where('judul','LIKE', '%'.$search_text.'%')
                      ->leftJoin('table_kategori', 'table_artikel.id_kat', '=', 'table_kategori.id_kat')
                      ->rightJoin('table_author', 'table_artikel.id_author', '=', 'table_author.id_author')
                      ->get();
        $listkat = DB::table('table_kategori')->get();
        return view('adminartikelcari',['hasil'=>$hasil,'allkategori'=>$listkat]);
    }
    public function updtartkat(Request $req)
    {
        $idartikel = $req->idart;
        $kategori = $req->updtartikelkat;
        $updatekatart = DB::table('table_artikel')->where('id_artikel',$idartikel)->update(
          ['id_kat'=>$kategori]
        );
        return redirect('adminartikel')->with('success','Kategori artikel telah diupdate!!');
    }
}
