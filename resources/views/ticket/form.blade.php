<div class="box box-info padding-1">
    <div class="form-group col-md-6">
        <livewire:customer.create :key="$refreshComponent" />
        <button type="button" class="btn btn-success" id="registerCustomer">Guardar Cliente</button>
    </div>

    <div class="box-body">
        <!-- Botón independiente para guardar cliente -->
       
        
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Seleccionar Cliente</label>
            <select class="form-select" id="inputGroupSelect01" name="customer_id">
                <option selected>Seleccionar cliente...</option>
                @foreach($clientes as $id => $cliente)
                    <option value="{{ $id }}">{{ $cliente }}</option>
                @endforeach
            </select>
        </div>
        
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
        <!-- Botón adicional para guardar cliente -->
    </div>
</div>


