<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>Vicron Plus {{ $title }}</title>
        @vite('resources/js/app.js')

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link rel="stylesheet" href="{{ asset('user.css') }}">
    </head>

    <body>

        @include('partials.sidebar')

        <div class="page-content px-2 py-1">

            @include('partials._topbar')

            {{ $slot }}

        </div>

        <script src="{{ asset('js/layout.js') }}"></script>

        @stack('scripts')

    </body>

</html>
