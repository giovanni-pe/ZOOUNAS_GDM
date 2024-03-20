<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $animal->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('species') }}
            {{ Form::text('species', $animal->species, ['class' => 'form-control' . ($errors->has('species') ? ' is-invalid' : ''), 'placeholder' => 'Species']) }}
            {!! $errors->first('species', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birth_date') }}
            {{ Form::Date('birth_date', $animal->birth_date, ['class' => 'form-control' . ($errors->has('birth_date') ? ' is-invalid' : ''), 'placeholder' => 'Birth Date']) }}
            {!! $errors->first('birth_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habitat_id') }}
            {{ Form::text('habitat_id', $animal->habitat_id, ['class' => 'form-control' . ($errors->has('habitat_id') ? ' is-invalid' : ''), 'placeholder' => 'Habitat Id']) }}
            {!! $errors->first('habitat_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Fotografia</label>
                <input type="file" name="foto" id='file'class="form-control">
            </div>
            <br>
            <center>
                <output id="list"></output>
            </center>
            <script>
                function archivo(evt) {
                    var files = evt.target.files;
                    //obtenemos la imagen del campo "file".
                    for (var i = 0, f; f = files[i]; i++) {
                        //solo admitimos imagenes.
                        if (!f.type.match('image.*')) {
                            continue;
                        }
                        var reader = new FileReader();
                        reader.onload = (function(theFile) {
                            return function(e) {
                                //insertamos la imagen
                                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e
                                    .target.result, '"width="90%" title="', escape(theFile.name), '"/>'
                                ].join('');
                            };
                        })(f);
                        reader.readAsDataURL(f);
                    }

                }
                document.getElementById('file').addEventListener('change', archivo, false);
            </script>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>