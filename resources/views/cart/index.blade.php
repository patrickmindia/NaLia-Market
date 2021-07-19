@extends('layouts.app')


@section('content')

    <div class="">

    {{-- @livewire('articles.article', ['article' => $article]) --}}

    {{-- Because she competes with no one, no one can compete with her. --}}

        <div class="w-5/6 bg-white rounded-md shadow-md overflow-hidden">

            <div class="">

                <div >

                    <div class="px-6 py-3">

                        <div class="flex flex-row gap-2">

                            <div class="w-4/6 bg-white px-4 py-3 relative">
                                @if (Cart::count() > 0)
                                    <div class="flex flex-row justify-between py-2">

                                        <h1 class="font-semibold text-lg">Panier d'achat</h1>

                                        <h2 class="">{{ Cart::count() }} article(s)</h2>

                                    </div>

                                    <div class="flex mt-10 -mx-4 pl-2 py-3 bg-fuchsia-200 rounded-t-md">

                                        <h3 class="font-semibold text-gray-800 text-sm uppercase w-2/5">Article</h3>

                                        <h3 class="font-semibold text-gray-800 text-sm uppercase w-1/5 text-center">Quantité</h3>

                                        <h3 class="font-semibold text-gray-800 text-sm uppercase w-1/5 text-center">Prix</h3>

                                        <h3 class="font-semibold text-gray-800 text-sm uppercase w-1/5 text-center">Total</h3>

                                    </div>


                                    @foreach (Cart::content() as $article)

                                        <div class="flex items-center hover:bg-gray-100 -mx-4 px-6 py-1">

                                            <div class="flex w-2/5"> <!-- product -->

                                                <div class="w-20">

                                                    <img class=" h-16" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">

                                                </div>

                                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                                    <span class="font-sm font-semi-bold text-sm uppercase">{{ $article->model->name }}</span>
                                                    <span class="text-indigo-500 text-xs">{{ $article->model->manufactor }}</span>

                                                    <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-sm">
                                                        <svg class="fill-current text-gray-800 h-5 w-5 hover:text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Supprimer</title><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"/><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"/><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="flex justify-center w-1/5">

                                                <button class="text-center w-1/5 font-semibold text-sm"> - </button>

                                                <input class="mx-2 border text-center text-xs w-8" type="text" value="1">

                                                <button class="text-center w-1/5 font-semibold text-sm"> + </button>

                                            </div>

                                            <span class="text-center w-1/5 font-semibold text-sm">{{ $article->model->price }}</span>

                                            <span class="text-center w-1/5 font-semibold text-sm">{{ $article->model->price }}</span>

                                        </div>

                                    @endforeach


                                @else

                                    <div class="text-2xl content-between">
                                        &#x1F61E;  Aucun article dans votre panier
                                    </div>

                                @endif

                                <a href="#" class="absolute bottom-0 flex text-indigo-600 text-sm mt-8 items-center">
                                    <svg class="fill-current mr-2 text-indigo-600 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>155 arrow left</title><path d="M.876,14.088l3.879,3.879a1,1,0,0,0,1.414,0h0a1,1,0,0,0,0-1.414L2.614,13,23,13a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1L2.553,11,6.169,7.381a1,1,0,0,0,0-1.414h0a1,1,0,0,0-1.414,0L.875,9.846A3.007,3.007,0,0,0,.876,14.088Z"/></svg>

                                    Continuer votre shopping
                                </a>

                            </div>

                            <div id="summary" class="w-2/6 bg-blue-200 rounded-md px-4 py-3 shadow-md">

                                <h1 class="font-semibold text-lg py-2">Résumé commande</h1>

                                <div class="flex justify-between mt-10 mb-5">

                                    <span class="text-sm font-semibold uppercase">{{ Cart::count() }} article(s)</span>

                                    <span class="text-sm font-semibold">{{ Cart::subtotal() }} CDF</span>

                                </div>

                                <div>

                                    <label class="font-medium inline-block text-sm uppercase">Enlèvement</label>

                                    <select class="block p-2 text-gray-600 w-full text-sm rounded-md">
                                        <option>Standard shipping - $10.00</option>
                                    </select>

                                </div>

                                <div class="py-10">

                                  <label for="promo" class="font-semibold inline-block text-sm uppercase">Code Promo</label>
                                  <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full rounded-md">

                                </div>


                                <x-jet-button class="">Appliquer</x-jet-button>

                                <div class="border-t mt-4">
                                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                    <span>Coût Total</span>
                                    <span>$600</span>
                                </div>

                                <x-jet-button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Commander</x-jet-button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">

        Ici les articles similaires

    </div>

</div>


@endsection







