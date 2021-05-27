<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'NaLia Market') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        @notifyCss

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased bg-white">        
    
        <div class="min-h-screen">
            <nav>
                @include('layouts.partials.navbar')
            </nav>
        

            <div class="flex flex-row antialiased min-h-screen mt-10 mx-auto container">
                <div class="md:block w-1/4">
                    @include('layouts.partials.sidebar')
                </div>
                <div class="md:w-3/4">
                    @yield('content')
                </div>
            </div>
            
            <footer>
                @include('layouts.partials.footer')
            </footer>
            
        </div>   

        @stack('modals')

        @notifyJs

        @livewireScripts
    </body>
</html>
