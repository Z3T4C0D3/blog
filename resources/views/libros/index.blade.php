<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($libros as $libro)
                <article class="w-full h-80 
                bg-cover 
                bg-center 
                @if($loop->first) 
                     md:col-span-2
                @endif
                " 
                style="background-image: url({{$libro->image->url}})">
                    
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <div>
                                @foreach($libro->tags as $tag)
                                    <a href="" 
                                    class="inline-block 
                                    px_3 
                                    h-6 
                                    bg-gray-600 
                                    text-white
                                    rounded-full">
                                        {{$tag->describeTag}}
                                    </a>
                                @endforeach
                            </div>
                            <h1 class="text-4xl text-black leading-8 font-bold">
                                <a href="">
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
</x-app-layout>