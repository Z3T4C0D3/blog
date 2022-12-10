@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <p></p>
@stop

@section('content')
    @livewire('admin.libros-index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop