<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--END BOOSTRAP CSS-->
    <!--WYSIWYG script-->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!--END WYSIWYG-->
    <title>Admin : Artikel</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-center text-light">Admin Control Room</h1>
        </div>
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
          <form class="form-inline" action="#" autocomplete="on">
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search...">
            <button type="submit" class="btn btn-primary mb-2">Search</button>
          </form>
        </div>
        <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id artikel</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Kategori</th>
                <th>Gambar</th>
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
  </body>
</html>
