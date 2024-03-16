@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? "{{ __('Show') Reservation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Visitor Id:</strong>
                            {{ $reservation->visitor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Reservation Date:</strong>
                            {{ $reservation->reservation_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
