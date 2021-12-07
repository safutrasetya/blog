<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\tabel_akun;
use App\Models\table_author;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
    'nama' => 'required',
    'email' => 'email:rfc,dns|unique:table_akun,email',
    'telpon' => 'required|numeric',
    'password' => 'required|min:8',
    'confirm-password' => 'required|same:password',
    ]);
    DB::table('table_akun')->insert([
    'nama' => ucwords(strtolower($request->nama)),
    'email' => $request->email,
    'pass' =>  Hash::make($request->password),
    'no_hp' => $request->telpon,
    'level' => 3,
    ]);
    return redirect('/login');
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
    $_SESSION['nama'] = $data->nama;
    $_SESSION['email'] = $data->email;
    $_SESSION['id'] = $data->id_akun;
    $_SESSION['nohp'] = $data->no_hp;
    $_SESSION['level'] = $data->level;
    return redirect('/beranda')->with('berhasil', 'berhasil!')->with('cek','dikirim');
  }
  return redirect('/login')->with('alert2', 'Password Anda Salah !')->with('cek','dikirim');
}
public function HalamanLogin(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil']) && $_SESSION['berhasil'] == "1") {
    return back();
  }
  else {
    return view('login');
  }
}
public function HalamanDaftar(Request $request)
{
  session_start();
  if (isset($_SESSION['berhasil'])&& $_SESSION['berhasil'] == "1") {
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
                session_destroy();
                  return redirect('/login');
        }
}
