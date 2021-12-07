@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
<div class="modal fade" id="modalupdtartkat" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/updtartkat" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Kategori Artikel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="modal-title waaw" id="exampleModalLabel">Catatan here?</h5>
          <div class="mb-3">
            <input hidden name="idart" type="text" class="form-control" id="idart">
            <label for="updtartkat" class="form-label">Pilih Kategori</label>
            <select class="form-select" name="updtartikelkat" id="updtartkat" aria-label="" required title="Pilih  Kategori">
              <option label=" "></option>
              @foreach($allkategori as $katart)
                <option value="{{$katart->id_kat}}">{{$katart->nama_kat}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="btnUpdtArtKat" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="modalhapusart" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/deleteartikel" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="modal-title waaw" id="exampleModalLabel">Catatan here?</h5>
          <div class="mb-3">
            <input hidden name="idart" type="text" class="form-control" id="idart">
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
  <div class="jumbotron bg-light mx-auto p-5">
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
            <a class="nav-link active" href="adminartikel">Daftar Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminkategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminauthor">Author</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <form class="" action="{{url('/adminartcari')}}" method="GET">
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
            <th>Id artikel</th>
            <th>Author</th>
            <th>Judul</th>
            <th style="width:600px">Isi</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listarts as $key=>$art)
          <tr>
            <td>{{$art->id_artikel}}</td>
            <td>{{$art->nama}}</td>
            <td>{{$art->judul}}</td>
            <td>
              <div class="overflow-auto" style="height: 150px;">
                {{$art->isi_art}}
              </div>
            </td>
            <td>{{$art->nama_kat}}</td>
            <td><img src="img/{{$art->gambar_art}}" style="width: 150px;height: 150px;"></td>
            <td>
              <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalupdtartkat" data-bs-whatever="{{$art->id_artikel}}" judulart="{{$art->judul}}" kategoriart="{{$art->id_kat}}"><img src="img/edit-icon.png" style="height:20px; width:20px;"> Edit</button>
              <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapusart" data-bs-whatever="{{$art->id_artikel}}" judulart="{{$art->judul}}"><img src="img/trash-can.png" style="height:20px; width:15px;"> Hapus</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $listarts->firstItem() }}
        sampai
      {{ $listarts->lastItem() }}
        dari
      {{  $listarts->total()}}

      <div class="d-flex justify-content-center">
         {{ $listarts->links("pagination::bootstrap-4") }}
    </div>
  </div>
</div>
<script>
  jQuery(function($) {
    $('#divAlert').delay(1750).fadeOut(400);
  });
  var artkatmodal = document.getElementById('modalupdtartkat')
  artkatmodal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var idupdtartkat = button.getAttribute('data-bs-whatever')
    var idkategoriart = button.getAttribute('kategoriart')
    var judulart = button.getAttribute('judulart')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = artkatmodal.querySelector('.waaw')
    var modalBodyInput = artkatmodal.querySelector('.modal-body input')

    modalTitle.textContent = 'Ubah Kategori Artikel : ' + judulart + '?'
    modalBodyInput.value = idupdtartkat
    document.getElementById("updtartkat").value = idkategoriart;

  });
</script>
<script>
  var hapusmodal = document.getElementById('modalhapusart')
  hapusmodal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var idhapus = button.getAttribute('data-bs-whatever')
    var judulhapus = button.getAttribute('judulart')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = hapusmodal.querySelector('.waaw')
    var modalBodyInput = hapusmodal.querySelector('.modal-body input')

    modalTitle.textContent = 'Anda yakin ingin menghapus artikel : ' + judulhapus + '?'
    modalBodyInput.value = idhapus
  });
</script>
@endsection
