@extends('layouts.app')

@section('template_title')
    {{ $payment->name ?? "{{ __('Show') Payment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Payment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Reservation Id:</strong>
                            {{ $payment->reservation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $payment->amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
