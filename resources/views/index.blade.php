@extends('layouts.header')
@extends('layouts.navbar')
@section('content')
    <section class="pt-2" style="height: 40% !important;">
        <div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item text-center active" data-bs-interval="5000">
                    <img src="./image/carrosel-2.png" class="" alt="...">
                </div>

                <div class="carousel-item text-center" data-bs-interval="5000">
                    <img src="./image/banner2.png" class="" alt="...">
                </div>

                <div class="carousel-item text-center">
                    <img src="./image/carrosel-3.png" class="" alt="...">
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="my-5">
        <div class="container d-flex justify-content-center">
            <div class="row d-flex justify-content-center ">
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 1) }}">
                    <div>
                            <img src="./image/ferramentas.png" class="my-1">
                            <h3 class="text-dark">Ferramentas</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 2) }}">
                    <div>
                            <img src="./image/controle-de-video-game.png">
                            <h3 class="text-dark">Games</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 3) }}">
                    <div>
                            <img src="./image/informatica.png">
                            <h3 class="text-dark">Informatica</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 4) }}">
                    <div>
                            <img src="./image/sports.png">
                            <h3 class="text-dark">Esportes</h3>
                        </div>
                    </a>
                </div>
        

                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75" href="{{ route('search-category', 5) }}">
                    <div>
                            <img src="./image/instrumentos-musicais.png">
                            <h3 class="text-dark">Instrumentos Musicais</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 8) }}">
                    <div>
                            <img src="./image/camera.png">
                            <h3 class="text-dark">Audio e Video</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 9) }}">
                    <div>
                            <img src="./image/moda.png">
                            <h3 class="text-dark">Moda</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 my-2 d-flex justify-content-center align-items-center text-center">
                    <a class="text-decoration-none border border-2 border-dark w-75 p-3" href="{{ route('search-category', 10) }}">
                    <div>
                            <img src="./image/brinquedos-do-bebe.png">
                            <h3 class="text-dark">Brinquedos</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.footer')
