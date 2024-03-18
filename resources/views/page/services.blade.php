@extends('layouts.zoofrontend')
@section('content')



    <!-- Encabezado de la Página Inicio -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Servicios</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Servicios</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Encabezado de la Página Fin -->


    <!-- Servicios Inicio -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nuestros Servicios</p>
                    <h1 class="display-5 mb-0">Servicios Especiales Para <span class="text-primary">Visitantes de Zoofari</span></h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Llame para más información</p>
                            <h2 class="text-white mb-0">+51 910 731 863</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-2.png') }}" alt="Icono">
                    <h5 class="mb-3">Estacionamiento</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-3.png') }}" alt="Icono">
                    <h5 class="mb-3">Fotos de Animales</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-4.png') }}" alt="Icono">
                    <h5 class="mb-3">Servicios de Guía</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-5.png') }}" alt="Icono">
                    <h5 class="mb-3">Comida y Bebidas</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-6.png') }}" alt="Icono">
                    <h5 class="mb-3">Compras en el Zoológico</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-8.png') }}" alt="Icono">
                    <h5 class="mb-3">Área de Juegos</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('img/icon/icon-9.png') }}" alt="Icono">
                    <h5 class="mb-3">Espacios de  Descanso</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Servicios Fin -->











@endsection