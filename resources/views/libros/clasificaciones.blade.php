<x-app-layout>
    <div class="px-2 mx-auto max-w-5xl sm:px-6 lg:px-8 py-8 bg-[#83c5be]">
        <h1 
            class="
            uppercase 
            text-center 
            text-3xl 
            font-bold
            mb-4
            rounded-xl
            bg-gradient-to-r from-white to-gray">
            {{$clasificaciones->describeClasificacion}}
        </h1>
        @foreach ($libros as $libro)
        <article class="mb-8 bg-white shadow-2xl rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{$libro->image->url}}" alt="">
                <div class="px-6 py-4">
                    <h1 class="text-3xl         
                    border-double border-4 border-black
                    bg-opacity-50
                    text-black 
                    leading-8 
                    font-bold
                    rounded-xl
                    px-3 py-3
                    button
                    transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-x-100 hover:bg-teal-100 duration-300">
                        <a href="{{route('libros.show', $libro)}}">{{$libro->titulo}}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {{$libro->extract}}
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        @foreach($libro->tags as $tag)
                            <a class="inline-block 
                            mr-4
                            h-6 
                            text-white
                            rounded-full
                            px-3 py-0.5
                            text-sm
                            mb-2
                            border border-black
                            button
                            transition ease-in-out delay-50 bg-rose-600 hover:-translate-y-1 hover:scale-110 hover:bg-pink-900 duration-300" 
                            href="{{route('libros.tag', $tag)}}">{{$tag->describeTag}}</a>
                        @endforeach
                        @foreach($libro->autores as $autor)
                            <a class="inline-block 
                            h-6 
                            text-white
                            rounded-full
                            px-3 py-0.5
                            text-sm
                            mb-4
                            border border-black
                            button
                            transition ease-in-out delay-50 bg-gray-600 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-600 duration-300" 
                            href="{{route('libros.autor', $autor)}}">{{$autor->nombre}}</a>
                        @endforeach
                    </div>
                </div>
            </article>
        @endforeach
        <div class="mt-4">
            {{$libros->links()}}
        </div>
    </div>
    
</x-app-layout>