<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('visitor_id') }}
            {{ Form::text('visitor_id', $reservation->visitor_id, ['class' => 'form-control' . ($errors->has('visitor_id') ? ' is-invalid' : ''), 'placeholder' => 'Visitor Id' ]) }}
            {!! $errors->first('visitor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reservation_date') }}
            {{ Form::text('reservation_date', $reservation->reservation_date, ['class' => 'form-control' . ($errors->has('reservation_date') ? ' is-invalid' : ''), 'placeholder' => 'Reservation Date']) }}
            {!! $errors->first('reservation_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>