<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZooUNAS - Zoológico </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/icon/icon-10.png') }}" rel="icon">

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
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
        <a href="i{{ url('/') }}" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="{{ url('img/icon/icon-10.png') }}" alt="Icono">
            <h1 class="m-0 text-primary">ZooUNAS</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
                <a href="{{ url('pages/about') }}" class="nav-item nav-link">Acerca de</a>
                <a href="{{ url('pages/services') }}" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ url('pages/animals') }}" class="dropdown-item">Nuestros Animales</a>
                        <a href="{{url('pages/sponsors')}}" class="dropdown-item">padrinos</a>
                        <a href="{{ url('pages/times') }}" class="dropdown-item">Horario de Visita</a>
                        <a href="{{ url('pages/testimonials') }}" class="dropdown-item">Testimonios</a>
                    </div>
                </div>
                <a href="{{ url('pages/contacts') }}" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="{{ url('pages/reservas') }}" class="btn btn-primary">Hacer reservaciones<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- Pie de Página -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Dirección</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rupa Rupa</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+51 345 678 590</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>giovanni.perez@unas.edu.pe</p>
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
    <!-- Bibliotecas de JavaScript -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Plantilla de JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
