<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>{{ config('app.name') }} | Admin {{ $title }}</title>
        @vite('resources/js/app.js')

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link rel="stylesheet" href="{{ asset('admin.css') }}">
    </head>

    <body>

        @include('partials._admin-sidebar')

        <div class="page-content px-2 py-1">

            {{ $slot }}

        </div>

        <script src="{{ asset('js/admin-layout.js') }}"></script>

        @stack('scripts')

    </body>

</html>
