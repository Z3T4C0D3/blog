<x-app-layout>
    <div class="container py-8 ">
        <h1 class="text-4xl font-bold text-gray-600" >{{$libro->titulo}}</h1>
            <div class="text-lg text-gray-500 mb-6">
                {{$libro->extract}}
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Contenido principal -->
                <div class="lg:col-span-2">
                    <figure>
                        <img class="w-full h-80 object-cover object-center" src="{{$libro->image->url}}" alt="">
                    </figure>
                    <div class="text-base text-gray-500 mt-4">
                        {{$libro->body}}
                    </div>
                </div>

                <aside>
                    <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$libro->clasificaciones->describeClasificacion}}</h1>

                    <ul>
                        @foreach($similares as $similar)
                            <li class="mb-4">
                                <a class="flex" href="{{route('libros.show', $similar)}}">
                                    <img class="w-36 h-20 object-cover object-center" src="{{$similar->image->url}}" alt="">
                                    <span class="ml-2 text-gray-600">{{$similar->titulo}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            
    </div>
</x-app-layout>