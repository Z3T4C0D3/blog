@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Agregar Editorial</h1>
@stop

@section('content')
    <div class="card-dark">
        <div class="card-header">
            <h1 class="text-center">Agregar nueva editorial</h1>
        </div>
        <div class="card-body bg-dark">
            {!! Form::open(['route'=>'admin.editoriales.store']) !!}
                @include('admin.editoriales.partials.form')

                {!! Form::submit('Crear Editorial', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $('#describeEditorial').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slugEditorial',
            space: '-'
        });
    });
    </script>
@stop