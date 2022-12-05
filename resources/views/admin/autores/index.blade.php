@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1 class="text-center"></h1>
@stop

@section('content')
    @if (session('alertCreated'))
        <div class="text-center">
                <x-adminlte-alert theme="success" title="El autor se agrego con éxito">
                   {{--  <h3 class="fw-bold">{{session('alertCreated')}}</h3 class="fw-bold"> --}}
                </x-adminlte-alert>
        </div>
    @endif
    @if (session('alertDelete'))
        <div class="text-center">
            <x-adminlte-alert class="bg-purple" icon="fa fa-lg fa-thumbs-up" title="El autor se elimino con éxito">
            </x-adminlte-alert>
        </div>
    @endif
    @if (session('alertEdit'))
        <div class="text-center text-lg">
            <x-adminlte-alert theme="info" title="El autor se modifico con éxito">
            </x-adminlte-alert>
        </div>
    @endif
    <div class="card-dark">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.autores.create')}}">Agregar Autor</a>
            <h1 class="text-center">Lista de Autores</h1>
        </div>
        <div class="card-body bg-dark">
            <table class="table table-striped table-dark">
                <thead>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>
                    @foreach($autores as $autor)
                        <tr>
                            <td>{{$autor->nombre}}</td>
                            <td width="10px">
                                <a 
                                class="btn btn-primary btn-sm"
                                href="{{route('admin.autores.edit', $autor)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.autores.destroy', $autor)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button 
                                        class="btn btn-danger btn-sm"
                                        type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop