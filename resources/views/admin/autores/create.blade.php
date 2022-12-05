@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content')
    <div class="card-dark">
        <div class="card-header">
            <h1 class="text-center">Agregar nuevo autor</h1>
        </div>
        <div class="card-body bg-dark ">
            {!! Form::open(['route' => 'admin.autores.store']) !!}
                @include('admin.autores.partials.form')
                {!! Form::submit('Agregar Autor', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>  
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