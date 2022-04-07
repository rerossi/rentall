@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center">
    <div id="formCadastroProduto" class="col-4">
        <h2> Novo Produto </h2>
        <form class="needs-validation" enctype="multipart/form-data" action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="mb-3 ">
                <input type="text" name="name" id="titulo" class="form-control" placeholder="Titulo Produto" required >
            </div>

            <div class="mb-3">
                <select name="category_id" class="form-select" required >
                    <option value="1"> Categoria</option>
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
                <span class="input-group-text">Descrição</span>
                <textarea name="description" id="descricao" class="form-control" aria-label="With textarea" required><?php echo $produto['descricao'] ?? ''; ?></textarea>
            </div>


            <div class="input-group ">
                <!-- <input  type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" > -->
                <input type="text" name="image" id="image" class="form-control" placeholder="image Produto" required >

            </div>

            <div class="d-grid gap-2">

                <input type="submit" value="Cadastrar">

                <a class="text-center mt-4" style="text-decoration: none; color: #808080" href="./index.php">
                    <spam> Voltar </spam>
                </a>
            </div>
            <!-- 
            <label for="name">Nome do produto</label>
            <input type="text" name="name" id="name">
            <label for="description">Descrição</label>
            <input type="text" name="description" id="description">
            <label for="price">Preço</label>
            <input type="number" step="0.1" name="price" id="price">
            <label for="stock">estoque</label>
            <input type="number" name="stock" id="stock">
            <button type="submit">Enviar</button> -->
        </form>
    </div>
</div>
@endsection