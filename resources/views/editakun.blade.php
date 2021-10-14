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
    <title>Edit Akun</title>
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
      <div class="row justify-content-center" style="background-color:grey; padding:3% ;">
        <div class="col-4">
          <div class="text-center">
              <img  src="img/02.jpg" width=10% style="border-radius: 50%; width: 250px; height: 250px;">
              <br><br>
              <input class="form-control form-control-sm" type="file">
          </div>
        </div>
        <div class="col-4">

          <form class="" action="index.html" method="post">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">No. HP</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <a href="#"><button class="mx-2 btn btn-dark btn-md text-white">Discard</button></a>
              <button type="submit" class="btn btn-success btn-md">POST</button>
            </form>

          </div>
        </div>
  </body>
</html>
