@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card-dark">
    <div class="card-header">
        <h1 class="text-center">Editar etiqueta</h1>
    </div>
    <div class="card-body bg-dark">
        {!! Form::model($editoriale, ['route'=>['admin.editoriales.update', $editoriale], 'method'=>'put']) !!}
            @include('admin.editoriales.partials.form')
            {!! Form::submit('Actualizar Editoriales', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{route('admin.editoriales.index')}}">Volver</a>
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