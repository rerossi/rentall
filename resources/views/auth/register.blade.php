@extends('layouts.header')
@section('content')
<link rel="stylesheet" href="../css/newUser.css">
    <main class="container">
        <h2> Novo Usuário </h2>
         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />

         <!-- Validation Errors -->
         <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-field">
                <x-input placeholder="Digite seu nome" id="nome"  class="block mt-1 w-full" type="text" name="name" 
                :value="old('name')" required autofocus />
                <div class="underline"> </div>
            </div>
            <div class="input-field">
                <x-input placeholder="Digite seu sobrenome" id="sobrenome"  class="block mt-1 w-full" type="text" name="lastname"
                :value="old('lastname')" required autofocus />
                <div class="underline"> </div>
            </div>
            <div class="input-field">
                <x-input id="email" placeholder="seuemail@exemplo.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <div class="underline"> </div>
            </div>
            <div class="input-field">
                <x-input id="senha" placeholder="Digite sua senha" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
                <div class="underline"> </div>
            </div>
            <div class="input-field">
                <x-input placeholder="Confirme sua senha" id="confirma" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />
                <div class="underline"> </div>
            </div>
            <input class="mt-2" type="submit" value="Cadastrar">
            <a class="text-center mt-3" style="text-decoration:none; color: #808080" href="{{ route('login') }}">
                {{ __('Já registrado?') }}
            </a>
        </form>
    </main>
@endsection
