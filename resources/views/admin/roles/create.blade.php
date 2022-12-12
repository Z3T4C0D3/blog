@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
<h1></h1>
@stop

@section('content')
    <div class="card text-white bg-dark">
        <div class="card-header bg-gray">
            <h1>Crear Rol</h1>
        </div>
        <div class="card-body mt-2">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            @include('admin.roles.partials.form')
                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop