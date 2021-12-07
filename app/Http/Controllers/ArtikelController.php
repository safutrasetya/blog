<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\table_kategori;
use App\Models\table_artikel;
use App\Models\table_author;
use App\Models\table_akun;

class ArtikelController extends Controller
{
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 2) {
        $artikels = DB::table('table_artikel')->where('id_artikel',$id)->get();
        $kategoris = DB::table('table_kategori')->get();
        return view('artikeledit',['artikels'=>$artikels,'kategoris'=>$kategoris]);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 2) {
      $req->validate([
        'judulart'=>'required',
        'gambarart'=>'image',
        'artikelbaru'=>'required'
      ]);
      $idauthor=$req->id;
      $artikels =DB::table('table_artikel')->where('id_artikel',$req->idart);
      if($req->file('gambarart')==""||$req->has('kategori')==""){
        $artikels->update([
          'judul'=>$req->judulart,
          'isi_art'=>$req->artikelbaru,
        ]);
      }else{
        $banner=time().'.'.$req->gambarart->extension();
        $req->gambarart->move(public_path('img'),$banner);
        $artikels->update([
          'id_kat'=>$req->kategoriart,
          'judul'=>$req->judulart,
          'isi_art'=>$req->artikelbaru,
          'gambar_art'=>$banner,
        ]);
      }
        return redirect('/authorprofile/'.$idauthor)->with('success','Artikel berhasil diperbarui');
    }else{
      return back();
    }
  }else{
    return redirect('/login');
  }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tambah($idauthor)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
      if ($_SESSION['level'] == 2) {
      $kategoris = DB::table('table_kategori')->get();
      $author = DB::table('table_author')->where('id_author',$idauthor)->get();

      return view('artikelbuat',['kategoris'=>$kategoris,'author'=>$author]);
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
    public function tambah_proses(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 2) {
      $req->validate([
        'judulart' => 'required',
        'gambarart'=>'required|image',
        'artikelbaru'=>'required',
        'kategori' =>'required',
      ]);
        $idauthor =$req->id;
        $banner = time().'.'.$req->gambarart->extension();
        $req->gambarart->move(public_path('img'),$banner);

        $artikel = DB::table('table_artikel');
        $artikel->insert([
          'id_author'=>$req->id,
          'id_kat'=>$req->kategori,
          'judul'=>$req->judulart,
          'isi_art'=>$req->artikelbaru,
          'gambar_art'=>$banner
        ]);
        return redirect('/authorprofile/'.$idauthor)->with('success','Artikel berhasil ditambah');
      }else {
        return back();
      }
    }else{
      return redirect('login');
    }
}
}
