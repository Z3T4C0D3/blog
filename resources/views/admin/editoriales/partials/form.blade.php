<div class="form-group">
    {!! Form::label('describeEditorial', 'Nombre') !!}
    {!! Form::text('describeEditorial', null, 
        ['class' => 'form-control', 
        'placeholder' => 'Ingrese el nombre de la editorial']) !!}
    @error('describeEditorial')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slugEditorial', 'Slug') !!}
    {!! Form::text('slugEditorial', null, 
    ['class' => 'form-control', 
    'placeholder' => 'Ingrese slug de la editorial', 'readonly']) !!}
    @error('slugEditorial')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>