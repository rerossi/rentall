@section('navbar')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row w-100 mt-2 d-flex align-items-center">
                    <div class="col-3 col-lg-1 order-lg-0 ms-lg-5">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="d-inline-block align-text-center" src="{{ asset('/image/logo-azul.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
