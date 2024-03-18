@extends('layouts.zoofrontend')
@section('content')




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














@endsection