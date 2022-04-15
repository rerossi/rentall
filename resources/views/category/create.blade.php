@extends('layouts.app')

@section('content')
<form action="{{route('category.store')}}" method="POST">
@csrf
<label for="category">Nome da Categoria:</label>
    <input id="category" name="name" type="text">
    <button type="submit">Enviar</button>
</form>

@endsection
