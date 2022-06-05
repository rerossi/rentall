@extends('layouts.header')

@section('content')
    <main style="height: 100vh;" class="d-flex flex-column justify-content-center">
        <section class="container fundo rounded-3" style="background-color: rgb(210, 210, 210)">
            <h2 class="text-center h2 py-2"> Lixeira Produtos </h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Restaurar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->Category->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ asset($product->image) }}" style="width:100px;"></td>
                        <td>
                            <button name="editar" class="btn btn-success my-2">
                                <a href="{{ route('product.restore', $product->id) }}">
                                    Restaurar
                                </a>
                            </button>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </main>
@endsection
