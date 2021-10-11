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
    <title>Admin : Akun</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-secondary mx-auto p-5" style="height: 750px;">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-center text-light">Admin Control Room</h1>
        </div>
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link active" href="#">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
        </ul>
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
