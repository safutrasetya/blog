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
          <th><a href="/beranda"><button type="button" class="btn btn-outline-dark"> Semua </button></a></th>
          <th><a href="/kategori"><button type="button" class="btn btn-outline-dark"> Kategori </button></a></th>
          <th><a href="/author"><button type="button" class="btn btn-outline-dark">Author</button></a></th>
        </tr>
    </table>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
     @foreach($author as $key => $k)
    <div class="col-4 ">
      <div class="d-flex justify-content-center">

      <a href="author/{{$k->id_author}}">
        <img class="shadow"  style="height:280px; width:280px; border-radius:20%;" src="/../img/{{$k->gambar_author}}" alt="">
      </a>
    </div>
      <div class="d-flex justify-content-center mb-4">
        <h3><strong> {{$k->nama}}  </strong></h3>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
