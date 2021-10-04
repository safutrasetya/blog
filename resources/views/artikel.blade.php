<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/artikel.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
    <title>
      Artikel
    </title>
  </head>
<body class="bg-dark">
  <div class="container bg-light">
    <div class="bg-light text-dark container">
      <h2>Judul artikel</h2>
      <h6>Author</h6>
    </div>
      <img src="img/02.jpg" class="img-fluid" alt="">
  <div class="container bg-light text-dark">
    <p class="IsiArtikel">Film animasi, atau biasa disingkat animasi saja, adalah film yang merupakan
      hasil dari pengolahan gambar tangan sehingga menjadi gambar yang bergerak.
      Pada awal penemuannya, film animasi dibuat dari berlembar-lembar kertas
      gambar yang kemudian di-"putar" sehingga muncul efek gambar bergerak. Dengan
      bantuan komputer dan grafika komputer, pembuatan film animasi menjadi
      sangat mudah dan cepat. Bahkan akhir-akhir ini lebih banyak bermunculan
      film animasi 3 dimensi daripada film animasi 2 dimensi.Wayang kulit
      merupakan salah satu bentuk animasi tertua di dunia.[butuh rujukan] Bahkan
      ketika teknologi elektronik dan komputer belum diketemukan, pertunjukan
      wayang kulit telah memenuhi semua elemen animasi seperti layar, gambar
      bergerak, dialog dan ilustrasi musik.
</p>
<div class="container">
  <div class="row">
    <div class="col-sm-1">
    <Button onclick="Toggle1()" id="tombol" class="btn btn-lg btn-outline-light active"><i class="fas fa-heart"></i></Button>
    </div>
    <div class="col-sm-1">
      <a href="#"><img src="img/link.png" class="icon thumbnail" alt=""></a>
    </div>
    <div class="col-sm-1">
      <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" class="icon thumbnail"alt=""></a>
    </div>
    <div class="col-sm-1">
      <a href="https://web.whatsapp.com/" target="_blank"><img src="img/whatsapp.png" class="icon thumbnail"alt=""></a>
    </div>
  </div>

</div>

  </div>
  <div class="KreditorCerita bg-light text-dark container">
    <h3>Kredit: Cerita</h3>
    <h6>Author</h6>
    <h6>Editor</h6>
    <h6>Dll</h6>
  </div>
  <div class="KreditorMedia text-dark bg-light container">
    <h3>Kredit: Media</h3>
  <a href="https://www.usu.ac.id/" target="_blank">
    <img src="img/USU.png " class="img-fluid" alt="">
  </a>
  </div>
  <div class="ArtikelLain text-dark container-fluid">
    <h3>Artikel Lain dari Kreditor Media</h3>
    <div class="row">
      <div class="col-md-4">
      <div class="thumbnail">
        <a href="#"><img src="img/03.jpg" class="img-thumbnail" alt="">
      </a>
      </div>
      <div class="deskripsi-artikel">
        <a href="#"><h5>Judul Artikel</h5></a>
      </div>
      </div>
      <div class="col-md-4">
      <div class="thumbnail">
        <a href="#"><img src="img/04.jpg" class="img-thumbnail" alt="">
      </a>
      </div>
      <div class="deskripsi-artikel">
        <a href="#"><h5>Judul Artikel</h5></a>
      </div>
      </div>
      <div class="col-md-4">
      <div class="thumbnail">
        <a href="#"><img src="img/02.jpg" class="img-thumbnail" alt="">
      </a>
      </div>
      <div class="deskripsi-artikel">
        <a href="#"><h5>Judul Artikel</h5></a>
      </div>
      </div>
    </div>
</div>
    </div>
    </div>
  </div>
  </div>


<script>
var btnvar1 = document.getElementById('tombol');

function Toggle1(){
         if (btnvar1.style.color =="red") {
             btnvar1.style.color = "black"
         }
         else{
             btnvar1.style.color = "red"
         }
}
</script>
  </body>
</html>
