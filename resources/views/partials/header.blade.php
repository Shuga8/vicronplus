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

    <div class="toggle-icon" onclick="openAsideNav()">
        <i class="fa-solid fa-bars"></i>
    </div>

</header>

<aside class="aside">

    <span
        class="absolute top-3 right-4 bg-red-600 text-white px-2 py-1 cursor-pointer hover:bg-red-500 flex justify-center place-items-center"
        onclick="closeAsideNav()">
        <i class="fa-solid fa-xmark"></i>
    </span>
    <nav class="flex flex-col gap-y-3 justify-center">
        <a href="{{ route('home') }}" class="text-white px-2 py-3 text-center hover:bg-cyan-600">Home</a>
        <a href="{{ route('about') }}" class="text-white px-2 py-3 text-center hover:bg-cyan-600 ">About Us</a>
        <a href="{{ route('contact') }}" class="text-white px-2 py-3 text-center hover:bg-cyan-600 ">Contact Us</a>

        @auth('web')
            <a href="{{ route('user.dashboard') }}"
                class="text-white px-2 py-3 text-center hover:bg-cyan-600 ">Dashboard</a>
        @endauth

        @guest
            <a href="{{ route('user.login') }}" class="text-white px-2 py-3 text-center hover:bg-cyan-600 ">Sign In</a>
            <a href="{{ route('user.register') }}" class="text-white px-2 py-3 text-center hover:bg-cyan-600 ">Sign Up</a>
        @endguest
    </nav>
</aside>

@push('script')
    <script>
        const aside = document.querySelector(".aside");

        function openAsideNav() {
            aside.classList.add("active");
        }

        function closeAsideNav() {
            aside.classList.remove("active");
        }
    </script>
@endpush
