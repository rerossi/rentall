@extends('layouts.header')
@extends('layouts.navbar')
@section('content')
<main class="d-flex justify-content-center rounded " style="height: 100%">
    <section class="pt-2 mt-5 bg-light w-50 h-50">
        <div class="card-body">
            <form class="needs-validation" action="{{ route('user.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="row gx-3">
                            <div class="col-6 mb-3">
                                <label class="form-label">
                                    Nome
                                </label>
                                <input class="form-control" type="text" placeholder="Type here"
                                    value="{{ $user->name }}" name="name">
                            </div> <!-- col .// -->
                            <div class="col-6 mb-3">
                                <label class="form-label">
                                    Sobrenome
                                </label>
                                <input class="form-control" type="text" placeholder="Type here"
                                    value="{{ $user->lastname }}" name="lastname">
                            </div> <!-- col .// -->
                            <div class="col-lg-6 col-md-6 mb-3">
                                <label class="form-label">
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@mail.com"
                                    value="{{ $user->email }}" name="email">
                            </div>
                        </div> <!-- row.// -->
                        <input class="btn btn-primary" type="submit" value="Salvar">
                    </div> <!-- col.// -->
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
@extends('layouts.footer')
