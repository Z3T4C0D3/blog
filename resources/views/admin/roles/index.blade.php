@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    @if (session('alertCreated'))
    <div class="text-center">
            <x-adminlte-alert theme="success" title="EL rol se agrego con éxito">
            {{--  <h3 class="fw-bold">{{session('alertCreated')}}</h3 class="fw-bold"> --}}
            </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertDelete'))
    <div class="text-center">
        <x-adminlte-alert class="bg-purple" icon="fa fa-lg fa-thumbs-up" title="El rol se elimino con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    @if (session('alertUpdate'))
    <div class="text-center text-lg">
        <x-adminlte-alert theme="info" title="El rol se modifico con éxito">
        </x-adminlte-alert>
    </div>
    @endif
    <div class="card text-white bg-dark">
        <div class="card-header">
            <a class="btn btn-success float-right " href="{{route('admin.roles.create')}}">Agregar Rol</a>
            <h1>Lista de Roles</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10px">
                            <a class="btn btn-sm btn-primary" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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