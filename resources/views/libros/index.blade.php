<x-app-layout>
    <div class="bg-[#e7ddc4]">

        <div class="text-center">
            <div class="bg-[#191e32] grid grid-cols-3 py-4 px-auto">
                <div class="bg-gradient-to-l col=start-2 shadow-xl col-span-1 rounded-lg from-[#77777715] to-white">
                    <h1 class="font-bold md:text-4xl sm:text-4xl lg:py-18 md:py-10 sm:py-9">BiblioTec</h1>
                </div>
            </div>
        </div>
        <div class="container
            mx-auto
            py-8
        bg-[#688883]">
            <div
                class="grid
                grid-cols-1
                md:grid-cols-2
                lg:grid-cols-2
                gap-6">

                @foreach ($libros as $libro)
                    <article
                        class="w-full h-80
                    bg-cover
                    bg-center
                    rounded-lg
                    border border-black
                @if ($loop->first)
                md:col-span-1
                @endif
                            //Storage::url($libro->image->url)
                            //
                        "style="background-image: url(
                            @if($libro->image)
                            {{ Storage::url($libro->image->url) }}
                            @else https://cdn.pixabay.com/photo/2016/01/20/11/54/book-wall-1151405_960_720.jpg
                            @endif)">

                        <div
                            class="w-full
                            rounded-xl
                            h-full
                            px-8
                            flex flex-col
                            justify-center shadow-lg shadow-black">
                            <h1
                                class="text-4xl
                                bg-opacity-50
                                text-black
                                leading-8
                                font-bold
                                px-3 py-3
                                button
                                transition hover:shadow-2xl ease-in-out delay-50 hover:-translate-y-1 hover:scale-x-100 hover:bg-gray-700 hover:text-white duration-300
                                ">
                                <a class="" href="{{ route('libros.show', $libro) }}">
                                    {{ $libro->titulo }}
                                </a>
                            </h1>
                            <div>
                                @foreach ($libro->tags as $tag)
                                    <a href="{{ route('libros.tag', $tag) }}"
                                       class="inline-block
                                        px_3
                                        h-6
                                    text-[#191e32]
                                    hover:text-[#343f69]
                                    font-bold
                                    rounded-lg
                                    px-3 py-0.5
                                    underline
                                    text-md
                                    mb-2
                                    button
                                    transition ease-in-out delay-5 hover:-translate-y-1 hover:scale-110 duration-300
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
