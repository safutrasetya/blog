<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\adminKategori;

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
        $kategoris = adminKategori::paginate(5);
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
    public function search(Request $request)
    {
      $keyword = $request->cari;
      $kategoris = adminKategori::where('nama_kat','like',"%".$keyword."%")->paginate(2);
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
}
