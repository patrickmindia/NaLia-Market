@extends('layouts.guest')

@section('content')
    <div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="w-2/4"></div>

        <div class="bg-local w-2/4" style="background-image: url(images/background/auth-bg-01.svg)">

            <div class="">
                <x-jet-authentication-card>

                    <x-slot name="title">
                        <div class="mb-8">

                            <h2 class="mb-3 uppercase text-2xl font-semibold">Se connecter</h2>
                            <p class="uppercase text-sm">Connectez-vous à votre compte pour accéder à tous les services offerts dans votre plateforme et aux informations vous concernant si vous êtes déjà enregistrés</p>
                        </div>

                    </x-slot>

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" value="{{ __('Votre email') }}" />
                            <x-jet-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Votre mot de passe') }}" />
                            <x-jet-input id="password" class="block w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-xs text-gray-600 uppercase">{{ __('Se souvenir') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline uppercase text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a>
                            @endif

                            <x-jet-button class="ml-4">
                                {{ __('S\'identifier') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>

            </div>
        </div>



    </div>
@endsection

