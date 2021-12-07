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
    @foreach($artikel as $key => $a)
   <div class="col-12 d-flex justify-content-center">
     <a href="kategori/{{$a->id_kat}}">
       <img style="height:500px; width:100%; border:10px solid black;" src="/../img/{{$a->gambar_art}}" alt="">
     </a>
   </div>
   <div class="col-12 d-flex justify-content-center mt-5 mb-3">
     <h3><strong> {{$a->judul}} </strong></h3> </br>
   </div>
     <div class="col-12 d-flex justify-content-between">
     <p style="text-align:justify;">{{$a->isi_art}}</p>
   </div>
   @endforeach
  </div>
</div>
<!-- tombol favorit -->
@endsection
