@extends('layouts.guest')


@section('content')

<div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="bg-local bg-cover bg-center w-2/4" style="background-image: url(images/background/auth-bg-03.svg)">

        <x-jet-authentication-card>
            <x-slot name="title">
                    <div class="mb-8">

                        <h2 class="mb-3 uppercase text-2xl font-semibold">Créer son compte</h2>
                        <p class="uppercase text-sm">Créer votre propre compte pour utiliser les services offerts d'achats d'habits stylés et conserver les informations sur toutes vos activités sur notre plateforme</p>
                    </div>

            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Nom') }}" />
                    <x-jet-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Adresse electronique') }}" />
                    <x-jet-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                    <x-jet-input id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmer mot de passe') }}" />
                    <x-jet-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline uppercase text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Déjà enregisté?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('S\'enregistrer') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

    </div>


    <div class="w-2/4"></div>

</div>


@endsection


