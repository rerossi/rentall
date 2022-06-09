@extends('layouts.header')
@section('content')
  
    <link rel="stylesheet" href="../css/login.css">

    <main class="container d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div id="">
                <h2> Novo Produto </h2>
                <form class="needs-validation" enctype="multipart/form-data" action="{{ route('product.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <input autofocus type="text" name="name" id="titulo" class="form-control" placeholder="Titulo Produto"
                            required>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="price" id="preco" min="0" class="form-control"
                            placeholder=" Valor diária" required>
                        <span class="input-group-text">,00</span>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea name="description" id="descricao" class="form-control" aria-label="With textarea" required></textarea>
                    </div>


                    <div class="input-group ">
                        <!-- <input  type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" > -->
                        <input type="file" name="image" id="image" class="form-control" placeholder="image Produto"
                            required>

                    </div>

                    <div class="d-grid gap-2">
                        <input class="btn" type="submit" value="Cadastrar">
                    </div>

                    <a class="text-center mt-3" style="text-decoration:none; margin-left:20px; color: #808080" href="{{ route('product.index') }}">
                        {{ __('voltar') }}
                    </a>
                </form>
            </div>
        </div>
    </main>
@endsection
