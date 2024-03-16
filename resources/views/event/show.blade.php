@extends('layouts.app')

@section('template_title')
    {{ $event->name ?? "{{ __('Show') Event" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('events.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $event->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $event->description }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $event->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>End Date:</strong>
                            {{ $event->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $event->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
