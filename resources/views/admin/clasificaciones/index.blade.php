@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1 class="text-center">Lista de Clasificaciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @if (session('alertDelete'))
        <div class="alert alert-danger">
            <strong>{{session('alertDelete')}}</strong>
        </div>
    @endif
    <div class="card-dark">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.clasificaciones.create')}}">Agregar Clasificacion</a>
        </div>
        <div class="card-body bg-dark">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($clasificaciones as $clasificacion)
                        <tr>
                            
                            <td>{{$clasificacion->describeClasificacion}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.clasificaciones.edit', $clasificacion) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.clasificaciones.destroy', $clasificacion)}}" method="POST">
                                @csrf 
                                @method('delete')
                                <button 
                                    type="submit" 
                                    class="btn btn-danger btn-sm
                                    "
                                    >Eliminar</button>  
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
@stop
