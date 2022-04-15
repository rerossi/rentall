@extends('layouts.app')

@section('content')


<a clas="my-5" href="../telas/index.php">
    <img src="../imagens/logo-branco.png" style="width: 100px; margin-left: -150px;">
</a>

<div class="text-center justify-content-center d-flex align-items-center pb-3 ">
    <button class="btn botao btn-dark"><a href="../telas/formProduto.php" class="text-decoration-none text-reset"> Cadastrar Produto </a></button>
</div>
<section class="container fundo">
    <h2> Meus Produtos </h2>
    <form method="post" action="">
        <table class="table ">
            <thead>
                <tr>

                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Editar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product )

                    {{-- <td class="text-center fs-3" colspan="10"> Sem Resgistros </td> --}}

                           <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->Category->name}}</td>
                            {{-- <td>{{$product->brand}}</td> --}}
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->image}}</td>
                            <td><button name="editar" class="btn btn-success my-2">Editar</button></td>
                            <td><button name="excluir" class="btn btn-danger my-2">Excluir</button></td>
                        </tr>

                @endforeach
        </table>

    </form>
</section>




@endsection
