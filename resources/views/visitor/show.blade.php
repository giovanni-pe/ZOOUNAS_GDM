@extends('layouts.app')

@section('template_title')
    {{ $visitor->name ?? "{{ __('Show') Visitor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Visitor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('visitors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $visitor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $visitor->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Visit Date:</strong>
                            {{ $visitor->visit_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
