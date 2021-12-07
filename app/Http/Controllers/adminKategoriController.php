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
        // $aKategoris = DB::select('SELECT * FROM table_kategori');
        // return view('adminKategori',['aKategoris'=>$aKategoris]);
        $kategoris = table_kategori::paginate(5);
        return view('adminkategori',['kategoris'=>$kategoris]);
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
        $kategoris = DB::table('table_kategori')->where('id_kat',$id)->get();
        return view('editkategori',['kategoris'=>$kategoris]);
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
    public function search(Request $request)
    {
      $keyword = $request->cari;
      $kategoris = table_kategori::where('nama_kat','like',"%".$keyword."%")->paginate(2);
      return view('adminkategori',['kategoris'=>$kategoris]);
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
        $iddel= $req->idkat;
        $searchid = DB::table('table_kategori')->where('id_kat',$iddel)->delete();
        return back()->with('success','Kategori telah dihapus!');
        // return redirect()->route('/adminakun')
        // ->with('success','Akun telah dihapus!');
    }
    public function upload()
    {
      return view('tambahkategori');
    }
    public function upload_proses(Request $req)
    {
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

}
