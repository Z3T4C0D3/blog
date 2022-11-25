@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Editar Clasificación</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($clasificacione,[
                'route' => ['admin.clasificaciones.update', $clasificacione], 
                'method' => 'put' ]) !!}
                <div class="form-group">
                    {!! Form::label('describeClasificacion', 'Nombre') !!}
                    {!! Form::text('describeClasificacion', 
                    null, 
                    ['class' => 'form-control', 
                    'placeholder' => 'Ingrese el nombre de la clasificación']) !!}
                
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
                
                {!! Form::submit('Actualizar Clasificacion', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{route('admin.clasificaciones.index')}}">Volver</a>
            {!! Form::close() !!}
        </div>
    </div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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