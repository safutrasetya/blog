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
    <title>Edit Artikel</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-center text-light">Edit Kategori</h1>
        </div>
        @foreach( $kategoris as $data)
        <form action="/updatekategori" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$data->id_kat}}"></br>
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="nama">Nama Kategori : </label>
                <input autofocus type="text" class="form-control" name="nama" id="nama" value="{{$data->nama_kat}}" placeholder="Masukkan nama baru..." required>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="gambar">Gambar : </label>
                <input type="file" class="form-control" name="gambar" id="gambar" placeholder="">
            <!-- <img src="img/{{$data->gambar}}" alt="{{$data->gambar}}" width="100px" height="100px"> -->
              </div>
              <div class="form-group">
                <input hidden type="file" class="form-control" name="gambarkat" value="{{$data->gambar}}" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group text-white">
            <label for="desKat">Deskripsis Kategori : </label>
            <div class="mb-3">
	           <textarea class="form-control" style="height:150px" type="text" name="deskripsi" id="desKat" value="{{$data->deskripsi_kat}}"></textarea>
	          </div>
          </div>
          <div class="d-flex flex-row bd-highlight justify-content-end">
            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
          </div>
        </form>
        <div class="d-flex flex-row bd-highlight justify-content-end mt-1">
        <a href="/adminkategori"><button class="mx-2 btn btn-dark btn-lg text-white">Discard</button></a>
      </div>
        @endforeach
      </div>
    </div>
    <!-- WYSIWYG untuk editor sinopsis -->
    <!-- <script type="text/javascript">
    CKEDITOR.replace('kategoribaru',{
    height: "200px "
    });
    </script> -->
    <!--end wysiwyg.. untuk scriptnya ada di head halaman-->
  </body>
</html>
