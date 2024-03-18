@extends('layouts.zoofrontend')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Acerca de Nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Acerca de Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Bienvenido a ZooUNAS</p>
                    <h1 class="display-5 mb-4">¡Por qué deberías visitar <span class="text-primary">ZooUNAS</span>!</h1>
                    <p class="mb-4">ZooUNAS se compromete a ofrecerte momentos inolvidables mientras te sumerges en la riqueza de la fauna de la selva amazónica.</p>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Estacionamiento Gratuito</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Ambiente Natural</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Guía Profesional y Seguridad</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Los Mejores Animales del Mundo</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Leer Más</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('img/about.jpg') }}" alt="">
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
                    <p class="text-white mb-0">Total de Animales</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Visitantes Diarios</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Membresía Total</p>
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