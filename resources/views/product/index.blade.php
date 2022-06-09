@extends('layouts.header')
@extends('layouts.navbar_form')
@section('content')
    <main class="d-flex flex-column justify-content-center mt-5">
        <div class="text-center justify-content-center d-flex align-items-center pb-3 mt-3">

            <a class="btn botao btn-dark" href="{{ route('product.create') }}" class="text-decoration-none text-reset">
                Cadastrar Produto
            </a>
            <a class="btn botao btn-warning ms-3" href="{{ route('product.trash') }}" class="text-decoration-none text-reset">
                Lixeira Produtos
            </a>

        </div>
        <section class="container fundo rounded-3" style="background-color: rgb(210, 210, 210)">
            <h2 class="text-center h2 py-2"> Meus Produtos </h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            {{-- <td class="text-center fs-3" colspan="10"> Sem Resgistros </td> --}}

                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->Category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ asset($product->image) }}" style="width:50px;"></td>
                            <td>
                                <a class="btn btn-success my-2 link-light"
                                    href="{{ route('product.edit', $product->id) }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger my-2 link-light"
                                    href="{{ route('product.destroy', $product->id) }}">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
