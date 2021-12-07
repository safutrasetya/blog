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
      if ($_SESSION['berhasil'] == '1') {
      $kategori = DB::table('table_kategori')->get();
      return view('kategori',compact('kategori'));
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

}
