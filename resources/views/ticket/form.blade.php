<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row">
            {{ Form::label('Dni:') }}
            <div class="col-md-2 d-flex align-items-center">
                <input class="form-control mr-2" type="text" value="Agregar nuevo cliente" disabled readonly style="width: 60%;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">
                    <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>

        <div wire:click.self class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog 
            modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registrar Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <livewire:customer.create/>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="saveButton">Registrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resto del formulario -->
        <div class="row mt-3">

            <div class="col-sm-0"></div>
            {{ Form::label('Nombres:') }}
            <div class="col-sm-2">
                <input type="text" class="form-control" id="nombre" disabled>
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row mt-3"> <!-- Añadí un margen superior para separar visualmente los grupos -->
            <div class="col-sm-0"></div>
            {{ Form::label('Apellido Materno:') }}
            <div class="col-sm-2">
                <input type="text" class="form-control" id="apellidoMaterno" disabled>
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row mt-3"> <!-- Añadí un margen superior para separar visualmente los grupos -->
            <div class="col-sm-0"></div>
            {{ Form::label('Apellido Paterno:') }}
            <div class="col-sm-2">
                <input type="text" class="form-control" id="apellidoPaterno" disabled>
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $ticket->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
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