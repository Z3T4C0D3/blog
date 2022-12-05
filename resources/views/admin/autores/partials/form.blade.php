
<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del autor']) !!}

    @error('nombre')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slugNombre', 'Slug') !!}
    {!! Form::text('slugNombre', null, ['class' => 'form-control', 'placeholder'=> 'Ingrese el slug del autor', 'readonly' ]) !!}
    
    @error('slugNombre')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>