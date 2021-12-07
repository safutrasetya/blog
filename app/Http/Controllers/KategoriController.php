<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tabel_akun;
use App\Models\table_author;
use App\Models\table_kategori;

class KategoriController extends Controller
{
  public function index()
    {
      session_start();
      if (isset($_SESSION['berhasil'])) {

      if ($_SESSION['berhasil'] == '1') {
      $kategori = DB::table('table_kategori')->get();
      return view('kategori',compact('kategori'));
    }
  }
    else {
      return redirect('/login');
    }

      }
      public function author()
        {
          session_start();
          if (isset($_SESSION['berhasil'])) {

          if ($_SESSION['berhasil'] == '1') {
          // $author = DB::table('table_author')->get();
          // $akun = DB::table('table_akun')->where('id_akun',$author[0]->id_akun_author)->get();
          $author = DB::table('table_author')
          ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
          ->select('table_akun.nama', 'table_akun.email','table_author.id_author','table_author.gambar_author','table_author.tanggal_lahir','table_author.quote')
          ->get();
          return view('author',['author'=>$author]);
        }
      }
        else {
          return redirect('/login');
        }

          }
            public function detailkategori($id)
              {
                session_start();
                if ($_SESSION['berhasil'] == '1') {
                $kategori = DB::table('table_kategori')->where('id_kat',$id)->get();
                $artikel = DB::table('table_artikel')->where('id_kat',$id)->get();
                return view('detailkategori',compact('artikel'),compact('kategori'));
              }
              else {
                return redirect('/login');
              }

              }
                      public function detailartikel($id)
                        {
                          session_start();
                          if ($_SESSION['berhasil'] == '1') {
                          $artikel = DB::table('table_artikel')->where('id_artikel',$id)->get();
                          $author = DB::table('table_author')->where('id_author',$artikel[0]->id_author)->get();
                          return view('detailartikel',compact('artikel'),compact('author'));
                        }
                        else {
                          return redirect('/login');
                        }

                                }
                                public function detailauthor($id)
                                  {
                                    session_start();
                                    if (isset($_SESSION['berhasil'])) {
                                    if ($_SESSION['berhasil'] == '1') {
                                    $author = DB::table('table_author')
                                    ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                                    ->select('table_akun.nama', 'table_akun.email','table_author.id_author','table_author.gambar_author','table_author.tanggal_lahir','table_author.quote')
                                    ->where('table_author.id_author',$id)
                                    ->get();
                                    $artikel = DB::table('table_artikel')->where('id_author',$author[0]->id_author)->get();
                                    return view('detailauthor',compact('artikel'),compact('author'));
                                  }
                                }
                                  else {
                                    return redirect('/login');
                                  }

                                          }

}
