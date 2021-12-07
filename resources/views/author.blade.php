@extends ('layout.template')
@section('judulhal')
<title>Author</title>
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
            <th><button type="button" class="btn btn-outline-dark"><a href="/author"> Author</a></button></th>
        </tr>
    </table>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
     @foreach($author as $key => $a)
    <div class="col-4 d-flex justify-content-center ">
      <img style="height:100px; width:100px;" src="" alt="foto author">
      <a href="/author/{{$a->id_author}}">{{$a->nama}}</a>
      <a href="/author/{{$a->id_author}}"> / {{$a->email}}</a>
    </div>
    @endforeach
  </div>
  <div class="row">
  </div>
</div>

@endsection
