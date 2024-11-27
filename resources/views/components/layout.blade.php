<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>Vicron Plus | {{ $title }}</title>
        <meta property="og:title" content="Vicron Plus | {{ $title }}" />
        <meta property="og:description" content="Vicron Plus | {{ $title }}" />
        <meta property="og:image" content="{{ asset('favicon.ico') }}" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ session()->get('locale') ?? 'de' }}" />
        @vite('resources/js/app.js')

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/user.css') }}">
    </head>

    <body id="body">

        @stack('style')


        @include('partials.sidebar')

        <div class="page-content ">

            @include('partials._topbar')

            <div class="px-2 py-1">

                {{ $slot }}

            </div>

        </div>
        <script src="{{ asset('assets/js/layout.js') }}"></script>

        @stack('scripts')

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/673145b72480f5b4f59b706b/1icc7gleh';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>



    </body>

</html>
