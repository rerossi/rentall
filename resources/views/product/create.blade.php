@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div id="formCadastroProduto" class="col-4">
        <h2> Novo Produto </h2>
        <form class="needs-validation" enctype="multipart/form-data" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 ">
                <input type="text" name="name" id="titulo" class="form-control" placeholder="Titulo Produto" required >
            </div>

            <div class="mb-3">
                <select class="form-select" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select name="brand_id" class="form-select" required >
                    <option value="1">Marca</option>
                    <option value="2" id="eletronicos">Eletrônicos</option>
                    <option value="3" id="esportes">Esportes</option>
                    <option value="4" id="ferramentas">Ferramentas</option>
                    <option value="5" id="games">Games</option>
                    <option value="6" id="domestico">Utensílios Doméstico</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="number" name="price" id="preco" min="0" class="form-control" placeholder=" Valor diária" required >
                <span class="input-group-text">,00</span>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text">Descrição</span>
                <textarea name="description" id="descricao" class="form-control" aria-label="With textarea" required></textarea>
            </div>


            <div class="input-group ">
                <!-- <input  type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" > -->
                <input type="file" name="image" id="image" class="form-control" placeholder="image Produto" required >

            </div>

            <div class="d-grid gap-2">

                <input type="submit" value="Cadastrar">

            </div>

        </form>
    </div>
</div>
@endsection
