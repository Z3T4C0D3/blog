<x-app-layout>
    <div>
        <div class="container
            mx-auto
            py-8
        bg-[#688883]">
            <div
                class="grid
                grid-cols-1
                md:grid-cols-2
                lg:grid-cols-3
                gap-6">

                @foreach ($libros as $libro)
                    <article
                        class="w-full h-80
                    bg-cover
                    bg-center
                    rounded-lg
                    border border-black
                @if ($loop->first) 
                md:col-span-2 
                @endif
                            //Storage::url($libro->image->url)
                            //
                        "style="background-image: url(
                            @if($libro->image){{ $libro->image->url }} 
                            @else https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg 
                            @endif)">

                        <div
                            class="w-full 
                            text-center
                            h-full
                            px-8
                            flex flex-col
                            justify-center">
                            <div>
                                @foreach ($libro->tags as $tag)
                                    <a href="{{ route('libros.tag', $tag) }}"
                                       class="inline-block
                                        px_3
                                        h-6
                                    text-white
                                    rounded-lg
                                    px-3 py-0.5
                                    text-sm
                                    mb-2
                                    border border-black
                                    button
                                    transition ease-in-out delay-50 bg-rose-600 hover:-translate-y-1 hover:scale-110 hover:bg-pink-900 duration-300
                                    ">
                                        {{ $tag->describeTag }}
                                    </a>
                                @endforeach
                            </div>
                            <div>
                                @foreach ($libro->autores as $autor)
                                    <a href="{{ route('libros.autor', $autor) }}"
                                       class="inline-block
                                    px_3
                                    h-6
                                    text-white
                                    rounded-lg
                                    px-3 py-0.5
                                    text-sm
                                    mb-4
                                    border border-black
                                    button
                                    transition ease-in-out delay-50 bg-gray-600 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-600 duration-300">
                                        {{ $autor->nombre }}
                                    </a>
                                @endforeach
                            </div>
                            <h1
                                class="text-4xl

                                border-double border-4 border-black
                                bg-opacity-50
                                text-black
                                leading-8
                                font-bold
                                rounded-xl
                                px-3 py-3
                                button
                                transition ease-in-out delay-50 bg-[#efe9d1] hover:-translate-y-1 hover:scale-x-100 hover:bg-[#e7ddc4] duration-300
                                ">
                                <a href="{{ route('libros.show', $libro) }}">
                                    {{ $libro->titulo }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $libros->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
