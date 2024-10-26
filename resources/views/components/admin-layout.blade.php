<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:title" content="{{ config('app.name') }} | Admin - {{ $title }}" />
        <meta property="og:description" content="{{ config('app.name') }} | Admin - {{ $title }}" />
        <meta property="og:image" content="{{ asset('favicon.ico') }}" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ session()->get('locale') ?? 'de' }}" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>{{ config('app.name') }} | Admin - {{ $title }}</title>
        @vite('resources/js/app.js')


        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">

        <link rel="cannonical" href="{{ config('app.url') }}">
    </head>

    <body>

        @include('partials._admin-sidebar')

        <div class="page-content pb-1">
            @include('partials._admin-header')

            <x-alerts />

            {{ $slot }}

        </div>

        <script src="{{ asset('assets/js/admin-layout.js') }}"></script>

        @stack('scripts')

    </body>

</html>
