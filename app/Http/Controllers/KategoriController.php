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
    $cek = DB::table('table_fav_kat')
    ->where('id_kat',$kategori[0]->id_kat)
    ->where('id_akun',$_SESSION['id'])
    ->first();
    if ($cek == NULL) {
      return view('detailkategori',['artikel'=>$artikel,'kategori'=>$kategori,'cek'=>"belum"]);
    }else {
      return view('detailkategori',['artikel'=>$artikel,'kategori'=>$kategori,'cek'=>"sudah"]);
    }
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
    $akun = DB::table('table_akun')->where('id_akun',$author[0]->id_akun_author)->get();
    $cek = DB::table('table_fav_artikel')
    ->where('id_artikel',$artikel[0]->id_artikel)
    ->where('id_kategori',$artikel[0]->id_kat)
    ->where('id_akun',$_SESSION['id'])
    ->first();
    if ($cek == NULL) {
      return view('detailartikel',['artikel'=>$artikel, 'author'=>$author,'akun'=>$akun,'cek'=>"belum"]);
    }else {
      return view('detailartikel',['artikel'=>$artikel, 'author'=>$author,'akun'=>$akun,'cek'=>"sudah"]);
    }
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
      $cek = DB::table('table_fav_author')
      ->where('id_author',$author[0]->id_author)
      ->where('id_akun',$_SESSION['id'])
      ->first();
      if ($cek == NULL) {
        return view('detailauthor',['artikel'=> $artikel, 'author'=> $author, 'cek'=>"belum"]);
      }else {
        return view('detailauthor',['artikel'=> $artikel, 'author'=> $author, 'cek'=>"sudah"]);
      }
    }
  }
  else {
    return redirect('/login');
  }
}
public function tbhfavkat(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_kat')->insert([
          'id_akun' => $request->idakun,
          'id_kat' => $request->idkat,
      ]);
      return redirect('/kategori/'.$request->idkat);
    }
  }
  else {
    return redirect('/login');
  }
}
public function tbhfavart(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_artikel')->insert([
          'id_akun' => $request->idakun,
          'id_artikel' => $request->idart,
          'id_kategori' => $request->idkat,
      ]);
      return back();
    }
  }
  else {
    return redirect('/login');
  }

}
public function tbhfavaut(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_author')->insert([
          'id_akun' => $request->idakun,
          'id_author' => $request->idaut,
      ]);
      return back();
    }
  }
  else {
    return redirect('/login');
  }

}
public function hpsfavkat(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_kat')
      ->where('id_akun',$request->idakun)
      ->where('id_kat',$request->idkat)
      ->delete();
      return redirect('/kategori/'.$request->idkat);
    }
  }
  else {
    return redirect('/login');
  }
}
public function hpsfavart(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_artikel')
      ->where('id_akun',$request->idakun)
      ->where('id_artikel',$request->idart)
      ->where('id_kategori',$request->idkat)
      ->delete();
      return back();
    }
  }
  else {
    return redirect('/login');
  }
}
public function hpsfavaut(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])) {
    if ($_SESSION['berhasil'] == '1') {
      DB::table('table_fav_author')
      ->where('id_akun',$request->idakun)
      ->where('id_author',$request->idaut)
      ->delete();
      return back();
    }
  }
  else {
    return redirect('/login');
  }
}

}
