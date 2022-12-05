@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Crear Nueva Clasificación</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.clasificaciones.store']) !!}
                @include('admin.clasificaciones.partials.form')
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

