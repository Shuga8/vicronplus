<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <title>Vicron Plus {{ $title }}</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite('resources/js/app.js')

    </head>

    <body>
        @include('partials.header')

        <div class="w-full h-32 bg-transparent">

        </div>
        {{ $slot }}
    </body>

    <script src="{{ asset('js/page-layout.js') }}"></script>

    @stack('script')

</html>
