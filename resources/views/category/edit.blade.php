@extends('layouts.header')
@section('content')

    
    <link rel="stylesheet" href="../../css/login.css">


    <main class="container d-flex align-items-center ps-5">
        <div class="row d-flex justify-content-center">
            <div id="">
                <h2> Editar Categoria </h2>
                <form action="{{ route('category.edit', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Nome da categoria</label>
                    <input autofocus type="text" name="name" id="name" value="{{ $category->name }}">

                    <input type="submit" value="Enviar">
                    <a class="text-center mt-3" style="text-decoration:none; color: #808080" href="{{ route('category.index') }}">
                        {{ __('voltar') }}
                    </a>
                
                </form>
            </div>
        </div>
    </main>
@endsection
