@extends ('layout.template')
@section('judulhal')
<title>Detail Author</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <h2 class="text-dark" style="margin-top: 15px">Author</h2>
  </div>
</div>
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-auto">
    <table>
        <tr>
            <th><button type="button" class="btn btn-outline-dark"><a href="/beranda"> Semua</a></button></th>
            <th><button type="button" class="btn btn-outline-dark"><a href="/kategori"> Kategori </a></button></th>
            <th><button type="button" class="btn btn-outline-dark"><a href="/author"> Author </a></button></th>
        </tr>
    </table>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    @foreach($author as $key => $k)
   <div class="col-12 d-flex justify-content-center">
       <img style="height:500px; width:100%; border:10px solid black; margin-bottom:16px;" src="/../img/{{$k->gambar_author}}" alt="">
   </div>
   <div class="col-12 d-flex justify-content-center">
     <h2><strong> ~{{ ucwords(strtolower($k->nama)) }}~ </strong></h2> </br>
   </div>
   <div class="col-12 d-flex justify-content-center">
     <h5> {{$k->tanggal_lahir}} </h5> </br>
   </div>
   <div class="d-flex justify-content-center">
     @if ($cek == "sudah")
     <form  class="" action="/hpsfav_aut" method="post">
       @csrf
         <input type="text" name="idakun" hidden value="{{$_SESSION['id']}}">
         <input type="text" name="idaut" hidden value=" {{$k->id_author}} ">
         <button style="background-color:white; border:none;" type="submit" > <img style="width:20px; height:20px" src="/../img/penuhhati.png" alt=""> </button>
     </form>
     @else
    <form  class="" action="/tbhfav_aut" method="post">
      @csrf
        <input type="text" name="idakun" hidden value="{{$_SESSION['id']}}">
        <input type="text" name="idaut" hidden value=" {{$k->id_author}} ">
        <button style="background-color:white; border:none;" type="submit" > <img style="width:20px; height:20px" src="/../img/kosonghati.png" alt=""> </button>
    </form>
    @endif
  </div>
     <div class="col-12 d-flex justify-content-around">
     <p style="text-align:justify;">"<i> {{ ucwords(strtolower($k->quote)) }} </i>"</p>
   </div>
   @endforeach
  </div>
  <div class="row">
    <h4 class="mt-2 mb-3">Artikel Terkait</h4>
     @foreach($artikel as $key => $a)
    <div class="col-3">
      <div class="d-flex justify-content-center">
      <a href="artikel/{{$a->id_artikel}}">
        <img class="shadow" style="height:170px; width:170px; border-radius:20%;" src="/../img/{{$a->gambar_art}}" alt="">
      </div>
      </a>
        <a href="artikel/{{$a->id_artikel}}">
          <p style="text-align:center; text-decoration: none; color:black;"><strong style="text-decoration:none;"> {{ucwords(strtolower($a->judul)) }} </strong></p>
        </a>
    </div>
    @endforeach
  </div>
</div>

@endsection
