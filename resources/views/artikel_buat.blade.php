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
          <h1 class="text-center text-light">Buat artikel baru</h1>
        </div>
        <form action="#">
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="judul">Judul artikel : </label>
                <input autofocus type="text" class="form-control" placeholder="Masukkan judul baru" id="judul">
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="gambar">Banner Artikel : </label>
                <input required type="file" class="form-control" name="gambarart" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group text-white">
            <label for="Isi artikel">Isi Artikel : </label>
            <div class="mb-3">
	            <textarea name="artikelbaru" class="form-control" id="artikelbaru"></textarea>
	          </div>
          </div>
          <div class="row text-white">
            <div class="col-sm">
              <div class="form-group">
                <label for="kategori">Kategori : </label>
                <select class="form-control" id="kategori" name="kategori">
                 <option value="test1">TEST1</option>
                 <option value="test2">TEST3</option>
                 <option value="test3">TEST2</option>
                 <option value="test4">TEST1</option>
                </select>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-group">
                <label for="kredit">Kredit</label>
                <input type="text" class="form-control" placeholder="for example, Dea Warjayu, Supratman Sukuma.">
              </div>
            </div>
          </div>
          <div class="d-flex flex-row bd-highlight justify-content-end">
            <a href="#"><button class="mx-2 btn btn-dark btn-lg text-white">Discard</button></a>
            <button type="submit" class="btn btn-success btn-lg">POST</button>
          </div>
        </form>
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
