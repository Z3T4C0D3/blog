<nav class="bg-[#191e32]" x-data="{ open: false }">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <button type="button" x-on:click="open=true"
                        class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Heroicon name: outline/bars-3

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
            Icon when menu is open.

            Heroicon name: outline/x-mark

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <!-- LOGOTIPO-->
                <a href="/" class="flex items-center flex-shrink-0">
                    <img class="w-auto h-12 sm:h-10" src="{{ asset('img/template/biblioteca.png') }}" alt="">
                </a>
                <!-- MENU-->
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <!--<a href="#" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md" aria-current="page">Dashboard</a>-->
                        <!-- Dropdown Menu Clasificaciones -->
                        <div class="relative" x-data="{ isOpen: false }">
                            <a @click="isOpen = !isOpen" @keydown.escape="isOpen = false" class="flex items-center
                            px-3
                            py-3
                            bg-[#688883]
                            text-white
                            font-bold
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-[#ade2da] hover:shadow-lg
                            hover:text-black
                            focus:bg-[#688883] focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-[#435653] active:shadow-lg active:text-white
                            transition
                            duration-150
                            ease-in-out
                            whitespace-nowrap">
                                <Span>Clasificaciones</Span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                                     class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                                    </path>
                                </svg>
                            </a>
                            <ul x-show="isOpen" @click.away="isOpen = false"
                                class="absolute font-bold bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20">
                                <li class="border-b border-gray-400">
                                    @foreach ($clasificaciones as $clasificacion)
                                        <a href="{{ route('libros.clasificaciones', $clasificacion) }}"
                                           class="flex items-center px-3 py-3 hover:bg-[#2c3458] hover:text-white">

                                            <span class="ml-2">{{ $clasificacion->describeClasificacion }}</span>
                                        </a>
                                    @endforeach
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Final Dropdown Clasificaciones -->
                </div>
            </div>
            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- bOTON NOTIFICACION-->
                    <button type="button"
                            class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3" x-data="{ open: false }">
                        <div>
                            <button type="button" x-on:click="open = true"
                                    class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                     alt="">
                            </button>
                        </div>

                        <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
                        <div x-show="open" x-on:click.away="open = false"
                             class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                               role="menuitem" tabindex="-1" id="user-menu-item-0">
                                Tu Perfil</a>
                            @can('admin.home')
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">
                                Dashboard</a>
                            @endcan
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                   class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                   id="user-menu-item-2">
                                    Cerrar sesi??n</a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}"
                       class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                        Login</a>
                    <a href="{{ route('register') }}"
                       class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                        Register</a>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile menu-->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <!-- <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md" aria-current="page">Dashboard</a> -->
            <!-- Dropdown Menu Clasificaciones -->
            <div class="relative" x-data="{ isOpen: false }">
                <a @click="isOpen = !isOpen" @keydown.escape="isOpen = false" class="flex items-center
                            px-3
                            py-3
                            bg-blue-600
                            text-white
                              font-medium
                              text-xs
                              leading-tight
                              uppercase
                              rounded
                              shadow-md
                              hover:bg-blue-700 hover:shadow-lg
                              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                              active:bg-blue-800 active:shadow-lg active:text-white
                              transition
                              duration-150
                              ease-in-out
                              whitespace-nowrap">
                    <Span>Clasificaciones</Span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                         class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                              d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                        </path>
                    </svg>
                </a>
                <ul x-show="isOpen" @click.away="isOpen = false"
                    class="absolute font-bold bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20">
                    <li class="border-b border-gray-400">
                        @foreach ($clasificaciones as $clasificacion)
                            <a href="{{ route('libros.clasificaciones', $clasificacion) }}"
                               class="flex items-center px-3 py-3 hover:bg-blue-600">

                                <span class="ml-2">{{ $clasificacion->describeClasificacion }}</span>
                            </a>
                        @endforeach
                    </li>

                </ul>
                <!-- Final Dropdown Clasificaciones -->
            </div>
        </div>
</nav>
