
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

    <div
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="z-30 fixed inline min-h-full top-0 left-0 min-w-full p-8 justify-center items-center pin overflow-hidden xs:rounded-md bg-gray-600 bg-opacity-40 flex">

        <div
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"

            class="z-50 shadow-md max-w-screen-lg absolute align-top m-auto justify-end md:justify-center p-6 bg-white md:rounded-md w-full md:h-auto md:shadow flex flex-col">
            <p class="p-2 text-fuschia-700 text-lg font-semibold leadind-tight mb-2 text-center leading-tight">
                {{ $title }}
            </p>

            <p class="text-black text-xs leadind-tight mb-4 text-center leading-tight">
                {{ $content }}
            </p>


        </div>
        <span class="group absolute top-4 right-4 p-1 bg-indigo-50 group-hover:text-white hover:bg-indigo-400 rounded-full cursor-pointer" x-on:click=" open = false">
            <svg class="fill-current w-8 h-8 text-gray-700 group-hover:text-white" id="Filled" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Fermer</title><path d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"/></svg>
        </span>
  </div>
