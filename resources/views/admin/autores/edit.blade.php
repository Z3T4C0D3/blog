@extends('adminlte::page')

@section('title', 'BiblioTec')


@section('content')
    @if (session('alertEdit'))
        <div class="alert alert-success">
            <strong>{{session('alertEdit')}}</strong>
        </div>
    @endif
    <div class="card-dark">
        <div class="card-header">
            <h1 class="text-center">Editar autor</h1>
        </div>
        <div class="card-body bg-dark">
            {!! Form::model($autore, ['route'=>['admin.autores.update', $autore], 'method'=>'put']) !!}
            @include('admin.autores.partials.form')
            {!! Form::submit('Actualizar Autor', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{route('admin.autores.index')}}">Volver</a>
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
                $('#nombre').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slugNombre',
                space: '-'
            });
        });
    </script>
@stop