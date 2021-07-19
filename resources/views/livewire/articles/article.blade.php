{{-- Because she competes with no one, no one can compete with her. --}}

<div class="w-5/6 px-6 py-3 bg-white rounded-md shadow-md">

    <div class="" x-show="open">

        <div >

            <div>

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

            <div>

                <div class="">

                    <div class="flex flex-row gap-8">

                        <div class="w-7/12 rounded overflow-hidden">

                            <img class=" h-72 w-full rounded" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />

                        </div>

                        <div class="w-5/12 flex flex-col">

                            <div class="">
                                <h5 class="uppercase text-xl font-semibold">Description de l'article</h5>

                                <p class="text-sm leading-snug mt-2">{{ Str::words($article ['description'], 50, ' (...)') }}</p>

                            </div>

                            <div class="py-2">
                                Size
                            </div>

                        </div>

                    </div>

                    <div class="py-2">

                        Traiter les commandes ici

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="w-5/6 mt-3 px-6 py-3 bg-white rounded-md shadow-md">



</div>

