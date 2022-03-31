@extends('layouts.app')

@section('content')


<div class="row d-flex justify-content-center">
  <div id="formCadastroProduto" class="col-4">
    <h2> Novo Produto </h2>
    <form class="needs-validation" novalidate method="post" action="../produto/novoProduto.php" enctype="multipart/form-data">
      <section class="mb-3 ">
        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo Produto" required value="<?php echo $produto['titulo'] ?? ''; ?>">
      </section>

      <div class="mb-3">
        <select name="opcao" class="form-select" required value="<?php echo $produto['categoria'] ?? ''; ?>">
          <option value=null> Categoria</option>
          <option value="Eletronicos" id="eletronicos">Eletrônicos</option>
          <option value="Esportes" id="esportes">Esportes</option>
          <option value="Ferramentas" id="ferramentas">Ferramentas</option>
          <option value="Games" id="games">Games</option>
          <option value="Domestico" id="domestico">Utensílios Doméstico</option>
        </select>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">R$</span>
        <input type="number" name="preco" id="preco" min="0" class="form-control" placeholder=" Valor diária" required value="<?php echo $produto['preco'] ?? ''; ?>">
        <span class="input-group-text">,00</span>
      </div>

      <div class="mb-3">
        <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo" required value="<?php echo $produto['modelo'] ?? ''; ?>">
        <div class="underline"> </div>
      </div>

      <div class="mb-3">
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" required value="<?php echo $produto['marca'] ?? ''; ?>">
        <div class="underline"> </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text">Descrição</span>
        <textarea name="descricao" id="descricao" class="form-control" aria-label="With textarea" required><?php echo $produto['descricao'] ?? ''; ?></textarea>
      </div>


      <div class="input-group ">
        <input type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
      </div>

      <div class="d-grid gap-2">

      <input type="submit" value="Cadastrar">

      <a class="text-center mt-4" style="text-decoration: none; color: #808080" href="./index.php">
        <spam> Voltar </spam>
      </a>
      </div>

    </form>
  </div>

</div>



@endsection