@extends('layouts.header')
@extends('layouts.navbar')
@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase text-white">{{ $title }}</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($products as $product)
                <div class="col-10 col-md-6 col-lg-3 card m-3 p-0">
                    <img src="{{ asset($product->image) }}" class="card-img-top " alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-center ">{{ $product->name }}</h5>
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                        <div class="text-center">
                            <span class="text-dark h4">R$ {{ $product->price }}</span>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('show.product', $product->id) }}" class="btn btn-primary btn-sm">
                                Visualizar
                            </a>
                            <form action="{{ route('cart.store', $product->id) }}" method="POST" style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@extends('layouts.footer')
