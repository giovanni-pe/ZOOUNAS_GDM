@extends('layouts.zoofrontend')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">Disfruta de un Día Maravilloso con tu Familia</h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Leer Más</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/o5F8ZKX_7Ew?si=5tby9nTZ1MmJXY-i" data-bs-target="#videoModal">
                            <span></span>
                        </button>

                       <h6 class="text-white m-0 ms-4 d-none d-sm-block">Ver Video</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Video de Youtube</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Bienvenido a ZOOUNAS</p>
                    <h1 class="display-5 mb-4">¡Por qué deberías visitar el <span
                            class="text-primary">ZOOUNAS</span>!</h1>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam
                        rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor
                        eos.</p>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Estacionamiento gratuito
                    </h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Entorno natural</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Guía profesional y
                        seguridad</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Los mejores animales del
                        mundo</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Leer Más</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Animales Totales</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Visitantes Diarios</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Padrinos</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Salvar la Vida Salvaje</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->



    
    <!-- Inicio de Animales -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nuestros Animales</p>
                    <h1 class="display-5 mb-0">Veamos Nuestros <span class="text-primary">Asombrosos</span> Animales
                        de ZOOUNAS</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Explorar Más Animales</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-md-1.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-lg-1.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-lg-2.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-md-2.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-md-3.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/animal-lg-3.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elefante</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Animales -->





    <!-- Horario de Visita -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Horario de Visita</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Lunes</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Martes</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Miércoles</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Jueves</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Viernes</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sábado</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Domingo</span>
                            <span>Cerrado</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Información de Contacto</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Oficina</td>
                                <td>Facultad de Recursos Naturale Renovables</td>
                            </tr>
                            <tr>
                                <td>Zoo</td>
                                <td>Universidad Nacional Agraria de La Selva</td>
                            </tr>
                            <tr>
                                <td>Boletería</td>
                                <td>
                                    <p class="mb-2">+012 345 6789</p>
                                    <p class="mb-0">boleteria@example.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Soporte</td>
                                <td>
                                    <p class="mb-2">+51 345 678 999</p>
                                    <p class="mb-0">soporte@unas.edu.pe</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Horario de Visita -->

    <!-- Membresía -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Apadrinaje</p>
                    <h1 class="display-5 mb-0">Puedes Apadrinar a tu Amigo silvestre en el  <span
                            class="text-primary">ZOOUNAS</span></h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Precios Especiales</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="img/animal-lg-1.jpg" alt="">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Popular</h4>
                        <h3 class="text-primary mb-4">20.00</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>Descuento del 10%</p>
                        <p><i class="fa fa-check text-primary me-3"></i>2 adultos y 2 niños</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Exhibición de animales gratuita</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Empezar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="img/animal-lg-2.jpg" alt="">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Estándar</h4>
                        <h3 class="text-primary mb-4">S/50</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>Descuento del 15%</p>
                        <p><i class="fa fa-check text-primary me-3"></i>4 adultos y 4 niños</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Exhibición de animales gratuita</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Empezar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="img/animal-lg-3.jpg" alt="">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Premium</h4>
                        <h3 class="text-primary mb-4">S/100</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>Descuento del 20%</p>
                        <p><i class="fa fa-check text-primary me-3"></i>6 adultos y 6 niños</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Exhibición de animales gratuita</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Empezar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Membresía -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">¡Nuestros Clientes Opinan!</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('img/testimonial-1.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>¡ZooUNAS ofreció una experiencia increíble! Me encantó la variedad de animales y el ambiente natural.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>¡Una visita a ZooUNAS es imprescindible para cualquier amante de la naturaleza! Lo recomiendo encarecidamente.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>¡Gracias a ZooUNAS por una experiencia maravillosa! Aprendí mucho sobre la vida salvaje mientras me divertía.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
@endsection 