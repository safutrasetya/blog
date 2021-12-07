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
                          return view('detailartikel',compact('artikel'));
                        }
                        else {
                          return redirect('/login');
                        }

                                }
    public function login(Request $request)
              {
                      $data =  DB::table('table_akun')->where('email',$request->email)->first();
                      if (!$data) {
                        return redirect('/login')->with('alert', 'Email Salah, Silahkan Periksa Kembali Email Anda')->with('cek','dikirim');

                      }
                       if (Hash::check($request->password, $data->pass)) {
                         session_start();
                         $_SESSION['berhasil'] = '1';
                         return redirect('/beranda')->with('berhasil', 'berhasil!')->with('cek','dikirim');
                         }
                         return redirect('/login')->with('alert2', 'Password Anda Salah !')->with('cek','dikirim');
          }
          public function HalamanLogin(Request $request)
                    {
                               session_start();
                               if ($_SESSION['berhasil'] == "1") {
                                 return back();
                               }
                               else {
                                 return view('login');
                               }
                }
                public function HalamanDaftar(Request $request)
                          {
                            session_start();
                            if ($_SESSION['berhasil'] == "1") {
                              return back();
                            }
                            else {
                              return view('daftar');
                      }
                    }
                    public function logout(Request $request)
                              {
                                session_start();
                              $_SESSION['berhasil'] = "0";
                                  return redirect('/login');
                        }
}
