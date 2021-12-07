@extends ('layout.template')
@section('judulhal')
<title>Beranda</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <h2 class="text-dark" style="margin-top: 15px">Beranda</h2>
  </div>
</div>
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <table>
        <tr>
            <th><button type="button" class="btn btn-outline-dark"><a href="/beranda"> Semua </a></button></th>
            <th><button type="button" class="btn btn-outline-dark"><a href="/kategori"> Kategori </a></button></th>
            <th><button type="button" class="btn btn-outline-dark"><a href="/author"> Author</a></button></th>
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
          <p class="h5">By <a href="/authorprofile/{{$artikel->id_author}}">{{$artikel->nama}}</a></p>
        </div>
        <div class="card-body">
          <a href="kategori/artikel/{{$artikel->id_artikel}}"><img src="img/{{$artikel->gambar_art}}" style="width: 670px; height: auto;"></a>
          <p class="isiartikel">{{$artikel->isi_art}}</p>
          <a href="kategori/artikel/{{$artikel->id_artikel}}">(Baca Selengkapnya...)</a>
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
