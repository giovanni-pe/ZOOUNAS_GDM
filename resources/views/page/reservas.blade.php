@extends('layouts.zoofrontend')
@section('content')

    <div class="container">
        <h1>Reserva tu visita al Zoológico UNAS</h1>
        <p>Escanea el código Yape para realizar tu pago:</p>
        <center><img src="{{ url('img/yape.png') }}" alt="Código Yape"></center>

        <p>Una vez realizado el pago, contáctanos vía WhatsApp para confirmar tu reserva:</p>
        <a href="https://wa.me/51910731863" class="btn btn-primary">Contactar por WhatsApp</a>
    </div>


@endsection