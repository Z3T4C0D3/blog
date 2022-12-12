<div>
    <div class="card text-white bg-dark rounded-lg border border-black">
        <div class="card-header border-3 bg-gray border border-black rounded-lg">
            <a class="btn btn-success btn-lg float-right" href="{{route('admin.users.index')}}">Agregar Usuario</a>
            <h1 class="float-left">Lista de Usuarios</h1>
            <input 
                wire:model="search"
                class="form-control shadow-white" 
                placeholder="Ingrese el titulo del usuario que desea buscar">
                @if ($users->count())   
                <div class="card-body border mt-2 rounded-lg bg-dark">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="card-footer bg-dark  mt-1 rounded-lg border border-black">
                    <div class="float-right mt-4">
                        {{$users->links()}}
                    </div>
                </div>
                @else
                <div class="container mt-4 text-center">
                    <div class="row">
                        <div class="col-span-1"></div>
                        <div class="col">
                            <x-adminlte-alert theme="info" 
                            title="No hay ningun usuario con referencia a la palabra: {{$search}}">
                            </x-adminlte-alert>
                        </div>
                        <div class="col-span-1"></div>
                        
                    </div>
                    <h3></h3>
                </div>
                @endif
    </div>
</div>
