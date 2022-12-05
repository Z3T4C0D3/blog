@extends('adminlte::page')

@section('title', 'BiblioTec')

@section('content_header')
    <h1 class="text-center"></h1>
@stop

@section('content')
    @if (session('alertCreated'))
        <div class="alert alert-success">
            <strong>{{session('alertCreated')}}</strong>
        </div>
    @endif
    @if (session('alertDelete'))
        <div class="alert alert-danger">
            <strong>{{session('alertDelete')}}</strong>
        </div>
    @endif

   <div class="card-dark">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.tags.create')}}">Agregar Etiqueta</a>
            <h1 class="text-center">Lista de Etiquetas</h1>
        </div>
            <div class="card-body bg-dark">
                <table class="table table-dark table-striped">
                    <thead>
                        <th class="text-xl">Name</th>
                        <th colspan="2"></th>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->describeTag}}</td>
                                <td width="10px">
                                    <a 
                                        class="btn btn-primary btn-sm"
                                        href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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

