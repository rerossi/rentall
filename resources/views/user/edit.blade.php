@extends('layouts.header')
@extends('layouts.navbar')
@section('content')
    <section class="pt-2" style="height: 40% !important;">
        <div class="card-body">
            <form class="needs-validation" action="{{ route('user.update', $user->id) }}" method="POST">
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
                                    value="{{ $user->name }}">
                            </div> <!-- col .// -->
                            <div class="col-6 mb-3">
                                <label class="form-label">
                                    Sobrenome
                                </label>
                                <input class="form-control" type="text" placeholder="Type here"
                                    value="{{ $user->lastname }}">
                            </div> <!-- col .// -->
                            <div class="col-lg-6 col-md-6 mb-3">
                                <label class="form-label">
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@mail.com"
                                    value="{{ $user->email }}">
                            </div>
                        </div> <!-- row.// -->
                        <input class="btn btn-primary" type="submit" value="Salvar">
                    </div> <!-- col.// -->
                </div>
            </form>
        </div>
    </section>
@endsection
@extends('layouts.footer')
