@extends ('layout.template')
@section('judulhal')
<title>Artikel</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <h2 class="text-dark" style="margin-top: 15px">Detail Artikel</h2>
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
    @foreach($artikel as $key => $a)
   <div class="col-12 d-flex justify-content-center">
     <a href="kategori/{{$a->id_kat}}">
       <img style="height:500px; width:100%; border:10px solid black;" src="/../img/{{$a->gambar_art}}" alt="">
     </a>
   </div>
   <div class="col-12 d-flex justify-content-center mt-5 ">
     <h3><strong> {{$a->judul}} </strong></h3> </br>
   </div>
   <div class="col-12 d-flex justify-content-center  mb-3">
     <?php
      $idart = $a->id_artikel;
      $idkat = $a->id_kat;
      ?>
   @foreach($akun as $key => $b)
   <div class="col-12 d-flex justify-content-center  ">
    <a href="#"></a>  <h3>Author :  {{$b->nama}} </h3> </br>
   </div>
   @endforeach
 </div>
     <div class="col-12 d-flex justify-content-center  mb-3">
     @foreach($author as $key => $auth)
     <a href="{{$auth->instagram}}">
       <img style="height:30px; width:30px;margin-right:20px;" src="/../img/instagram.png" alt="">
     </a>
     <a href="{{$auth->twitter}}">
       <img style="height:30px; width:30px; margin-right:20px;" src="/../img/twitter.png" alt="">
     </a>
     @if ($cek == "sudah")
     <form  class="" action="/hpsfav_art" method="post">
       @csrf
         <input type="text" name="idakun" hidden value="{{$_SESSION['id']}}">
         <input type="text" name="idkat" hidden value=" {{$idkat}} ">
         <input type="text" name="idart" hidden value=" {{$idart}} ">
         <button style="background-color:white; border:none;" type="submit" > <img style="width:20px; height:20px" src="/../img/penuhhati.png" alt=""> </button>
     </form>
     @else
    <form  class="" action="/tbhfav_art" method="post">
      @csrf
        <input type="text" name="idakun" hidden value="{{$_SESSION['id']}}">
        <input type="text" name="idkat" hidden value=" {{$idkat}} ">
        <input type="text" name="idart" hidden value=" {{$idart}} ">
        <button style="background-color:white; border:none;" type="submit" > <img style="width:20px; height:20px" src="/../img/kosonghati.png" alt=""> </button>
    </form>
    @endif
     @endforeach
   </div>
     <div class="col-12 d-flex justify-content-between">
     <div style="text-align:justify;">
       {{strip_tags($a->isi_art)}}
     </div>
   </div>
   @endforeach
  </div>
</div>
<!-- tombol favorit -->
@endsection
