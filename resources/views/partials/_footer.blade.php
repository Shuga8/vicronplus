<footer class="grid grid-cols-1 grid-rows-3 md:grid-cols-4 md:grid-rows-1 py-6 px-8 md:px-14">

    <div class="explore">

        <p class="text-3xl font-thin italic text-white text-center md:text-left">Explore</p>

        <div class="mt-5 px-2">

            <ul>
                <li class="mb-4 ">
                    <a href="{{ route('home') }}"
                        class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                            class="text-red-500">*</span>
                        <span>Home</span></a>
                </li>
                <li class="mb-4 ">
                    <a href="" class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                            class="text-red-500">*</span>
                        <span>About</span></a>
                </li>
                <li class="mb-4 ">
                    <a href="" class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                            class="text-red-500">*</span>
                        <span>Contact</span></a>
                </li>

                @auth('web')
                    <li class="mb-4 ">
                        <a href="{{ route('user.dashboard') }}"
                            class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                                class="text-red-500">*</span>
                            <span>Dashboard</span></a>
                    </li>

                    <li class="mb-4 ">
                        <a href="" class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                                class="text-red-500">*</span>
                            <span>Invest</span></a>
                    </li>

                    <li class="mb-4 ">
                        <a href="{{ route('user.logout') }}"
                            class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                                class="text-red-500">*</span>
                            <span>Logout</span></a>
                    </li>
                @endauth

                @guest
                    <li class="mb-4 ">
                        <a href="{{ route('user.login') }}"
                            class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                                class="text-red-500">*</span>
                            <span>Sign In</span></a>
                    </li>

                    <li class="mb-4 ">
                        <a href="{{ route('user.register') }}"
                            class="text-gray-400 flex flex-row gap-x-3 justify-center md:justify-start"><span
                                class="text-red-500">*</span>
                            <span>Dashboard</span></a>
                    </li>
                @endguest


            </ul>

        </div>
    </div>

    <div class="socials col-span-1 md:col-span-2">

        <div class="logo py-3 mb-2">
            <a href="{{ route('home') }}"
                class="flex justify-center items-center place-content-center place-items-center">
                <img src="{{ asset('android-chrome-192x192.png') }}" alt="VicronPlus" loading="lazy"
                    class="w-14 h-14"><span class="text-xl font-bold mt-8 -ml-4 uppercase text-gray-400">icron</span>
            </a>
        </div>

        <p class="text-center text-gray-300 mb-6 text-xs">
            Unlock Your Financial
            Freedom by Investing in your
            financial freedom
            here with
            us at Vicronplus.
        </p>

        <div class="subscribe-form mx-auto w-full border-b border-b-slate-500 pb-7">
            <form action="">
                <label>
                    <label for="email" class="text-[10px] text-red-400">Subscribe to our newsletter</label>
                    <div class="input-group flex flex-row gap-x-2 relative">
                        <input type="email" autocomplete="current-email" name="email" placeholder="email address..."
                            class="w-full bg-white bg-opacity-10 border-none outline-none rounded-md focus:outline-none pt-2.5 pb-3">
                        <button
                            class="py-3 px-3 bg-blue-600 text-white rounded-md  absolute right-1 top-[5px] flex place-items-center">
                            <span class="material-symbols-outlined text-[12px]">
                                send
                            </span>
                        </button>
                    </div>
                </label>
            </form>
        </div>

        <div class="follow py-3">
            <p class="text-lg text-white text-center font-normal">Follow On Social</p>

            <div class="social-icons flex flex-row justify-center gap-x-3 py-3">
                <i class="fa-brands fa-instagram text-red-600 text-4xl cursor-pointer"></i>
                <i class="fa-brands fa-square-facebook text-blue-600 text-4xl cursor-pointer"></i>
                <i class="fa-brands fa-x-twitter text-gray-800 text-4xl cursor-pointer"></i>
                <i class="fa-brands fa-pinterest text-pink-600 text-4xl cursor-pointer"></i>
            </div>
        </div>

    </div>

    <div class="contact-info px-5">
        <p class="text-xl font-normal text-white text-center mb-3">Contact Information</p>

        <div class="location mt-6">

            <div class="mb-3">

                <p class="text-lg font-normal text-gray-300 ">Location</p>

                <address class="text-base text-white flex flex-row gap-x-2 place-items-center">
                    <i class="fa-solid fa-location-dot text-red-600"></i>
                    <span>London, UK</span>
                </address>

            </div>

            <div class="mb-3">
                <p class="text-lg font-normal text-gray-300 ">Phone</p>
                <a href="tel:+447777343033" class="text-base text-white flex flex-row gap-x-2 place-items-center"><i
                        class="fa-solid fa-phone text-red-600"></i><span>+447777343033</span></a>
            </div>

            <div class="mb-3">
                <p class="text-lg font-normal text-gray-300 ">Email</p>
                <a href="mailto:support@vicronplus.com"
                    class="text-base text-white flex flex-row gap-x-2 place-items-center"><i
                        class="fa-solid fa-envelope text-red-600"></i><span>support@vicronplus.com</span></a>
            </div>



        </div>
    </div>

</footer>
