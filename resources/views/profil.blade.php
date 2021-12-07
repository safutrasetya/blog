@extends ('layout.template')
@section('judulhal')
<title>Profil</title>
@endsection
@section('content')
<div class="container shadow-lg p-3 h-100" style="height: 750px;">
  <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
    <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
      <h1 class="text-center">Profil TEST USER</h1>
    </div>
    <div class="mx-auto">
      <div class="row">
        <div class="col-sm-6">
          <div class="card mx-auto">
            <div class="card-header">
              <div class="text-center">
                <img src="img/pfp1.jpg" class="rounded-circle" alt="PFP" width="150px" height="150px">
              </div>
            </div>
            <div class="card-body">
              @include('flash-message')
              <div class="text-left">
                @foreach($dataakun as $dataakuns)
                <table style="font-size:25px">
                  <tr>
                    <td>Nama </td><td>: {{$dataakuns->nama}}</td>
                  </tr>
                  <tr>
                    <td>Email </td><td>: {{$dataakuns->email}}</td>
                  </tr>
                  <tr>
                    <td>Level </td><td>: {{$dataakuns->level}}</td>
                  </tr>
                </table>
                @endforeach
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-8 text-left">
                  <a href="editprofil"><button class="btn btn-outline-primary">Edit Profil</button></a>
                  <a style="text-decoration:none; color:white; " href="/favorit"><button  class="btn btn-success" >Show Favorites</button></a>
                </div>
                <div class="col-sm-4">
                  <button class="btn btn-danger float-end">Logout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              <h3>Terakhir di sukai</h3>
            </div>
            <div class="card-body">
              @foreach($datafav as $datafavs)
              <div class="card my-3">
                <img class="card-img-top" src="img/{{$datafavs->gambar_art}}" style="width:auto; height:150px;">
                <div class="text-left card-footer">
                  <a href="#" class="stretched-link"><p style="font-size:20px">{{$datafavs->judul}}</p></a>
                </div>
              </div>
              @endforeach
              <!-- <div class="card my-3">
                <img class="card-img-top" src="img/cubes_structure_tangled_150971_3840x2400.jpg" style="width:auto; height:150px;">
                <div class="text-left card-footer">
                  <a href="#" class="stretched-link"><p style="font-size:20px">Test Judul Artikel</p></a>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
