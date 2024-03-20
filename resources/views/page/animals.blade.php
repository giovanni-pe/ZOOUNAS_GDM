@extends('layouts.zoofrontend')

@section('content')


    <!-- Sección de Animales -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nuestros Animales</p>
                    <h1 class="display-5 mb-0">Veamos Nuestros <span class="text-primary">Animales Adorables</span> del
                        Zoounas</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Explorar Más Animales</a>
                </div>
            </div>
            <div class="row g-4">

                <!-- Aquí irían los elementos de los animales, pero se ha omitido para brevedad -->

                  <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-md-1.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-md-1.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0">Venado</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-lg-1.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-lg-1.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0"> Montes</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-lg-2.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-lg-2.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0">Gato montes</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-md-2.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-md-2.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0">Cebra</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-md-3.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-md-3.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0">Elefante</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="animal-item" href="{{ url('img/animal-lg-3.jpg') }}" data-lightbox="animal">
                                            <div class="position-relative">
                                                <img class="img-fluid" src="{{ url('img/animal-lg-3.jpg') }}" alt="">
                                                <div class="animal-text p-4">
                                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                                    <h5 class="text-white mb-0">jirafa</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

            </div>
        </div>
    </div>
    <!-- Fin Sección de Animales -->
@endsection
