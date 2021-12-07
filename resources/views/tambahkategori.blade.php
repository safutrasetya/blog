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
    <title>Tambah Kategori</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-center text-light">Tambah Kategori</h1>
        </div>

        <form action="/simpankategori" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value=""></br>
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="nama">Nama Kategori : </label>
                @error('nama')
                <div class="alert-danger">{{ $message }}</div>
                @enderror
                <input autofocus type="text" class="form-control" name="nama" id="nama" value="" placeholder="Masukkan nama kategori...">
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="gambar">Gambar : </label>
                @error('gambar')
                <div class="alert-danger">{{ $message }}</div>
                @enderror
                <input type="file" class="form-control" name="gambar" id="gambar" placeholder="">
                <p style="margin-left:">Gambar harus berformat jpeg,jpg atau png</p>
              </div>
            </div>
          </div>
          <div class="form-group text-white">
            <label for="desKat">Deskripsis Kategori : </label>
            <div class="mb-3">
              @error('deskripsi')
              <div class="alert-danger">{{ $message }}</div>
              @enderror
	           <textarea class="form-control" style="height:200px" type="text" name="deskripsi" id="desKat"></textarea>
            </div>
          </div>
          <div class="d-flex flex-row bd-highlight justify-content-end">
            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
          </div>
        </form>
        <div class="d-flex flex-row bd-highlight justify-content-end mt-1">
        <a href="/adminkategori"><button class="mx-2 btn btn-dark btn-lg text-white">Discard</button></a>
      </div>

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
