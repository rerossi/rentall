@extends('layouts.header')
@section('content')
    <link rel="stylesheet" href="../../css/formProduct.css">
  
    <main class="container d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div id="formCadastroProduto">
                <h2> Editar Produto </h2>
                <form class="needs-validation" action="{{ route('product.edit', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <input autofocus type="text" name="name" id="titulo" class="form-control" placeholder="Titulo Produto"
                            value="{{ $product->name }}" required>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="price" id="preco" min="0" class="form-control"
                            placeholder=" Valor diária" value="{{ $product->price }}" required>
                        <span class="input-group-text">,00</span>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea name="description" id="descricao" class="form-control" aria-label="With textarea"
                            required>{{ $product->description }}</textarea>
                    </div>

                    <div class="input-group ">
                        <!-- <input  type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" > -->
                        <input type="file" name="image" id="image" class="form-control" placeholder="image Produto"
                            value="{{ $product->image }}">

                    </div>
                    <div class="d-grid gap-2">
                        <input class="btn" type="submit" value="Enviar">
                    </div>
                   
                   
                    <a class="text-center mt-5" style="text-decoration:none; color: #808080" href="{{ route('product.index') }}">
                        {{ __('voltar') }}
                    </a>
            
                </form>

            </div>
        </div>
    </main>
@endsection
