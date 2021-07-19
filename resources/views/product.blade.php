@extends('layouts.app')


@section('content')

<div class="">

    {{-- @livewire('articles.article', ['article' => $article]) --}}

    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="w-5/6 bg-white rounded-md shadow-md overflow-hidden">

        <div class="" x-show="open">

            <div >

                <div class="px-6 py-3">

                    <div class="flex flex-row justify-between">

                        <div class="flex flex-row align-top gap-4">

                            <div class="">

                                <p href="#" class="text-4xl text-blue-600 font-semibold">CDF {{ $article -> price }}</p>
                                <h2 class="uppercase text-3xl text-orange-600">
                                    {{ $article -> name }}
                                </h2>

                            </div>

                            <span class="flex flex-row text-white text-sm gap-1">
                                <a href="#" class="text-xl text-fuchsia-800 font-semibold">{{ $article -> manufactor }}</a>
                            </span>

                        </div>


                        <span class="flex flex-row text-white text-sm gap-1">
                            <a href="#" class="items-center leading-none h-6 px-2 py-1 bg-indigo-400 text-gray-100 shadow-sm rounded-full hover:bg-blue-600 hover:text-white">#products</a> <a href="#" class="items-center leading-none h-6 px-2 py-1 bg-indigo-400 text-gray-100 shadow-sm rounded-full hover:bg-blue-600 hover:text-white">#vetements</a>
                        </span>

                    </div>

                </div>

                <div class="">

                    <div class="flex flex-col px-6 py-3 ">

                        <div class="flex flex-row gap-8">

                            <div class="w-7/12 rounded overflow-hidden">

                                <img class=" h-72 w-full rounded" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />

                                <div class="mt-3">Les autres images de l'article</div>

                            </div>

                            <div class="w-5/12 flex flex-col">

                                <div class="">
                                    <h5 class="uppercase text-xl font-semibold">Description de l'article</h5>

                                    <p class="text-sm leading-snug mt-2">{{ $article ['description'] }}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="mt-3 flex flex-row gap-8 bg-gray-50 px-6 py-2">

                        <div class="w-4/12">

                            <div class="py-1 justify-self-end mt-3">


                                <form method="POST" action="{{ route('cart.store') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $article->id }}">
                                    <input type="hidden" name="name" value="{{ $article->name }}">
                                    <input type="hidden" name="price" value="{{ $article->price }}">

                                    <button class="mt-4 group flex flex-row bg-fuchsia-300 rounded-md hover:bg-indigo-800 items-center px-4 py-2 gap-2">
                                        <span class="">
                                            <svg class="fill-current text-gray-800 h-7 w-7 group-hover:text-gray-50 group-hover:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>104 add to shopping cart</title><circle cx="7" cy="22" r="2"/><circle cx="17" cy="22" r="2"/><path d="M23,3H21V1a1,1,0,0,0-2,0V3H17a1,1,0,0,0,0,2h2V7a1,1,0,0,0,2,0V5h2a1,1,0,0,0,0-2Z"/><path d="M21.771,9.726a.994.994,0,0,0-1.162.806A3,3,0,0,1,17.657,13H5.418l-.94-8H13a1,1,0,0,0,0-2H4.242L4.2,2.648A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.829-2H17.657a5,5,0,0,0,4.921-4.112A1,1,0,0,0,21.771,9.726Z"/></svg>

                                        </span>
                                        <p class="uppercase text-xs text-gray-800 group-hover:text-gray-50 font-semibold">Ajouter au panier</p>
                                    </button>

                                </form>


                            </div>

                        </div>

                        <div class="w-8/12">
                            <div class="py-1 flex flex-col">

                                <label class="uppercase text-sm" for="size">Taille</label>

                                <select  class="w-40 rounded-md px-3 py-1 border-none bg-gray-300" name="size" id="size">

                                    <option value="1">40</option>
                                    <option value="2">41</option>
                                    <option value="3">42</option>
                                    <option value="4">43</option>
                                    <option value="5">44</option>
                                    <option value="6">45</option>

                                </select>

                            </div>

                            <div class="py-2 flex flex-col">

                                <label class="uppercase text-sm" for="qte">Quantité</label>

                                <div class="flex flex-row">

                                    <button class="inline-flex items-center px-3 rounded-l-md border-r-0 border-gray-700 bg-indigo-300 text-gray-500 hover:bg-indigo-500 hover:text-gray-50 text-xl">-</button>

                                    <input class="w-20 px-3 py-1 border-none bg-gray-300 focus:bg-gray-50 focus:border-gray-50 focus:ring-0" type="text" value="1" id="qte">

                                    <button class="inline-flex items-center px-3 rounded-r-md border-l-0 border-gray-700 bg-indigo-300 text-gray-500 hover:bg-indigo-500 hover:text-gray-50 text-xl">+</button>

                                </div>


                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">

        Ici nos commentaires sur l'article

    </div>

    <div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">

        Ici les articles simmilaires

    </div>

</div>


@endsection







