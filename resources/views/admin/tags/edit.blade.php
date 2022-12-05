@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
@if (session('alertEdit'))
<div class="alert alert-success">
    <strong>{{session('alertEdit')}}</strong>
</div>
@endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=>['admin.tags.update', $tag], 'method'=>'put']) !!}
                @include('admin.tags.partials.form')
                {!! Form::submit('Actualizar Etiqueta', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{route('admin.tags.index')}}">Volver</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
        <script>
            $(document).ready( function() {
                $('#describeTag').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slugTag',
                space: '-'
            });
        });
    </script>
@stop