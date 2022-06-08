@extends('layouts.header')
@section('content')
    <link rel="stylesheet" href="../css/formProduct.css">

    <main class="container d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div id="formCadastroProduto">
                <h2> Nova Categoria </h2>
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <label for="category">Nome da Categoria:</label>
                    <input autofocus id="category" name="name" type="text">
                    <div class="d-grid gap-2">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
