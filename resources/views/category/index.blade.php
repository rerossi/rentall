@extends('layouts.header')

@section('content')
    <main style="height: 100vh;" class="d-flex flex-column justify-content-center">
        <div class="text-center justify-content-center d-flex align-items-center pb-3 ">
            <a style="color: white !important;" class="btn text-white btn-dark text-decoration-none text-reset"
                href="{{ route('category.create') }}">
                Criar Categorias
            </a>
        </div>
        <section class="container fundo rounded-3" style="background-color: rgb(210, 210, 210)">
            <h2 class="text-center h2 py-2"> Categorias </h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Categoria</th>
                        <th>Quantidade de Produtos na Categoria</th>
                        <th>Editar</th>
                        <th>Apagar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->Products->count() }}</td>
                            <td>
                                <a class="btn btn-success my-2 link-light"
                                    href="{{ route('category.edit', $category->id) }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger my-2 link-light"
                                    href="{{ route('category.destroy', $category->id) }}">
                                    Apagar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
