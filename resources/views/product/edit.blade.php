@extends('layouts.app')

@section('content')
<form action="{{route('product.edit', $product->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3 ">
        <input type="text" name="name" id="titulo" class="form-control" placeholder="Titulo Produto" value="{{$product->name}}" required >
    </div>

    <div class="mb-3">
        <select class="form-select" name="category_id" required>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">R$</span>
        <input type="number" name="price" id="preco" min="0" class="form-control" placeholder=" Valor diária" value="{{$product->price}}" required >
        <span class="input-group-text">,00</span>
    </div>


    <div class="input-group mb-3">
        <span class="input-group-text">Descrição</span>
        <textarea name="description" id="descricao" class="form-control" aria-label="With textarea" required>{{$product->description}}</textarea>
    </div>


    <div class="input-group ">
        <!-- <input  type="file" class="form-control" name="upload" id="upload" aria-describedby="inputGroupFileAddon04" aria-label="Upload" > -->
        <input type="text" name="image" id="image" class="form-control" placeholder="image Produto" value="{{$product->image}}" required >

    </div>

    <button type="submit">Enviar</button>
</form>
@endsection
