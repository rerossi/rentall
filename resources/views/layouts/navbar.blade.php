@section('navbar')
    <header>
        <nav class="navbar navbar-light " style="background-color:rgb(20, 124, 162);">
            <div class="container-fluid">
                <div class="row w-100">
                    <div class="col-2">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="./image/logo-branco.png" alt="" class="d-inline-block align-text-center w-25">
                        </a>
                    </div>

                    <div class="col-8">
                        <div class="justify-content-center mt-2 row" style="margin-left: 70px;">
                            <form action="{{ route('search.product') }}" class="d-flex col-8">

                                <input type="text" class="form-control me-2" style="min-width: auto; " placeholder="Search"
                                    aria-label="Search" name="s">
                                <button class="btn btn-outline"
                                    style="color:rgb(20, 124, 162); background-color: white; border-color:white;"
                                    type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-2 text-end">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <span style="text-decoration: none; color: white; font-weight:lighter">
                                        Olá, {{ Auth::user()->name }}
                                    </span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                            {{-- {{ __('Log Out') }} --}}
                                            <img src="./image/sair.png" width="25px" style="margin-left: 15px;">

                                        </button>
                                    </form>
                                    {{-- <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="./image/entrar.png" width="40px"></a>

                                    {{-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif --}}
                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif --}}
                                @endauth
                            </div>
                        @endif


                    </div>
                </div>

                <div class="row w-100">
                    <div class="col-12">
                        <ul class="nav justify-content-center">
                            <li class="nav-item dropdown">
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
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:white; font-weight:lighter">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:white; font-weight:lighter"> Meus
                                    Produtos </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:white; font-weight:lighter">Cadastrar
                                    produto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
