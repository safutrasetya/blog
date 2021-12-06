@extends ('layout.template')
@section('judulhal')
<title>Beranda</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <h2 class="text-dark">Beranda</h2>
  </div>
</div>
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <table>
        <tr>
            <th><button type="button" class="btn btn-outline-dark">Semua</button></th>
            <th><button type="button" class="btn btn-outline-dark">Kategori</button></th>
            <th><button type="button" class="btn btn-outline-dark">A - Z</button></th>
        </tr>
    </table>
  </div>
</div>
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-6 shadow-lg py-3">
    @foreach($artikelterbaru as $artikel)
    <div class="row m-2">
      <div class="card">
        <div class="card-header">
          <p class="h5">By {{$artikel->nama}}</p>
        </div>
        <div class="card-body">
          <img src="img/{{$artikel->gambar_art}}" style="width: 670px; height: auto;">
          <p class="isiartikel">{{$artikel->isi_art}}</p>
          <a href="">(Baca Selengkapnya...)</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
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
