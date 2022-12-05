
<div class="form-group">
    {!! Form::label('describeClasificacion', 'Nombre') !!}
    {!! Form::text('describeClasificacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la clasificación']) !!}

    @error('describeClasificacion')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slugClasificacion', 'Slug') !!}
    {!! Form::text('slugClasificacion', null, ['class' => 'form-control', 'placeholder', 'readonly' => 'Ingrese el slug de la clasificación']) !!}
    
    @error('slugClasificacion')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>