@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Crear Nueva Clasificación</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.clasificaciones.store']) !!}
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
                
                {!! Form::submit('Crear Clasificacion', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>  
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $('#describeClasificacion').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slugClasificacion',
            space: '-'
        });
    });
    </script>
@stop

