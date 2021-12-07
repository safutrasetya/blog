@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
<br>
<form action="/updtprofil" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row justify-content-center mt-5" style="background-color:grey; padding:3% ;">
    @include('flash-message')
    <div class="col-4">
      <div class="text-center">
        <img  src="img/02.jpg" width=10% style="border-radius: 50%; width: 250px; height: 250px;">
        <br><br>
        <label>Foto Profil akun</label>
        <!-- @error('gambarakun')
            <div class="alert-danger">{{$message}}</div>
          @enderror -->
        <input name="gambarakun" class="form-control" type="file">
      </div>
    </div>
    <div class="col-4">
      @foreach($listdata as $dataakun)
      <input hidden name="idakun" value="{{$dataakun->id_akun}}" type="text" class="form-control">

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
          <input name="nama" value="{{$dataakun->nama}}" type="text" class="form-control">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">No. HP</span>
          <input name="nohp" value="{{$dataakun->no_hp}}" type="text" class="form-control">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
          <input name="password" id="password" value="{{$dataakun->pass}}" type="password" class="form-control">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Re-Password</span>
          <input name="repassword" id="repassword" value="{{$dataakun->pass}}" type="password" class="form-control">
        </div>
        @if($_SESSION['level']==2||$_SESSION['level']==1)
          @foreach($listauthor as $dataauthor)
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Quote</span>
            <input name="quote" id="" value="{{$dataauthor->quote}}" type="text" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Instagram</span>
            <input name="instagram" id="" value="{{$dataauthor->instagram}}" type="text" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Twitter</span>
            <input name="twitter" id="" value="{{$dataauthor->twitter}}" type="text" class="form-control">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir</span>
            <input name="tgllahir" id="" value="{{$dataauthor->tanggal_lahir}}" type="date" class="form-control">
          </div>
          @endforeach
        @endif
        <a href='/profil'><button class="mx-2 btn btn-outline-dark btn-md">Discard</button></a>
        <button type="submit" class="btn btn-success btn-md">Ubah</button>
      @endforeach
      </div>
    </div>
    <a href='/profil'><button class="mx-2 btn btn-outline-dark btn-md">Discard</button></a>

</form>
<script type="text/javascript">
  var password = document.getElementById("password");
  var Repassword = document.getElementById("repassword");

  function validatePassword(){
    if(password.value != Repassword.value) {
      Repassword.setCustomValidity("Passwords tidak sesuai");
    } else {
      Repassword.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  Repassword.onkeyup = validatePassword;
</script>
