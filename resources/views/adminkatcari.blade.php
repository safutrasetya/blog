@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-light mx-auto p-5 container-fluid">
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
                <a class="nav-link active" href="adminkategori">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminauthor">Author</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4">
            <form action="{{url('/adminkatcari')}}" autocomplete="on" method="GET">
              <div class="row">
                <div class="col-sm-8">
                  <input type="text" name="carikat" id="search" class="form-control mb-2 mr-sm-2" value="{{ request('cari') }}" placeholder="Nama Kategori...">
                </div>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary mb-2" value="cari">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row shadow p-2">
          <table class="table table-bordered text-justify bg-info">
            <thead>
              <tr class="text-center">
                <th>Id Kat</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Info</th>
                <th>Jumlah Artikel</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategoris as $data)
              <tr>
                <td>{{ $data->id_kat}}</td>
                <td>{{ $data->nama_kat}}</td>
                <td><img src ="/img/{{ $data->gambar}}" width="120px" height="120px"></td>
                <td>
                  <div class="overflow-auto" style="height: 120 px;">
                    {{$data->deskripsi_kat}}
                  </div>

                </td>
                <td></td>
                <td>
                    <input type="text" value="" hidden>
                    <button class="btn btn-success mb-2"><img src="img/edit-icon.png" style="height:20px; width:26px;"> Edit</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapus" data-bs-whatever="{{$data->id_kat}}"
                      namakat="{{$data->nama_kat}}"><img src="img/trash-can.png" style="height:20px; width:15px;"> Hapus</button>
                      <!--Modal-->
                      <div class="modal fade" id="modalhapus" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form action="/deletekategori" method="POST">
                              @csrf
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <h5 class="modal-title waaw" id="exampleModalLabel">Catatan here?</h5>
                                <div class="mb-3">
                                  <input name="idkat" type="text" class="form-control" id="idkat">
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
                    <!-- <a href="/adminkategori/delete/{{$data->id_kat}}" class="btn btn-danger" onclick="return confirm('Anda yakin?')"><img src="img/trash-can.png" style="height:20px; width:15px;"> Hapus</a> -->

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <div class="pull-left">
            <ul class="pagination no-margin">
              {{$kategoris->links("pagination::bootstrap-4")}}
            </ul>
        </div>
      </div>
      </div>
    </div>
    <script>
      var hapusmodal = document.getElementById('modalhapus')
      hapusmodal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var idhapus = button.getAttribute('data-bs-whatever')
      var namahapus = button.getAttribute('namakat')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitle = hapusmodal.querySelector('.waaw')
      var modalBodyInput = hapusmodal.querySelector('.modal-body input')
      modalTitle.textContent = 'Anda yakin ingin menghapus kategori ' + namahapus + '?'
      modalBodyInput.value = idhapus
      });
    </script>
  </body>
</html>
@endsection
