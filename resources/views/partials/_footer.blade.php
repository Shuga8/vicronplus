<footer class="">

    <div class="grid grid-cols-1 md:grid-cols-3">

        <div class="about-footer">

            <div class="logo">
                <img src="{{ asset('assets/full-logo.png') }}" alt="Logo" class="mx-auto">
            </div>

            <div class="content">
                At VicronPlus, our mission is to provide strategic investment opportunities that foster growth
                and
                sustainability. We aim to create value for our clients through informed decision-making and a
                commitment
                to transparency.
            </div>


        </div>

        <div class="explore">
            <h3>Explore</h3>

            <hr>

            <ul>
                <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                    <i class="fa-solid fa-location-arrow"></i>
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                    <i class="fa-solid fa-location-arrow"></i>
                    <a href="{{ route('about') }}">About Us</a>
                </li>

                <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                    <i class="fa-solid fa-location-arrow"></i>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>

                @auth('web')
                    <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                        <i class="fa-solid fa-location-arrow"></i>
                        <a href="{{ route('user.dashboard') }}">Dashboard</a>
                    </li>
                @endauth

                @guest

                    <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                        <i class="fa-solid fa-location-arrow"></i>
                        <a href="{{ route('user.login') }}">Sign In</a>
                    </li>

                    <li class="flex flex-row gap-x-4 place-items-center text-cyan-200 hover:text-cyan-100">
                        <i class="fa-solid fa-location-arrow"></i>
                        <a href="{{ route('user.register') }}">Sign up</a>
                    </li>
                @endguest


            </ul>
        </div>

        <div class="get-in-touch">
            <h3>Get In Touch</h3>
            <hr>

            <ul>
                <li class="flex flex-row gap-x-4 place-items-center ">
                    <i class="fa-solid fa-envelope text-cyan-200"></i>
                    <a class="text-white" href="mailto:info@vicronplus.com">info@vicronplus.com</a>
                </li>

                <li class="flex flex-row gap-x-4 place-items-center ">
                    <i class="fa-solid fa-phone text-cyan-200"></i>
                    <a class="text-white" href="tel:+447777343033">+44 7777 343033</a>
                </li>

                <li class="flex flex-row gap-x-4 place-items-center ">
                    <i class="fa-solid fa-location-dot text-cyan-200"></i>
                    <a class="text-white" href="javascript:void(0)">LONDON, UK</a>
                </li>



            </ul>
        </div>

    </div>

    <div class="border-t border-white">
        <blockquote class="text-white text-center text-[12px] ">&copy;2024 <a href=""
                class="text-cyan-500 italic">Vicronplus</a> All rights reserved &trade;
        </blockquote>
    </div>

</footer>
