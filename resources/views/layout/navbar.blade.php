
<!-- navbar (tombol tambah artikel, beranda, favorit, admincontrol,search,profil(profil,logout)) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-flex justify-content-start" style="margin-bottom: 10px">
  <div class="container-fluid">
    <a class="aboutus.php" style ="text-decoration: none; font-size: 16px; margin-top: 6px; margin-left: 10px; color: black" href="/beranda" class="fs-4" >Art & Culture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

        </li>
      </ul>
      @if($_SESSION['level']==2||$_SESSION['level']==1)
      <div>
        <a href="/authorartikel/{{$_SESSION['id']}}/artikelbuat" style ="text-decoration: none; color: black"> <img src="/img/plus.jpg" alt="" width="30px" ></a>
      </div>
      @endif
      <div>
      <a class="aboutus.php" style ="text-decoration: none; font-size: 16px; margin-top: 6px; margin-left: 10px; color: black" href="/beranda" class="fs-4" >Beranda</a>
      </div>
      <div>
      <a class="aboutus.php" style ="text-decoration: none; font-size: 16px; margin-top: 6px; margin-left: 10px; color: black" href="/favorit" class="fs-4" >Favorit</a>
      </div>
      @if($_SESSION['level']==1)
      <div>
      <a class="aboutus.php" style ="text-decoration: none; font-size: 16px; margin-top: 6px; margin-left: 10px; color: black" href="/adminakun" class="fs-4" >Admin Control</a>
      </div>
      @endif
      <form class="d-flex" method="get" action="{{url('/searchall')}} " style="margin-left: 10px;">
          <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="cari">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div style="margin-left:20px" class="dropdown">
          <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 5px;">
          <a href="aboutus.php"><i class="far fa-user-circle fa-2x" height="35px"></i></a>
          </button>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/profil">Profil</a></li>
            <li><a class="dropdown-item" href="/adminakun">Admin</a></li>
            <li><a class="dropdown-item" href="/functionlogout">Logout</a></li>
          </ul>
      </div>
    </div>
  </div>
</nav>
