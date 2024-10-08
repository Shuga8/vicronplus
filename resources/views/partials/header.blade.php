<nav class="navbar flex flex-row items-center place-items-center justify-between px-4 py-3">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('android-chrome-192x192.png') }}" alt="Vicron Plus" loading="lazy"
                class="w-10 h-10 rounded-full">
        </a>
    </div>

    <ul class="links hidden md:flex md:flex-row">
        <li class="px-4 py-2 {{ pathNameCheck(route('home')) }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="px-4 py-2">
            <a href="">About</a>
        </li>
        <li class="px-4 py-2">
            <a href="">Contact</a>
        </li>
    </ul>

    <ul class="actions hidden md:flex md:flex-row">
        <li class="px-4 py-2 {{ pathNameCheck(route('user.login')) }}">
            <a href="{{ route('user.login') }}">Sign in</a>
        </li>
        <li class="px-4 py-2 {{ pathNameCheck(route('user.register')) }}">
            <a href="{{ route('user.register') }}">Sign up</a>
        </li>
    </ul>

    <div class="flex md:hidden p-2 bg-white bg-opacity-10 rounded-full hover:cursor-pointer"
        onclick="togglePageAsideBar(this)">
        <span class="material-symbols-outlined">
            menu
        </span>
    </div>
</nav>


<aside class="aside hidden md:hidden items-center place-content-center">

    <span class="material-symbols-outlined text-base text-red-600 absolute top-10 right-4 cursor-pointer"
        onclick="closePageAside()">
        cancel
    </span>

    <div class="relative flex place-content-center items-center place-items-center w-full h-fit">

        <ul class="links flex flex-col gap-y-3">
            <li class="px-4 py-3 text-center">
                <a href="">Home</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">About</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">Contact</a>
            </li>

            <li class="px-4 py-3 text-center">
                <a href="">Sign in</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">Sign up</a>
            </li>
        </ul>
    </div>



</aside>


<x-alerts />
