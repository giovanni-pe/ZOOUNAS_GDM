@extends('layouts.zoofrontend')
@section('content')
    <!-- Contacto Inicio -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Dirección</p>
                            <h5 class="mb-0">Tingo María, Huanuco, Perú</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Llamar Ahora</p>
                            <h5 class="mb-0">+123 456 789</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Correo Electrónico</p>
                            <h5 class="mb-0">info@zoounas.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Contáctanos</p>
                    <h1 class="display-5 mb-4">¿Tienes alguna consulta? ¡Por favor contáctanos!</h1>
                    <p class="mb-4"> Registrese  ¡y listo! <a href="{{ url('tickets/create') }}">Compre sus boletos ahora !</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="name"
                                        placeholder="Tu Nombre">
                                    <label for="name">Tu Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="email"
                                        placeholder="Tu Correo Electrónico">
                                    <label for="email">Tu Correo Electrónico</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="subject"
                                        placeholder="Asunto">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" placeholder="Deja tu mensaje aquí" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;" id="map"></div>
                    <script>
                        function iniciarMap() {
                            var coord = {
                                lat: -9.312267,
                                lng: -75.995333
                            };
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 10,
                                center: coord
                            });
                            var marker = new google.maps.Marker({
                                position: coord,
                                map: map
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto Fin -->
@endsection
