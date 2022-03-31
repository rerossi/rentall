<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/app.css">
</head>

<body>
  <div class="content-fluid">
    <header>
      <nav class="navbar navbar-light " style="background-color:rgb(20, 124, 162);">
        <div class="container-fluid">
          <div class="row w-100">
            <div class="col-2">
              <a class="navbar-brand" href="#">
                logo rentall
                <img src="../imagens/logo-completo-branco.png" alt="" width="150px" class="d-inline-block align-text-center">
              </a>
            </div>

            <div class="col-8">
              <div class="justify-content-center mt-2 row" style="margin-left: 70px;">
                <form class="d-flex col-8">
                  <input class="form-control me-2" style="min-width: auto; " type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline" style="color:rgb(20, 124, 162); background-color: white; border-color:white;" type="submit">Search</button>
                </form>
              </div>
            </div>

            <div class="col-2 text-end">


              <span style="text-decoration: none; color: white; font-weight:lighter"> Olá, pessoa </span>
              <a href="#" style="text-decoration: none;"> <img src="../imagens/sair.png" width="25px" style="margin-left: 15px;"> </a>


              <a href="#"> <img src="../imagens/entrar.png" width="40px"> </a>


            </div>
          </div>

          <div class="row w-100">
            <div class="col-12">
              <ul class="nav justify-content-center">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:white; font-weight:lighter" id="navbarDropdown">
                    Categorias
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Esportes</a></li>
                    <li><a class="dropdown-item" href="#">Games</a></li>
                    <li><a class="dropdown-item" href="#">Eletroportateis</a></li>
                    <li><a class="dropdown-item" href="#">Ferramentas</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:white; font-weight:lighter">Catálogo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:white; font-weight:lighter"> Meus Produtos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color:white; font-weight:lighter">Cadastrar produto</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="container">
      @yield('content')
    </main>
    <footer class="text-center text-lg-start text-white" style="background-color: rgb(20, 124, 162)">
      <!-- Grid container -->
      <div class="container p-2 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">

              <h6 class="text-uppercase mb-4 font-weight-bold">
                Company name
              </h6>
              <img src="../imagens/logo-branco.png" style="width: 150px">
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a class="text-white">MDWordPress</a>
              </p>
              <p>
                <a class="text-white">BrandFlow</a>
              </p>
              <p>
                <a class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
              <!-- Twitter -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
              <!-- Google -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
              <!-- Linkedin -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
              <!-- Github -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
</body>

</html>