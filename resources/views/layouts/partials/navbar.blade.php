<div class="w-full bg-gray-200 border-b shadow-sm py-4">

    <div class="flex flex-row items-center justify-between mx-auto container">

        <div class="">Logo</div>

        <div class="">

            <div class="">

                <ul class="flex flex-row items-center justify-between gap-3 text-base font-normal uppercase">

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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                            
                        </span>

                        <div class="z-50 absolute w-48 right-0 top-8 bg-gray-400  text-gray-50 shadow-lg" 
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

                        <a href="block">
                            <div class="absolute left-5 bottom-3 w-6 h-6 mx-px bg-indigo-500 items-center text-gray-50 text-center text-sm rounded-full">

                                30
                                                                
                            </div>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                            </span>
                        </a>
                                                
                    </li>
                
                </ul>
            
            </div>

        </div> 

    </div>
    
<div>