@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
<div class="modal fade" id="modalhapusaut" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/deleteauthor" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Author?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="modal-title waaw" id="exampleModalLabel">Catatan here?</h5>
          <p class="text-danger">Menghapus akun author hanya akan menghapus akun dari daftar author. Akun masih bisa dipakai untuk menampillkan konten blog.</p>
          <div class="mb-3">
            <input hidden name="idauth" type="text" class="form-control" id="idauth">
            <input hidden name="idakun" type="text" class="form-control" id="idakunmodalhapus">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="btnDel" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="jumbotron p-3 h-100" style="height: 750px;">
  <div class="jumbotron bg-light mx-auto p-5" style="height: 750px;">
    <div class="mx-auto text-center mb-3" style="margin-top:-25px;">
      <h1 class="text-center">Admin Control Room</h1>
    </div>
    @include('flash-message')
    <div class="row">
      <div class="col-sm-8">
        <ul class="nav nav-tabs nav-justified bg-light">
          <li class="nav-item">
            <a class="nav-link" href="adminakun">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminartikel">Daftar Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminkategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adminauthor">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminadmin">Admin</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <form class="" action="" method="GET">
          <div class="row">
            <div class="col-sm-8">
              <input name="searchi" type="text" class="form-control mb-2" placeholder="Search...">
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row shadow p-2">
      <table class="table table-bordered bg-info">
        <thead>
          <tr>
            <th>Id Author</th>
            <th>Nama Author</th>
            <th>Email</th>
            <th>No.HP</th>
            <th>Instagram</th>
            <th>Twitter</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hasil as $author)
          <tr>
            <td>{{$author->id_author}}</td>
            <td>{{$author->nama}}</td>
            <td>{{$author->email}}</td>
            <td>{{$author->no_hp}}</td>
            <td><a href="{{$author->instagram}}">Visit Instagram</a></td>
            <td><a href="{{$author->twitter}}">Visit Twitter</a></td>
            <td>
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusaut" data-bs-whatever="{{$author->id_author}}" namaauthor="{{$author->nama}}" idakun="{{$author->id_akun}}"><img src="img/trash-can.png" style="height:20px; width:15px;"> Hapus</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $hasil->firstItem() }}
        sampai
      {{ $hasil->lastItem() }}
        dari
      {{  $hasil->total()}}

     <div class="d-flex justify-content-center">
         {{ $hasil->links("pagination::bootstrap-4") }}
     </div>
    </div>
  </div>
</div>
<script>
  var modalhapusaut = document.getElementById('modalhapusaut')
  modalhapusaut.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var idauthapus = button.getAttribute('data-bs-whatever')
    var namaauthor = button.getAttribute('namaauthor')
    var idakun = button.getAttribute('idakun')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = modalhapusaut.querySelector('.waaw')
    var modalBodyInput = modalhapusaut.querySelector('.modal-body input')

    modalTitle.textContent = 'Anda yakin ingin menghapus author : ' + namaauthor + '?'
    modalBodyInput.value = idauthapus
    document.getElementById("idakunmodalhapus").value = idakun;
  });
</script>
@endsection
