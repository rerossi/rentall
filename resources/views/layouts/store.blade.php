<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-commerce</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    e-Commerce
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarCategoria" role="button" data-bs-toggle="dropdown">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarCategoria">
                                @foreach (\App\Models\Category::all() as $category)
                                    <a class="dropdown-item" href="{{ route('search-category', $category->id) }}">{{ $category->name }}</a>
                                @endforeach
                            </ul>
                        </li>

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarUser" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUser">
                                    <a href="#" class="dropdown-item">Meu Perfil</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4 container">
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
        @yield('content')
    </main>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="my-2">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: rgb(20, 124, 162)">
            <!-- Grid container -->
            <div class="container p-2 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
                            
                            <img src="./imagens/logo-branco.png" style="width: 150px">
    
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
             
              
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
    
</body>


</html>
</body>

</html>
