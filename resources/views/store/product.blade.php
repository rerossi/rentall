@extends('layouts.header')
@extends('layouts.navbar')

@section('content')
    <main class="d-flex justify-content-center h-100 align-items-center">
        <section class="padding-y bg-light shadow-sm rounded py-3 " style="height: 45%;">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="text-decoration-none text-muted"
                                href="{{ route('search-category', $product->Category->id) }}">{{ $product->Category->name }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <aside class="col-lg-6">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap d-flex justify-content-center">
                                 <img style="max-width:30%" src="{{ asset($product->image) }}">
                            </div>
                        </article>
                    </aside>
                    <div class="col-lg-6">
                        <article class="ps-lg-3">
                            <h4 class="title text-dark">{{ $product->name }}</h4>
                            <div class="rating-wrap my-3">
                                <ul style="list-style: none;" class="rating-stars p-0">
                                    <li style="width:80%" class="stars-active"> <img
                                            src="{{ asset('/image/stars-active.svg') }}" alt="">
                                        <b class="label-rating text-warning">5.0</b>
                                    </li>

                                </ul>
                            </div> <!-- rating-wrap.// -->
                            <div class="mb-3">
                                <var class="price h5">
                                    R${{ $product->price }}
                                </var>
                            </div>
                            <p>{{ $product->description }}</p>

                            <a href="#" class="btn btn-warning text-white">
                                <i class="me-2 fa fa-shopping-basket"></i>
                                <form action="{{ route('cart.store', $product->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    <button class="p-0 m-0 btn text-white" type="submit">Adicionar ao carrinho</button>
                                </form>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@extends('layouts.footer')
