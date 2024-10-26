<header class="header flex flex-row justify-between place-items-center px-3 py-4">

    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" class="w-14 h-14 object-contain" alt="">
        </a>
    </div>

    <div class="links flex flex-row gap-x-10">

        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact Us</a>
    </div>

    <div class="actions px-4">
        @auth('web')
            <a href="{{ route('user.dashboard') }}" class="action-button">Dashboard</a>
        @endauth
        @guest
            <a href="{{ route('user.login') }}" class="action-button">Sign in</a>
        @endguest
    </div>

    <div class="toggle-icon">
        <i class="fa-solid fa-bars"></i>
    </div>

</header>
