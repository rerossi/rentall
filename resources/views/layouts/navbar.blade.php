@section('navbar')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-0" style="background-color:rgb(20, 124, 162);">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row w-100 mt-2 d-flex align-items-center">
                    <div class="col-3 col-lg-1 order-lg-0 ms-lg-5">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="d-inline-block align-text-center" src="{{ asset('/image/logo-branco.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse col-lg-8 pb-3" id="navbarSupportedContent">
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
                                </li>
                                <li class="d-lg-none mt-2">
                                    <a href="{{ route('cart.index') }}"
                                        class="text-white text-decoration-none mt-5" style="color:white; font-weight:lighter">
                                        Meu carrinho
                                    </a>
                                </li>
                            @else
                                <li class="d-lg-none">
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                                        <img src="{{ asset('/image/entrar.png') }}" width="40px">
                                    </a>
                                </li>
                            @endauth
                            @endif
                            <li class="nav-item dropdown ps-3 d-none d-lg-block">
                                @if (Route::has('login'))
                                    <div
                                        class="hidden top-0 right-0 sm:block d-flex justify-content-end align-items-center">
                                        @auth
                                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false" style="color:white; font-weight:lighter"
                                                id="navbarDropdown">
                                                Olá, {{ Auth::user()->name }}
                                            </a>
                                            <a href="{{ route('cart.index') }}" style="color:white; font-weight:lighter" class="ms-2">
                                                <i style="color:white;" class="fa fa-shopping-cart me-1"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a class="nav-link text-dark" href="{{ route('product.index') }}">
                                                        Meus Produtos
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-dark" href="{{ route('order.index') }}">
                                                        Pedidos
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-dark" href="{{ route('user.edit') }}">
                                                        Perfil
                                                    </a>
                                                </li>
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
                                              
                                            </ul>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                <img src="{{ asset('/image/entrar.png') }}" width="40px">
                                            </a>
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>

                        <form class="rentall-form-search order-lg-2 col-lg-3 d-flex"
                            action="{{ route('search.product') }}" class="d-flex">
                            <input type="text" class="form-control me-2" style="min-width: auto; " placeholder="Buscar"
                                aria-label="Buscar" name="s">
                            <button class="btn btn-outline"
                                style="color:rgb(20, 124, 162); background-color: white; border-color:white;"
                                type="submit">Buscar</button>
                        </form>

                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
