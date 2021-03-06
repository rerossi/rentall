@section('footer')
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: rgb(20, 124, 162)">
        <!-- Grid container -->
        <div class="container p-2 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-4">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('/image/logo-branco.png') }}" style="width: 5vw">
                        </a>

                        <!--
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p> -->
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 ">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Conheca a Rentall</h6>
                        <p class="text-white">
                            Trabalhe Conosco
                        </p>
                        <p class="text-white">
                            Perguntas Frequentes
                        </p>
                        <p class="text-white">
                            Central de Ajuda
                        </p>
                        <p class="text-white">
                            Sobre a Rentall
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contatos</h6>
                        <p><i class="fas fa-home mr-3"></i> S??o Paulo, SP 05787-901, BR</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@rentall.com</p>
                        <p><i class="fas fa-phone mr-3"></i> 11 4213-5232</p>
                        <p><i class="fas fa-print mr-3"></i> 11 96321-5254</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Siga-nos</h6>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                            role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                            role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                            role="button"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                            role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">


        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
@endsection
