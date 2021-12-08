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
    <title>Artikel Baru</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-center text-light">Artikel Baru</h1>
        </div>
        <form action="/simpanartikel" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="text" name="id" hidden value="{{$_SESSION['id_author']}}">
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="judulart">Judul artikel : </label>
                @error('judulart')
                <div class="alert-danger">{{$message}}</div>
                @enderror
                <input autofocus type="text" class="form-control" placeholder="Masukkan judul baru" name="judulart" id="judul">
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="gambar">Banner Artikel : </label>
                @error('gambarart')
                <div class="alert-danger">{{$message}}</div>
                @enderror
                <input type="file" class="form-control" name="gambarart" placeholder="">
              </div>
            </div>
          </div>
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="kategori">Kategori : </label>
                <select size="1" class="form-control" id="kategori" name="kategori">
                @foreach($kategoris as $data)
                 <option value="{{$data->id_kat}}">{{$data->nama_kat}}</option>
                @endforeach
              </div>
            </div>
            <div class="form-group text-white">
              <label for="Isi artikel">Isi Artikel : </label>
              @error('artikelbaru')
              <div class="alert-danger">{{$message}}</div>
              @enderror
              <div class="mb-3">
                <textarea name="artikelbaru" class="form-control" id="artikelbaru"></textarea>
              </div>
            </div>
          </div>
          <div class="d-flex flex-row bd-highlight justify-content-end">
            <button type="submit" class="btn btn-success btn-lg">Save Changes</button>
          </div>
        </form>
        @foreach($author as $aut)
        <div class="d-flex flex-row bd-highlight justify-content-end mt-1">
        <a href="/authorprofile/{{$aut->id_author}}"><button class="mx-2 btn btn-dark btn-lg text-white">Discard</button></a>
        </div>
        @endforeach
        <!-- <div class="row col-sm-12 justify-content-end mt-1"> -->
      </div>
    </div>
    <!-- WYSIWYG untuk editor sinopsis -->
    <script type="text/javascript">
    CKEDITOR.replace('artikelbaru',{
    height: "200px "
    });
    </script>
    <!--end wysiwyg.. untuk scriptnya ada di head halaman-->
  </body>
</html>
