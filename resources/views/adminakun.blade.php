@extends ('layout.template')
@section('content')
<div class="jumbotron p-3 h-100" style="height: 750px;">
  <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
    <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
      <h1 class="text-center text-light">Admin Control Room</h1>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <ul class="nav nav-tabs nav-justified bg-light">
          <li class="nav-item">
            <a class="nav-link active" href="adminakun">Daftar Akun</a>
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
        </ul>
      </div>
      <form class="form-inline" action="#" autocomplete="on">
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search...">
        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>
    <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No.HP</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <form action="#">
                <input type="text" value="" hidden>
                <button class="btn btn-success"><img src="img/edit-icon.png" style="height:20px; width:20px;"> Edit Akun</button>
                <button class="btn btn-danger"><img src="img/trash-can.png" style="height:20px; width:15px;"> Hapus</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
