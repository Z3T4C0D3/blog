@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    @if (session('alertCreated'))
    <div class="text-center">
            <x-adminlte-alert theme="success" title="La editorial se agrego con éxito">
            {{--  <h3 class="fw-bold">{{session('alertCreated')}}</h3 class="fw-bold"> --}}
            </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertDelete'))
    <div class="text-center">
        <x-adminlte-alert class="bg-purple" icon="fa fa-lg fa-thumbs-up" title="La editorial se elimino con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertEdit'))
    <div class="text-center text-lg">
        <x-adminlte-alert theme="info" title="La editorial se modifico con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success " href="{{route('admin.editoriales.create')}}">Agregar Etiqueta</a>
            <h1 class="text-center">Lista de Editoriales</h1>
        </div>
        <div class="card-body bg-dark">
            <table class="table table-dark table-striped">
                <thead>
                    <th class="text-lg">Editorial</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($editoriales as $editorial)
                        <tr>
                            <td>{{$editorial->describeEditorial}}</td>
                            <td width="10px">
                                <a 
                                    class="btn btn-primary btn-sm"
                                    href="{{route('admin.editoriales.edit', $editorial)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.editoriales.destroy', $editorial)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button 
                                        class="btn btn-danger btn-sm"
                                        type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
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