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
                'method'=>'put' ]) !!}
                    @include('admin.clasificaciones.partials.form')
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