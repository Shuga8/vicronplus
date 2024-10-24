<header class="header flex flex-row justify-between place-items-center px-3 py-4">

    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" class="w-14 h-14 object-contain" alt="">
        </a>
    </div>

    <div class="links flex flex-row gap-x-10">

        <a href="{{ route('home') }}">Home</a>
        <a href="">About</a>
        <a href="">Contact</a>
    </div>

    <div class="actions px-4">
        @auth('web')
            <a href="{{ route('user.dashboard') }}" class="action-button">Dashboard</a>
        @endauth
        @guest
            <a href="{{ route('user.login') }}" class="action-button">Sign in</a>
        @endguest
    </div>

</header>
