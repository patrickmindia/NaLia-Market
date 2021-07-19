<div
    class="w-full bg-white border-b shadow-sm py-4"
        x-data="scrollToReveal()"
        x-ref="navbar"
        x-on:scroll.window="scroll()"
        x-bind:class="{
                        'sticky top-0': sticky,
                        'relative': !sticky
                        }">

    <div class="flex flex-row items-center justify-between mx-auto container">

        <div class="">Logo</div>

        <div class="">

            <div class="">

                <ul class="flex flex-row items-center justify-between gap-4 text-base font-normal uppercase">

                    <li>

                        <x-jet-nav-link href="{{ url('/') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Accueil') }}
                        </x-jet-nav-link>

                    </li>
                    <li>

                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Produit') }}
                        </x-jet-nav-link>

                    </li>
                    <li>

                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Catégories') }}
                    </x-jet-nav-link>

                    </li>
                    <li class="relative" x-data="{ open: false }">
                        <span class="cursor-pointer" @click="open = true">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>94 user</title><path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/><path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/></svg>

                        </span>

                        <div class="z-50 absolute w-48 right-0 top-8 bg-blue-200 rounded-md p-1 text-gray-700 shadow-lg"
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            style="display: none;"
                            @click.away="open = false">

                            @if (Route::has('login'))
                                <div class="flex flex-col py-3">
                                    @auth
                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Tableau de bord') }}
                                        </x-jet-dropdown-link>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Déconnexion') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    @else
                                        <x-jet-dropdown-link href="{{ route('login') }}">
                                            {{ __('Se connecter') }}
                                        </x-jet-dropdown-link>

                                        @if (Route::has('register'))

                                            <x-jet-dropdown-link href="{{ route('register') }}">
                                                {{ __('Créer compte') }}
                                            </x-jet-dropdown-link>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                        </div>

                    </li>

                    <li class="relative">

                        @if (Cart::count() > 0)

                        <a href="{{ route('cart.show') }}" class="block">
                            <div class="absolute left-5 bottom-3 w-5 h-5 mx-px bg-indigo-500 items-center text-gray-50 text-center text-sm rounded-full">
                                {{ Cart::count() }}
                            </div>
                            <span>
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>103 shopping cart</title><path d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"/><circle cx="7" cy="22" r="2"/><circle cx="17" cy="22" r="2"/></svg>

                            </span>
                        </a>

                        @else

                        <span class="block">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>103 shopping cart</title><path d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"/><circle cx="7" cy="22" r="2"/><circle cx="17" cy="22" r="2"/></svg>

                        </span>

                        @endif



                    </li>

                    <li class="relative">

                        <button href="block">

                            <span>
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>17 search</title><path d="M23.707,22.293l-5.969-5.969a10.016,10.016,0,1,0-1.414,1.414l5.969,5.969a1,1,0,0,0,1.414-1.414ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z"/></svg>

                            </span>
                        </button>

                    </li>

                </ul>

            </div>

        </div>

    </div>

<div>
