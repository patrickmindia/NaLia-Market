@extends('layouts.app')


@section('content')

<div class="">
    <div class="">

        <div class="container mx-auto px-6 py-16 bg-white rounded-md shadow-md">
            <div class="md:flex items-center">
                <div class="w-full md:w-1/2">
                    <div class="max-w-lg">
                        <h1 class="text-gray-800 dark:text-white text-5xl font-semibold md:text-3xl">Meilleur endroit pour choisir vous vetements et accéssoires personalisées</h1>
                        <p class="mt-2 text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                        <button class="mt-4 px-3 py-2 bg-indigo-600 text-white text-sm uppercase font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Shop Now</button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 md:mt-0 md:w-1/2">
                    <img class="max-w-2xl w-full h-full" src="../../../assets/svg/Catalogue-pana.svg" alt="">
                </div>
            </div>
        </div>


    </div>

    <div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">

        <div class="categories w-full mt-8">

            @livewire('index-categories')

        </div>

    </div>

    <div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">


        <div class="most-viewed mt-8 ">

            @livewire('articles.latest')

        </div>

        <div class="most-viewed mt-8 ">

            @livewire('articles.most-viewed')

        </div>

        <div class="most-commanded mt-8">

            @livewire('articles.most-commanded')

        </div>

        <div class="suggested-products mt-8">

            @livewire('articles.suggested')

        </div>


        <div class="other-products mt-8">

            @livewire('articles.others')

        </div>

    </div>
</div>




@endsection



