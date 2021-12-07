@extends ('layout.template')
@section('judulhal')
<title>Beranda</title>
@endsection
@section('content')
<div class="row justify-content-center pe-2 mt-4">
  <div class="col-sm-auto">
    <h2 class="text-dark" style="margin-top: 15px">Kategori</h2>
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
     @foreach($kategori as $key => $k)
    <div class="col-4 ">
      <div class="d-flex justify-content-center">

      <a href="kategori/{{$k->id_kat}}">
        <img style="height:280px; width:280px; border-radius:20%;" src="/../img/{{$k->gambar}}" alt="">
      </a>
    </div>
      <div class="d-flex justify-content-center mb-4">
        <h3><strong> {{$k->nama_kat}}  </strong></h3>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
