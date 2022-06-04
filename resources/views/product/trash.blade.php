@extends('layouts.app')

@section('content')

<div class="text-center justify-content-center d-flex align-items-center pb-3 ">
    <button class="btn botao btn-dark"><a href="../telas/formProduto.php" class="text-decoration-none text-reset"> Cadastrar Produto </a></button>
</div>
<section class="container fundo">
    <h2> Meus Produtos </h2>
        <table class="table ">
            <thead>
                <tr>

                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Restaurar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product )
                <tr>
                    {{-- <td class="text-center fs-3" colspan="10"> Sem Resgistros </td> --}}

                           <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->Category->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{asset($product->image)}}" style="width:100px;"></td>
                            <td><button name="editar" class="btn btn-success my-2"> <a href="{{route('product.restore', $product->id)}}">Restaurar</a></button></td>

                        </tr>

                @endforeach
                </tbody>
        </table>
</section>




@endsection
