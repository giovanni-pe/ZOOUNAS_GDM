<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZooUNAS - Zoológico </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon/icon-10.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Universidad Nacional Agraria De la selva </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Vie : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+51 910 731 863</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icono">
            <h1 class="m-0 text-primary">ZooUNAS</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Acerca de</a>
                <a href="service.html" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="animal.html" class="dropdown-item">Nuestros Animales</a>
                        <a href="membership.html" class="dropdown-item">Membresía</a>
                        <a href="visiting.html" class="dropdown-item">Horario de Visita</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonios</a>
                        <a href="404.html" class="dropdown-item">Página 404</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="" class="btn btn-primary">Comprar Entradas<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">Disfruta de un Día Maravilloso con tu Familia</h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Leer Más</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/tLGDzwza2Ig?si=3TJ4L6XCwKPj0ZdQ" data-bs-target="#videoModal">
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
                    <h1 class="display-5 mb-4">¡Por qué deberías visitar el Parque <span
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Nuestros Servicios</p>
                    <h1 class="display-5 mb-0">Servicios Especiales Para los Visitantes de <span
                            class="text-primary">ZOOUNAS</span></h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Llama para más información</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <div class="row gy-5 gx-4">
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid mb-3" src="img/icon/icon-2.png" alt="Icono">
            <h5 class="mb-3">Estacionamiento de Autos</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-fluid mb-3" src="img/icon/icon-3.png" alt="Icono">
            <h5 class="mb-3">Fotos de Animales</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid mb-3" src="img/icon/icon-4.png" alt="Icono">
            <h5 class="mb-3">Servicios de Guía</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <img class="img-fluid mb-3" src="img/icon/icon-5.png" alt="Icono">
            <h5 class="mb-3">Comida y Bebidas</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid mb-3" src="img/icon/icon-6.png" alt="Icono">
            <h5 class="mb-3">Compras en el Zoológico</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-fluid mb-3" src="img/icon/icon-7.png" alt="Icono">
            <h5 class="mb-3">Wi-Fi de Alta Velocidad Gratis</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid mb-3" src="img/icon/icon-8.png" alt="Icono">
            <h5 class="mb-3">Área de Juegos</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <img class="img-fluid mb-3" src="img/icon/icon-9.png" alt="Icono">
            <h5 class="mb-3">Casa de Descanso</h5>
            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
        </div>
    </div>
    </div>
    </div>
    <!-- Fin de Servicios -->


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
                                    <p class="mb-2">+51 34 5 678 999</p>
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


    <!-- Testimonios -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">¡Nuestros Clientes Opinan!</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Nombre del Cliente</h5>
                        <span class="fst-italic">Profesión</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Testimonios -->


    <!-- Pie de Página -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Dirección</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rupa Rupa</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+51 345 678 590</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>giovanni@unas.edu.pe</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Enlaces Rápidos</h5>
                    <a class="btn btn-link" href="">Sobre Nosotros</a>
                    <a class="btn btn-link" href="">Contáctanos</a>
                    <a class="btn btn-link" href="">Nuestros Servicios</a>
                    <a class="btn btn-link" href="">Términos y Condiciones</a>
                    <a class="btn btn-link" href="">Soporte</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Enlaces Populares</h5>
                    <a class="btn btn-link" href="">Sobre Nosotros</a>
                    <a class="btn btn-link" href="">Contáctanos</a>
                    <a class="btn btn-link" href="">Nuestros Servicios</a>
                    <a class="btn btn-link" href="">Términos y Condiciones</a>
                    <a class="btn btn-link" href="">Soporte</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Boletín</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Tu correo electrónico">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">www.zoo.unas.edu.pe</a>, Todos los Derechos
                        Reservados.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** Este modelo es gratuito siempre que mantengas el enlace de crédito del autor en el pie de página. Si deseas utilizar el modelo sin el enlace de crédito del autor, puedes adquirir la Licencia de Eliminación de Créditos de "https://htmlcodex.com/credit-removal". Gracias por tu apoyo. ***/-->
                        Diseñado Por <a class="border-bottom" href="https://github.com/giovanni-pe">GK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de Pie de Página -->


    <!-- Volver Arriba -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Bibliotecas de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Plantilla de JavaScript -->
    <script src="js/main.js"></script>


</body>

</html>
