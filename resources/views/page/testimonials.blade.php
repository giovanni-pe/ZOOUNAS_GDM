@extends('layouts.zoofrontend')
@section('content')

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