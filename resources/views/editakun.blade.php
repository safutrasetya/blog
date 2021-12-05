@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
<br>
  <div class="row justify-content-center" style="background-color:grey; padding:3% ;">
    <div class="col-4">
      <div class="text-center">
          <img  src="img/02.jpg" width=10% style="border-radius: 50%; width: 250px; height: 250px;">
          <br><br>
          <input class="form-control form-control-sm" type="file">
      </div>
    </div>
    <div class="col-4">
      @foreach($listdata as $dataakun)
      <form class="" action="#" method="">
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            <input value="{{$dataakun->nama}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            <input value="{{$dataakun->email}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">No. HP</span>
            <input value="{{$dataakun->no_hp}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
            <input value="{{$dataakun->pass}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
            <input value="{{$dataakun->pass}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
            <input value="{{$dataakun->nama}}" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <button type="submit" class="btn btn-success btn-md">POST</button>
        </form>
        <a href='/adminakun'><button class="mx-2 btn btn-dark btn-md text-white">Discard</button></a>
      @endforeach
      </div>
    </div>
