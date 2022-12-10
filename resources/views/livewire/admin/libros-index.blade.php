<div class="card-dark">
    <div class="card-header border-3 bg-gray border border-black rounded-lg">
        <a class="btn btn-success btn-lg float-right" href="{{route('admin.libros.create')}}">Agregar Libro</a>
        <h1 class="float-left">Lista de Libros</h1>
        <input 
            wire:model="search"
            class="form-control shadow-white" 
            placeholder="Ingrese el titulo del libro que desea buscar">
            @if ($libros->count())   
            <div class="card-body border mt-2 rounded-lg bg-dark">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <td>{{$libro->id}}</td>
                                <td>{{$libro->titulo}}</td>
                                <td class="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.libros.edit', $libro)}}">
                                Editar</a></td>
                                <td class="10px">
                                    <form action="{{route('admin.libros.destroy', $libro)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="card-footer bg-dark  mt-1 rounded-lg border border-black">
                <div class="float-right mt-4">
                    {{$libros->links()}}
                </div>
            </div>
        @else
            <div class="container mt-4 text-center">
                <div class="row">
                    <div class="col-span-1"></div>
                    <div class="col">
                        <x-adminlte-alert theme="info" 
                        title="No hay ningun libro con referencia a la palabra: {{$search}}">
                        </x-adminlte-alert>
                    </div>
                    <div class="col-span-1"></div>
                    
                </div>
                <h3></h3>
            </div>
        @endif
    </div>
    
    
</div>
