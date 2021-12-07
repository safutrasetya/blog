@extends ('layout.template')
@section('judulhal')
<title>Favoritku</title>
@endsection
@section('content')
<div class="d-flex pt-5 justify-content-center">
  <img src="img/02.jpg" width=10% style="border-radius: 50%; width: 50px; height: 50px;">
</div>
<div class="d-flex pt-5 justify-content-center">
  <p class="display-5">Konten favorit anda...</p>
</div>
<br>
<div class="d-flex justify-content-center">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-favorit-tab" data-bs-toggle="pill" data-bs-target="#pills-favorit" type="button" role="tab" aria-selected="true">Artikel</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-selected="false">Kategori</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link " id="pills-penulis-tab" data-bs-toggle="pill" data-bs-target="#pills-penulis" type="button" role="tab" aria-selected="false">Penulis</button>
        </li>
    </ul>
</div>
<div class="container">
  @include('flash-message')
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-favorit" role="tabpanel" aria-labelledby="pills-favorit-tab">
      <div class="row">
        @foreach($listartfav as $artfav)
        <div class="col-sm-4">
          <div class="card">
            <img src="/img/{{$artfav->gambar_art}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">{{$artfav->judul}}</h3>
              <p class="card-text isiartikel">{{$artfav->isi}}</p>
              <a class="stretched-link" href="kategori/artikel/{{$artfav->id_artikel}}" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
      <div class="row">
        @foreach($listkatfav as $katfav)
        <div class="col-sm-4">
          <div class="card">
            <img src="/img/{{$katfav->gambar}}" class="card-img-top" alt="...">
            <div class="card-body">
              <a class="stretched-link" href="/kategori/{{$katfav->id_kat}}"><h3 class="card-title">{{$katfav->nama_kat}}</h3></a>
              <p class="card-text">Although ‘acrylic’ has become a generic term for any synthetic paint medium, acrylics are a specific type of manmade polymer that has become standard in the commercial paint industry as well as widely used by artists from the mid-20th century.</p>
              <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="tab-pane fade " id="pills-penulis" role="tabpanel" aria-labelledby="pills-penulis-tab">
      <div class="row">
        @foreach($listauthfav as $authfav)
        <div class="col-sm-4">
          <div class="card">
            <img src="/img/" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">{{$authfav->nama}}</h3>
              <p class="card-text"></p>
              <a class="stretched-link" href="/authorprofile/{{$authfav->id_author}}">Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
<script>
  $("p.isiartikel").text(function(index, currentText) {
    return currentText.substr(0, 190)+"...";
  });

  // var str = 'Some very long string';
  // if(str.length > 10){
  //   str = str.substring(0,10)+"...";
  // }
</script>
@endsection
