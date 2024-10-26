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

        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        </head>
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    </head>

    <body>

        @if ($showHeader == 'true')
            @include('partials.header')
        @endif

        <x-alerts />


        <div class="content-body">
            {{ $slot }}
        </div>


        @if ($showHeader == 'true')
            @include('partials._footer')
        @endif

    </body>

    <script src="//code.tidio.co/uihlai0knvw9akatfzf51vwznqvcj9fp.js"  async></script>

    <script src="{{ asset('assets/js/page-layout.js') }}"></script>


    @stack('script')

</html>
