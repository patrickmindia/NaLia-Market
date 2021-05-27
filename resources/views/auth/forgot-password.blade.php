@extends('layouts.guest')

@section('content')

    <div class="w-2/4 bg-orange-400">
        <div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center sm:pt-0">

            <x-jet-authentication-card>
                <x-slot name="title">
                    <div class="mb-8">

                        <h2 class="mb-3 uppercase text-2xl font-semibold">Mot de passe oublié</h2>

                        <div class="mb-4 text-sm text-gray-600 uppercase">
                            {{ __('Mot de passe oublié? Aucun problème. Insérez tout simplement votre adresse electronique et nous vous enverons un lien de réinitialisation dans votre boite qui vous permettra d\'en choisir un nouveau.') }}
                        </div>
                    </div>
                </x-slot>

                

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Adresse electronique') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Envoi lien de réinitialisation') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
    </div>

    <div class="w-2/4"></div>
    

@endsection
