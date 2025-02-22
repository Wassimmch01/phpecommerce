<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <title>Document</title>

</head>

<body id="body" >

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
    <div class="container">
      <!--LOGO-->
      <a class="navbar-brand fs-4 text-white" href="#">LOGO</a>
      <!--Toggle btn-->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--SideBar-->
      <div class="sidebar offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <!--Sidebar header-->
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LOGO</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
</div>
          <!--Sidebare Body-->
        
        <div class="offcanvas-body d-flex flex-culumn justify-content-betwen flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item mx-2">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#Produits">Produits</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#categorie">Categories</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#FAQ">FAQ</a>
            </li>

          </ul>
          <!--LOGIN / SIGN UP-->
          <div class="d-flex flex-culumn flex-lg-row justify-conten-center align-items-center gap-3">
            <a href="#login" class="text-white">Connexion</a>
            <a href="#signup" class="text-white text-decoration-none px-3 py-1 rounded-4"
              style="background-color: #f94ca4;">Inscription</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>