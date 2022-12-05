
               <div class="form-group">
                    {!! Form::label('describeTag', 'Nombre') !!}
                    {!! Form::text('describeTag', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
                    @error('describeTag')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slugTag', 'Slug') !!}
                    {!! Form::text('slugTag', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de la etiqueta', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>