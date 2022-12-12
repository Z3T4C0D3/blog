@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <p></p>
@stop

@section('content')
    @if (session('alertCreated'))
    <div class="text-center">
            <x-adminlte-alert theme="success" title="El libro se agrego con éxito">
            {{--  <h3 class="fw-bold">{{session('alertCreated')}}</h3 class="fw-bold"> --}}
            </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertDelete'))
    <div class="text-center">
        <x-adminlte-alert class="bg-purple" icon="fa fa-lg fa-thumbs-up" title="El libro se elimino con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertUpdate'))
    <div class="text-center text-lg">
        <x-adminlte-alert theme="info" title="El libro se modifico con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    {{-- Componente LiveWire --}}
    @livewire('admin.libros-index') 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop