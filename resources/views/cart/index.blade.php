@extends('layouts.store')
@extends('layouts.navbar')
@section('content')
<section class="container mt-5">
    <div class="row ">
        <div class="col-4 carrinho">
            <h2 class="mb-4 mt-5"><b>Detalhes do Endereço</b></h2>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="zipcode"><b>CEP</b></label>
                    <input type="text" class="form-control rounded border border-2 border-primary" name="zipcode" placeholder="CEP" required>
                </div>
                <div class="form-group">
                    <label for="address"><b>Endereco</b></label>
                    <input type="text" class="form-control rounded border border-2 border-primary" name="address" placeholder="Endereço" required>
                </div>
                <div class="form-group">
                    <label for="city"><b>Cidade</b></label>
                    <input type="text" class="form-control rounded border border-2 border-primary" name="city" placeholder="Cidade" required>
                </div>
                <div class="form-group">
                    <label for="state"><b>Estado</b></label>
                    <input type="text" class="form-control rounded border border-2 border-primary" name="state" placeholder="Estado" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary my-2 float-end ">Finalizar pedido</button>
            </form>
        </div>
        <div class="col-8">
            <h2 class="mb-2 mt-5"><b>Detalhes dos Produtos</b></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                <?php $total = 0.0 ?>
                @foreach($itens as $item)
                    <tr>
                        
                        <td>{{$item->Product->name}}</td>
                        <td>{{$item->Product->price}}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item->Product->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-primary btn-sm " style="padding-left:10px; padding-right:10px;">-</button>
                            </form>
                          
                            {{$item->units}}

                            <form action="{{ route('cart.store', $item->Product->id) }}" method="POST" style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm ">+</button>
                            </form>
                        </td>
                    </tr>
                    <?php $total += $item->Product->price * $item->units ?>
                @endforeach
                    <tr>
                        <td class="fw-bold">Total</td>
                        <td class="fw-bold">R$ {{ number_format($total,2) }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
@extends('layouts.footer')