@extends('layouts.header')
@section('content')

    <link rel="stylesheet" href="../../css/formProduct.css">


    <main class="container d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div id="formCadastroProduto">
                <h2> Editar Categoria </h2>
                <form action="{{ route('category.edit', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Nome da categoria</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}">
                    <div class="d-grid gap-2">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
