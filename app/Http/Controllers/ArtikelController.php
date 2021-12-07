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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
      $kategoris = DB::table('table_kategori')->get();
      $author = DB::table('table_author')->where('id_author',$idauthor)->get();

      return view('artikelbuat',['kategoris'=>$kategoris,'author'=>$author]);
    }
    public function tambah_proses(Request $req)
    {
      $req->validate([
        'judulart' => 'required',
        'gambarart'=>'required|image',
        'artikelbaru'=>'required',
        'kategori' =>'required',
      ]);

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
        return redirect('/authorprofil')->with('success','Artikel berhasil ditambah');
    }
}
