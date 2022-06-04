@extends('layouts.store')

@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="mx-auto col-10 text-center">
                <h2 class="text-uppercase">{{ $title }}</h2>
                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, nobis!</p>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                    <img src="{{ asset($product->image) }}" class="img-fluid">
                    <span class="d-block h6 text-center mt-3">{{ $product->name }}</span>
                    <div class="text-center">
                        <span class="text-muted">R$ {{ $product->price }}</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('show.product' , $product->id ) }}" class="btn btn-primary btn-sm">Visualizar</a>
                        <form action="{{ route('cart.store' , $product->id) }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-sm">Comprar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
