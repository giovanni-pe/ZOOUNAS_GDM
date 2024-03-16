@extends('layouts.app')

@section('template_title')
    {{ $sponsor->name ?? "{{ __('Show') Sponsor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sponsor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sponsors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $sponsor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $sponsor->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
