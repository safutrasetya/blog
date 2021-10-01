<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOSTRAP CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!--END BOOSTRAP CSS-->
    <title>Favorit</title>
    <style>
        img{
           border-radius: 3%;
           margin-left: 5px;
        }
    </style>
  </head>
  <body >

    <ul class="nav nav-pills justify-content-end">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span ><img src="img/toglericon.png" alt="" style="height: 20px; width: 20px;"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button"data-bs-dismiss="offcanvas" aria-label="Close"><img src="img/toglericon.png" alt="" style="height: 20px; width: 20px; border: none;"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nearby</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Achivement</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
        <a class="navbar-brand" href="#" style="color: black; margin-right: 27%;"><b> Google</b> Art & Culture</a>
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Play</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="">Nearby</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active " href="">Favorites</a>
            </li>
      </ul>

    <br>
                    <div class="d-flex justify-content-center">


            <img src="img/02.jpg" width=10% style="border-radius: 50%; width: 50px; height: 50px;">
            </div>
            <br>
            <div class="d-flex justify-content-center">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-favorit-tab" data-bs-toggle="pill" data-bs-target="#pills-favorit" type="button" role="tab" aria-controls="pills-favorit" aria-selected="true">Favorites</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">Galleries</button>
                    </li>
                  </ul>
                  </div>
                  <div class="container">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-favorit" role="tabpanel" aria-labelledby="pills-favorit-tab">
                        <p><span style="font-size: 28.5px;">Items </span>  <span style="font-size: 15px; color: #808688;">2</span> </p>
                        <img src="img/03.jpg" style=" width: 280px; height: 250px;">
                        <img src="img/02.jpg" style=" width: 200px; height: 200px;">
                        <br>
                        <br>

                        <p><span style="font-size: 28.5px;">Themes </span>  <span style="font-size: 15px; color: #808688;">1</span> </p>
                        <img src="img/03.jpg" style=" width: 280px; height: 250px;">
                        <img src="img/02.jpg" style=" width: 150px; height: 200px;">
                        <br>
                        <br>

                        <p><span style="font-size: 28.5px;">Topics </span>  <span style="font-size: 15px; color: #808688;">1</span> </p>
                        <img src="img/02.jpg" style=" width: 280px; height: 250px;">
                    </div>
                    <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                        <p><span style="font-size: 28.5px;">Items </span>  <span style="font-size: 15px; color: #808688;">2</span> </p>
                        <img src="img/02.jpg" style=" width: 200px; height: 200px;">
                        <br>
                        <br>

                        <p><span style="font-size: 28.5px;">Themes </span>  <span style="font-size: 15px; color: #808688;">1</span> </p>
                        <span>
                            <img src="img/03.jpg" style=" width: 280px; height: 250px;">
                            <img src="img/02.jpg" style=" width: 150px; height: 200px;">
                            <img src="img/02.jpg" style=" width: 150px; height: 200px;">
                        </span>
                        <img src="img/02.jpg" style=" width: 150px; height: 200px;">
                            <br>
                        <br>

                        <p><span style="font-size: 28.5px;">Topics </span>  <span style="font-size: 15px; color: #808688;">1</span> </p>
                        <img src="img/02.jpg" style=" width: 280px; height: 250px;">
                        <img src="img/03.jpg" style=" width: 280px; height: 250px;">
                    </div>
        </div>
        <br><br><br><br>
  </body>
</html>
