@extends('layouts.header')
@section('content')
    <link rel="stylesheet" href="../css/login.css">
    <main class="container">
        <h2 class="pb-2"> Login Rentall </h2>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-field">
                <x-input placeholder="usuario@exemplo.com" id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
            </div>
            <div class="input-field">

                <x-input id="password" placeholder="Senha" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

            </div>
            <input type="submit" value="continue">

        </form>
        <span class="novo-usuario d-flex justify-content-center mt-3">
            <a href="{{ route('register') }}">
                Cadastre-se
            </a>
        </span>
    </main>
@endsection
