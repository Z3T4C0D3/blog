<x-app-layout>
    <div class="container py-8 ">
        <h1 class="text-4xl font-bold text-gray-600" >{{$libro->titulo}}</h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Contenido principal -->
                <div class="lg:col-span-2">
                    <figure>
                        @if ($libro->image)
                    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($libro->image->url)}}" alt="">
                @else
                    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg" alt="">
                @endif
                    </figure>
                    <div class="text-lg text-gray-500 mb-6">
                        {!!$libro->extract!!}
                    </div>
                </div>

                <aside>
                    <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$libro->clasificaciones->describeClasificacion}}</h1>

                    <ul>
                        @foreach($similares as $similar)
                            <li class="mb-4">
                                <a class="flex" href="{{route('libros.show', $similar)}}">
                                    @if ($similar->image)
                                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                    @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg" alt="">
                                    @endif
                                    <span class="ml-2 text-gray-600">{{$similar->titulo}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            
    </div>
</x-app-layout>