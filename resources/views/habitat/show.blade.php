@extends('layouts.app')

@section('template_title')
    {{ $habitat->name ?? "{{ __('Show') Habitat" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Habitat</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habitats.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $habitat->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $habitat->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
