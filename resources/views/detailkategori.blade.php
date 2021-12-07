@extends ('layout.template')
@section('judulhal')
<title>Beranda</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    @foreach($kategori as $key => $k)
   <div class="col-12 d-flex justify-content-center">
     <a href="kategori/{{$k->id_kat}}">
       <img style="height:500px; width:100%; border:10px solid black; margin-bottom:16px;" src="/../img/{{$k->gambar}}" alt="">
     </a>
   </div>
   <div class="col-12 d-flex justify-content-center">
     <h2><strong> ~{{$k->nama_kat}}~ </strong></h2> </br>
   </div>
     <div class="col-12 d-flex justify-content-around">
     <p style="text-align:justify;">" {{$k->deskripsi_kat}}"</p>
   </div>
   @endforeach
  </div>
  <div class="row">
    <h4 class="mt-2 mb-3">Artikel Terkait</h4>
     @foreach($artikel as $key => $a)
    <div class="col-3">
      <div class="d-flex justify-content-center">
      <a href="artikel/{{$a->id_artikel}}">
        <img style="height:170px; width:170px; border-radius:20%;" src="/../img/{{$a->gambar_art}}" alt="">
      </div>
      </a>
      <p style="text-align:center;"><strong> {{$a->judul}} </strong></p>
    </div>
    @endforeach
  </div>
</div>

@endsection
