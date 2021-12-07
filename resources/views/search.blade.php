<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS AND CKEDITOR-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!--END BOSTTSTRAP AND CKEDITOR-->
    <!--CSS KITA SENDIRI-->
    <link rel="stylesheet" href="css/blog.css">
    <!--end css kita sendiri-->
    <title>Search</title>
  </head>
  <body class="bg-light">
    <div class="jumbotron p-3 h-100" style="height: 750px;">
      <div class="jumbotron bg-light shadow-lg mx-auto p-5">
        <div class="mx-auto text-center mb-5" style="margin-top:-25px;">
          <h1 class="text-dark">Search</h1>
        </div>
        <!-- search -->
        <form  method="GET" action="{{url('/searchall')}} ">
          <div class="row">
            <div class="col-sm-11">
              <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search...">
            </div>
            <div class="col-sm-1">
              <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
          </div>
        </form>

        <div class="">
          <div class="shadow px-3 my-2">
            <p class="display-4">Artikel</p>
          </div>
          <div class="row">
            @foreach($search_artikel as $artikel)
            <div class="col-sm-3">
              <div class="card cardwidth1">
                <div class="card-head">
                  <img src="/img/{{$artikel->gambar_art}}" class="imgsearch1">
                </div>
                <div class="card-body">
                  <a class="stretched-link" href="#"><p class="h5">{{$artikel->judul}}</p></a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="shadow px-3 my-2 py-1">
            <p class="display-4">Kategori</p>
          </div>
          <div class="row">
            @foreach($search_kategori as $kategori)
            <div class="col-sm-3">
              <div class="card cardwidth2">
                <div class="card-head">
                  <img src="/img/{{$kategori->gambar}}" class="imgsearch2">
                </div>
                <div class="card-body">
                  <a class="stretched-link" href="#"><p class="h5">{{$kategori->nama_kat}}</p></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="shadow px-3 my-2">
            <p class="display-4">Author</p>
          </div>
          <div class="row">
            @foreach($search_author as $author)
            <div class="card" style="margin-left: 20px" >
              <div class="card-header">
                {{$author->nama}}
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-info">details</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
