<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Boolcasa - @yield('title')</title>

        @yield('head-scripts')

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        {{-- # include copia e incolla tutto il file --}}
        @include('partials.header')

        <main>
            {{-- § è un punto di accesso opzionale per tutti i blade che implementino questo layout --}}
            @yield('main-content')
        </main>

        @include('partials.footer')

        @yield('footer-scripts')
    </body>
    <script src="{{ asset("js/app.js") }}"></script>
</html>