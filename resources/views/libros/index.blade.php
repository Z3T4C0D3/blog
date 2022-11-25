<x-app-layout>
<div>
    <div class="container mx-auto py-8 bg-[#83c5be]">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($libros as $libro)
                <article class="w-full h-80 
                bg-cover 
                bg-center 
                rounded-lg
                @if($loop->first) 
                     md:col-span-2
                @endif
                //Storage::url($libro->image->url) 
                //
                "style="background-image: url({{$libro->image->url}})">
                    
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <div>
                                @foreach($libro->tags as $tag)
                                    <a href="{{route('libros.tag', $tag)}}" 
                                    class="inline-block 
                                    px_3 
                                    h-6 
                                    bg-rose-600 
                                    text-white
                                    rounded-full
                                    px-3 py-1
                                    text-sm
                                    mb-2">
                                        {{$tag->describeTag}}
                                    </a>
                                @endforeach
                            </div>
                            <div>
                                @foreach($libro->autores as $autor)
                                    <a href="{{route('libros.autor', $autor)}}" 
                                    class="inline-block 
                                    px_3 
                                    h-6 
                                    bg-gray-600 
                                    text-white
                                    rounded-full
                                    px-3 py-1
                                    text-sm
                                    mb-4">
                                        {{$autor->nombre}}
                                    </a>
                                @endforeach
                            </div>
                            <h1 class="text-4xl text-black leading-8 font-bold">
                                <a href="{{route('libros.show', $libro )}}">
                                    {{$libro->titulo}}
                                </a>
                            </h1>
                        </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$libros->links()}}
        </div>
        
    </div>
</div>
</x-app-layout>