<div class="box box-info padding-1">
    <div class="box-body">
        <livewire:customer.create :key="$refreshComponent" />
       
            
        <div class="form-group col-md-2">
            {{ Form::label('price') }}
            {{ Form::text('price', $ticket->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group ol-md-2">
            {{ Form::label('quantity_available') }}
            {{ Form::text('quantity_available', $ticket->quantity_available, ['class' => 'form-control' . ($errors->has('quantity_available') ? ' is-invalid' : ''), 'placeholder' => 'Quantity Available']) }}
            {!! $errors->first('quantity_available', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>