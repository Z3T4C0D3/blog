<x-app-layout>
<div class="px-2 mx-auto max-w-5xl sm:px-6 lg:px-8 py-8 bg-[#83c5be]">
        <h1 
            class="
            uppercase 
            text-center 
            text-3xl 
            font-bold
            mb-4">
            Autor: {{$autor->nombre}}
        </h1>
        @foreach ($libros as $libro)
        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{$libro->image->url}}" alt="">
                <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('libros.show', $libro)}}">{{$libro->titulo}}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {{$libro->extract}}
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        @foreach($libro->tags as $tag)
                            <a class="inline-block bg-rose-500 rounded-full px-3 py-1 text-sm text-white" 
                            href="{{route('libros.tag', $tag)}}">{{$tag->describeTag}}</a>
                        @endforeach
                        @foreach($libro->autores as $autor)
                            <a class="inline-block bg-gray-500 rounded-full px-3 py-1 text-sm text-white" 
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