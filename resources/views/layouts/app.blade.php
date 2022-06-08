<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rentall</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- CSS Rentall -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app-rentall.css') }}">
</head>

<body>
    <div class="content-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light p-0" style="background-color:rgb(20, 124, 162);">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="row w-100 mt-2 d-flex align-items-center">
                        <div class="col-3 col-lg-1 order-lg-0 ms-lg-5">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img class="d-inline-block align-text-center" src="./image/logo-branco.png" alt="">
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse col-lg-8 " id="navbarSupportedContent">
                            <ul
                                class="navbar-nav me-auto  mr-lg-5 mb-2 mb-lg-0 order-lg-3 w-100 d-lg-flex justify-content-lg-end">

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                        aria-expanded="false" style="color:white; font-weight:lighter" id="navbarDropdown">
                                        Categorias
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Esportes</a></li>
                                        <li><a class="dropdown-item" href="#">Games</a></li>
                                        <li><a class="dropdown-item" href="#">Eletroportateis</a></li>
                                        <li><a class="dropdown-item" href="#">Ferramentas</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.create') }}"
                                        style="color:white; font-weight:lighter">
                                        Cadastrar produtos
                                    </a>
                                </li>
                                <li class="d-lg-none">
                                    @if (Route::has('login'))
                                        @auth
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <button type="submit" class="btn p-0"
                                                    style="color:white; font-weight:lighter">
                                                    {{-- {{ __('Log Out') }} --}}
                                                    Sair
                                                </button>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline"><img
                                                    src="./image/entrar.png" width="40px"></a>
                                        @endauth
                                    @endif
                                </li>
                                <li class="nav-item dropdown ps-3 d-none d-lg-block">
                                    @if (Route::has('login'))
                                        <div
                                            class="hidden fixed top-0 right-0 sm:block d-flex justify-content-end align-items-center">
                                            @auth
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                                    role="button" aria-expanded="false"
                                                    style="color:white; font-weight:lighter" id="navbarDropdown">
                                                    Olá, {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a class="dropdown-item ps-2">
                                                            <form class="m-0 p-0" method="POST"
                                                                action="{{ route('logout') }}">
                                                                @csrf
                                                                <button type="submit" class="btn d-flex mx-0 px-0">
                                                                    {{-- {{ __('Log Out') }} --}}
                                                                    Sair
                                                                </button>
                                                            </form>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-dark" href="#">
                                                            Meus Produtos
                                                        </a>
                                                    </li>
                                                </ul>
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                    <img src="./image/entrar.png" width="40px">
                                                </a>
                                            @endauth
                                        </div>
                                    @endif
                                </li>
                            </ul>

                            <form class="rentall-form-search order-lg-2 col-lg-3 d-flex"
                                action="{{ route('search.product') }}" class="d-flex">
                                <input type="text" class="form-control me-2" style="min-width: auto; "
                                    placeholder="Buscar" aria-label="Buscar" name="s">
                                <button class="btn btn-outline"
                                    style="color:rgb(20, 124, 162); background-color: white; border-color:white;"
                                    type="submit">Buscar</button>
                            </form>

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
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
                            <a href="{{ route('home') }}">
                                <img src="./image/logo-branco.png" style="width: 5vw">
                            </a>

                            <!--
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p> -->
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 ">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Conheca a Rentall</h6>
                            <p class="text-white">
                                Trabalhe Conosco
                            </p>
                            <p class="text-white">
                                Perguntas Frequentes
                            </p>
                            <p class="text-white">
                                Central de Ajuda
                            </p>
                            <p class="text-white">
                                Sobre a Rentall
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contatos</h6>
                            <p><i class="fas fa-home mr-3"></i> São Paulo, SP 05787-901, BR</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@rentall.com</p>
                            <p><i class="fas fa-phone mr-3"></i> 11 4213-5232</p>
                            <p><i class="fas fa-print mr-3"></i> 11 96321-5254</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Siga-nos</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">


            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

</html>
