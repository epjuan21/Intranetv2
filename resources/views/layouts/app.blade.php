<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Intranet - @yield('title', 'Inicio')</title>

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        </style>
    </head>
    <body>

        {{-- HEADER --}}

        <header>
                
            @include('layouts.header')

        </header>

        {{-- CONTENT --}}

        <div class="container">

            @yield('content')

        </div>

        {{-- FOOTER --}}

        <footer>

            @include('layouts.footer')

        </footer>


        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
