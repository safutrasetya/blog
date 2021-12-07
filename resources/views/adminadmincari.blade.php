@extends ('layout.template')
@section('judulhal')
<title>Admin Control</title>
@endsection
@section('content')
<div class="modal fade" id="modalupdt" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/downgradelvl" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah menjadi reguler?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="modal-title waaww" id="exampleModalLabel">Catatan here?</h5>
          <div class="mb-3">
            <input hidden name="idakun" type="text" class="form-control" id="idakun">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="btnDel" class="btn btn-warning">Downgrade</button>
        </div>
      </form>
    </div>
  </div>
</div><div class="jumbotron p-3 h-100" style="height: 750px;">
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
            <a class="nav-link" href="adminauthor">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adminadmin">Admin</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-4">
        <form class="" action="{{url('/adminadmincari')}}" method="GET">
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
            <th>Id Admin</th>
            <th>Id Akun</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No.hp</th>
            <!-- <th>Action</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($listadmins as $key=>$admin)
          <tr>
            <td>{{$admin->id_admin}}</td>
            <td>{{$admin->id_akun}}</td>
            <td>{{$admin->nama}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->no_hp}}</td>
            <td>
              <input type="text" value="" hidden>
              <button name="updtlvl" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalupdt" idakun="{{$admin->id_akun}}" data-lvl="{{$admin->level}}"><img src="img/edit-icon.png" style="height:20px; width:20px;">Downgrade</button></a>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $listadmins->firstItem() }}
        sampai
      {{ $listadmins->lastItem() }}
        dari
      {{  $listadmins->total()}}

     <div class="d-flex justify-content-center">
         {{ $listadmins->links("pagination::bootstrap-4") }}
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
    var namahapus = button.getAttribute('namaakun')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = hapusmodal.querySelector('.waaw')
    var modalBodyInput = hapusmodal.querySelector('.modal-body input')

    modalTitle.textContent = 'Anda yakin ingin menghapus akun ' + namahapus + '?'
    modalBodyInput.value = idhapus
  });
</script>
<script>
    var formodallvl = document.getElementById('modalupdt')
    formodallvl.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var idakun = button.getAttribute('idakun')
      var statuslevel = button.getAttribute('data-lvl')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitlelvl = formodallvl.querySelector('.waaww')
      var modalBodyInput = formodallvl.querySelector('.modal-body input')

      modalTitlelvl.textContent = 'Akan mendowngrade akun : ' + idakun
      modalBodyInput.value = idakun

      if (statuslevel==2){
        document.getElementById("author").checked = true;
      }else if (statuslevel==3){
        document.getElementById("regular").checked = true;
      }
    });
</script>
@endsection
