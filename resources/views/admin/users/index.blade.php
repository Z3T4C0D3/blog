@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    @if (session('alertUpdate'))
        <div class="text-center text-lg">
            <x-adminlte-alert theme="info" title="El rol del usuario se modifico con éxito">
            </x-adminlte-alert>
        </div>
    @endif
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop