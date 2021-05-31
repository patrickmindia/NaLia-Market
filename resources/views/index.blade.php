@extends('layouts.app')

    
@section('content')
    <div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center sm:pt-0">
        
        <div class="">
        

            <div>
                            
                <div>

                    <!-- component -->
                      <main class="grid min-h-screen">
                      <div>
                        <div class="p-3 mb-3 bg-gray-200 text-gray-700 font-medium flex flex-row items-center justify-between">
                          <p class="text-3xl">Produits les plus récents</p> 
                          <span>
                            <a class="flex flex-row items-center justify-between" href="#">
                              <p >Voir tout</p>
                              <span>+</span>
                            </a>
                            
                          </span>
                        </div>
                        <section class="grid grid-cols-1 sm:grid-cols-4 gap-3 px-4">
                          <!-- CARD 1 -->
                            <div class="relative rounded-sm shadow-lg cursor-pointer overflow-hidden">
                                <img class="w-full md:w-72 h-80 block" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />
                                <span class="absolute top-0 flex flex-row text-white text-xs gap-1 p-2">
                                  <a href="#" class="p-1 text-orange-100 shadow-sm hover:opacity-100  hover:bg-orange-200 hover:text-red-600">#products</a> <a href="#" class="p-1 hover:bg-orange-200 hover:text-orange-600">#vetements</a>
                                </span>
                                <div class="block absolute top-60 pb-2 bg-gray-200 bg-opacity-80 transform">
                                  <div class="relative max-h-full top-0  flex flex-col transition justify-evenly">
                                      
                                      <h6 class="text-2xl text-gray-50 font-medium bg-orange-400 px-3 py-2">CDF 450,00</h6>
                                      <div class="px-3 mt-1">
                                        <p class="uppercase font-semibold">Lorem ipsum dolor sit</p>
                                        <p class="text-xs leading-none mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque velit nulla non nam qui quas vel architecto ab. Dicta, illo.</p>
                                      </div>
                                          
                                    
                                  </div>
                                  <div class="flex flex-row px-3 mt-2 items-center justify-between">

                                      
                                      <div class="flex flex-row items-center gap-1">
                                          <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">

                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                          </button>
                                      </div>

                                      <a href="" class="group rounded-full p-1 bg-gray-300 text-white hover:bg-gray-500 transform translate-y-3 hover:translate-y-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-500 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                      
                                      </a>
                                  </div>
                              </div>
                                  
                                
                            </div>
                          <!-- END OF CARD 1 -->

                          <!-- CARD 2 -->

                          <div class="relative rounded-sm shadow-lg cursor-pointer overflow-hidden">
                                <img class="w-full md:w-72 h-80 block" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />
                                <div class="block absolute bottom-0 pb-2 bg-gray-200 bg-opacity-80 transform translate-y-64 hover:-translate-y-64">
                                  <div class="relative max-h-full top-0  flex flex-col transition justify-evenly">
                                      
                                      <h6 class="text-2xl text-gray-50 font-bold bg-orange-400 px-3 py-2">CDF 450,00</h6>
                                      <div class="px-3 mt-1">
                                        <p class="uppercase font-semibold">Lorem ipsum dolor sit</p>
                                        <p class="text-xs leading-none mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque velit nulla non nam qui quas vel architecto ab. Dicta, illo.</p>
                                      </div>
                                          
                                    
                                  </div>
                                  <div class="flex flex-row px-3 mt-2 items-center justify-between">

                                      
                                      <div class="flex flex-row items-center gap-1">
                                          <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">

                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                          </button>
                                      </div>

                                      <a href="" class="group rounded-full p-1 bg-gray-300 text-white hover:bg-gray-500 transform translate-y-3 hover:translate-y-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-gray-500 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                      
                                      </a>
                                  </div>
                              </div>
                                  
                                
                            </div>
                         
                          <!-- END OF CARD 2 -->

                          <!-- CARD 3 -->

                          <div class="relative rounded-sm shadow-lg cursor-pointer overflow-hidden">
                                <img class="w-full md:w-72 h-80 block" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />
                                <div class="block absolute bottom-0 pb-2 bg-gray-200 bg-opacity-80 transform translate-y-64 hover:-translate-y-64">
                                  <div class="relative max-h-full top-0  flex flex-col transition justify-evenly">
                                      
                                      <h6 class="text-2xl text-gray-50 font-bold bg-orange-400 px-3 py-2">CDF 450,00</h6>
                                      <div class="px-3 mt-1">
                                        <p class="uppercase font-semibold">Lorem ipsum dolor sit</p>
                                        <p class="text-xs leading-none mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque velit nulla non nam qui quas vel architecto ab. Dicta, illo.</p>
                                      </div>
                                          
                                    
                                  </div>
                                  <div class="flex flex-row px-3 mt-2 items-center justify-between">

                                      
                                      <div class="flex flex-row items-center gap-1">
                                          <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">

                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                          </button>
                                      </div>

                                      <a href="" class="group rounded-full p-1 bg-gray-300 text-white hover:bg-gray-500 transform translate-y-3 hover:translate-y-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-500 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                      
                                      </a>
                                  </div>
                              </div>
                                  
                                
                            </div>
                          
                          <!-- END OF CARD 3 -->


                          <!-- CARD 4 -->

                          <div class="relative rounded-sm shadow-lg cursor-pointer overflow-hidden">
                                <img class="w-full md:w-72 h-80 block" src="https://upload.wikimedia.org/wikipedia/en/f/f1/Tycho_-_Epoch.jpg" alt="" />
                                <div class="block absolute bottom-0 pb-2 bg-gray-200 bg-opacity-80 transform translate-y-64 hover:-translate-y-64">
                                  <div class="relative max-h-full top-0  flex flex-col transition justify-evenly">
                                      
                                      <h6 class="text-2xl text-gray-50 font-bold bg-orange-400 px-3 py-2">CDF 450,00</h6>
                                      <div class="px-3 mt-1">
                                        <p class="uppercase font-semibold">Lorem ipsum dolor sit</p>
                                        <p class="text-xs leading-none mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque velit nulla non nam qui quas vel architecto ab. Dicta, illo.</p>
                                      </div>
                                          
                                    
                                  </div>
                                  <div class="flex flex-row px-3 mt-2 items-center justify-between">

                                      
                                      <div class="flex flex-row items-center gap-1">
                                          <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">

                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                              </svg>
                                            </button>

                                            <button class="group rounded-full p-1 hover:bg-blue-300 text-white transform translate-y-3 hover:translate-y-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-current text-gray-700 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                          </button>
                                      </div>

                                      <a href="" class="group rounded-full p-1 bg-gray-300 text-white hover:bg-gray-500 transform translate-y-3 hover:translate-y-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-current text-gray-500 group-hover:text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                      
                                      </a>
                                  </div>
                              </div>
                                  
                                
                            </div>
                          
                          <!-- END OF CARD 4 -->
                        </section>
                      </div>
                    </main>
                    
                                
               
              </div>
            
           
     
          
          </div>
        
        </div>

    </div>
@endsection
    


