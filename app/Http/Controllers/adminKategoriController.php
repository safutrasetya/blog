<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\adminKategori;
use App\Models\table_kategori;


class adminKategoriController extends Controller
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
        if ($_SESSION['level'] == 1) {
        // $aKategoris = DB::select('SELECT * FROM table_kategori');
        // return view('adminKategori',['aKategoris'=>$aKategoris]);
        $kategoris = table_kategori::paginate(5);
        return view('adminkategori',['kategoris'=>$kategoris]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        if ($_SESSION['level'] == 1) {
        $kategoris = DB::table('table_kategori')->where('id_kat',$id)->get();
        return view('editkategori',['kategoris'=>$kategoris]);
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
        if ($_SESSION['level'] == 1) {
      $req->validate([
        'nama' => 'required',
        'gambar'=>'image',
        'deskripsi' => 'required'
      ]);

      $kategori = DB::table('table_kategori')->where('id_kat',$req->id);
      if($req->file('gambar')==""){
          $kategori->update([
            'nama_kat'=>$req->nama,
            'deskripsi_kat'=>$req->deskripsi
          ]);
      }else{
          // $gambar=$req->file('gambar');
          // $gambar->storeAs('public/img',$gambar->hashName());
            $gambar = time().'.'.$req->gambar->extension();
            $req->gambar->move(public_path('img'),$gambar);

        $kategori->update([
          'gambar' =>$gambar,
          'nama_kat'=>$req->nama,
          'deskripsi_kat'=>$req->deskripsi
        ]);
      }
      return redirect('adminkategori')->with('success','Kategori berhasil diubah');

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
    public function search(Request $request)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
      $keyword = $request->carikat;
      $kategoris = table_kategori::where('nama_kat','like',"%".$keyword."%")->paginate(2);
      return view('adminkatcari',['kategoris'=>$kategoris]);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // DB::table('table_kategori')->where('id_kat',$id)->delete();
      //
      // return redirect()->route('adminkategori')->with('message','Data berhasil dihapus');
    }
    public function delete(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
        $iddel= $req->idkat;
        $searchid = DB::table('table_kategori')->where('id_kat',$iddel)->delete();
        return back()->with('success','Kategori telah dihapus!');
        // return redirect()->route('/adminakun')
        // ->with('success','Akun telah dihapus!');
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
    public function upload()
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
      return view('tambahkategori');
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
    public function upload_proses(Request $req)
    {
      session_start();
      if (isset($_SESSION['berhasil']) &&  $_SESSION['berhasil'] == '1')  {
        if ($_SESSION['level'] == 1) {
      $req->validate([
        'nama'  =>'required',
        'gambar'=>'required|image',
        'deskripsi'=>'required'
      ]);

      $gambar = time().'.'.$req->gambar->extension();
      $req->gambar->move(public_path('img'),$gambar);

      $kategori = DB::table('table_kategori');
      $kategori->insert([
        'gambar' =>$gambar,
        'nama_kat'=>$req->nama,
        'deskripsi_kat'=>$req->deskripsi
      ]);
      return redirect('adminkategori')->with('success','Kategori berhasil ditambah');

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
