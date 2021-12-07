@extends ('layout.template')
@section('judulhal')
<title>Profil</title>
@endsection
@section('content')
<div class="container shadow-lg p-3 h-100" style="height: 750px;">
  <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
    <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
      @foreach($dataauthor as $dataakuns)
      <h1 class="text-center">Profil Author {{$dataakuns->nama}}</h1>
    </div>
    <div class="mx-auto">
      <div class="row">

        <div class="col-sm-6">
          <div class="card mx-auto">
            <div class="card-header">
              <div class="text-center">
                <img src="/img/pfp1.jpg" class="rounded-circle" alt="PFP" width="150px" height="150px">
              </div>
            </div>
            <div class="card-body">
              <div class="text-left">
                  <p class="h3">{{$dataakuns->nama}}</p>
                  @endforeach
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-7 text-left">
                  <a style="text-decoration:none; color:white; " href="/authorartikel/1"><button  class="btn btn-success" >Tampilkan semua artikel</button></a>
                </div>
                <div class="col-sm-5">
                  <a href=""><button class="btn btn-warning float-end">Masukkan ke favorit</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h3>Artikel Terakhir</h3>
            </div>
            <div class="card-body">
              @foreach($dataart as $dataartauth)
              <div class="card my-3">
                <img class="card-img-top" src="/img/{{$dataartauth->gambar_art}}" style="width:auto; height:150px;">
                <div class="text-left card-footer">
                  <a href="#" class="stretched-link"><p style="font-size:20px">{{$dataartauth->judul}}</p></a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
