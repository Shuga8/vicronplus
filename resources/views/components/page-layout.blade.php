<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:title" content="Vicron Plus - {{ $title }}" />
        <meta property="og:description"
            content="Freedom by Investing in your financial freedom here with us at Vicronplus. " />
        <meta property="og:image" content="{{ asset('favicon.ico') }}" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ session()->get('locale') ?? 'de' }}" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <title>Vicron Plus - {{ $title }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    </head>

    <body>

        @stack('style')

        @if ($showHeader == 'true')
            @include('partials.header')
            <x-chat />
        @endif

        <x-alerts />


        <div class="content-body">
            {{ $slot }}
        </div>


        @if ($showHeader == 'true')
            @include('partials._footer')
        @endif

    </body>


    <script src="{{ asset('assets/js/page-layout.js') }}"></script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('scripts')

</html>
