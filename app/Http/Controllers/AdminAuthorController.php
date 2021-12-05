<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\table_author;
use App\Models\table_akun;
class AdminAuthorController extends Controller
{
    //
    public function index()
    {
        $listauthor = DB::table('table_author')
                        ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
                        ->get();
        return view('adminauthor', ['listauthors'=>$listauthor]);
    }
    public function deleteauth(Request $req)
    {
        $idauthdel= $req->idauth;
        $idakun = $req->idakun;
        $lvl = 3;
        $searchid = DB::table('table_author')->where('id_author',$idauthdel)->delete();
        $searchakun = DB::table('table_akun')->where('id_akun',$idakun)->update(
          ['level'=>$lvl]
        );
        return back()->with('success','Author telah dihapus!');
    }
    public function searchauth(){
        $search_text = $_GET['searchi'];
        $hasil = DB::table('table_author')
        ->leftJoin('table_akun', 'table_author.id_akun_author', '=', 'table_akun.id_akun')
        ->where('nama_author','LIKE', '%'.$search_text.'%')->get();
        return view('adminauthorcari',compact('hasil'));
    }
}
