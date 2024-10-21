<x-page-layout :title="$title">

    <div class="hero grid grid-cols-1 md:grid-cols-2 justify-between px-5 py-10 w-full  items-center place-items-center">

        <div class="section-1 p-3">
            <h2 class="uppercase text-4xl text-center text-cyan-700 font-bold mb-4">{{ config('app.name') }}</h2>

            <p class="text-base text-white md:text-gray-400 leading-9 text-center md:text-left">Unlock Your Financial
                Freedom by Investing in your
                financial freedom
                here with
                us at Vicronplus. Take control
                of your financial future and secure a life of prosperity. Our expert team will guide you in making
                informed investment decisions, ensuring your wealth grows exponentially</p>

            <p class="text-white md:text-gray-400 leading-9 text-center md:text-left">
                Transform Your Financial Future Ready to take your finances to the next level? Invest in your financial
                freedom here with us at Vicronplus. Our team of experts will work closely with you to create a
                personalized investment plan, tailored to your unique financial goals and objectives.
            </p>

            <div class="mt-10 mb-3 px-14 flex justify-center">
                <button
                    class="flex flex-row place-items-center gap-x-3 outline-none border-0  bg-blue-800 hover:bg-blue-700 text-white px-7 py-3 rounded-lg text-left mx-auto md:mx-0"
                    onclick="window.location.href = '/user/register'">
                    <span class="uppercase">Register</span>
                    <span class="material-symbols-outlined text-white text-sm">
                        login
                    </span>
                </button>
            </div>
        </div>

        <div class="section-2 hidden md:block hero-bg">
            <img src="{{ asset('hero.png') }}" class="object-fill w-full h-full hero-img" alt="" loading="lazy">
        </div>
    </div>

    <section class="investment-processes  px-2 py-8">

        <h3 class="text-gray-200 text-2xl text-center uppercase font-bold">Investment Process</h3>

        <div class="processes w-full">

            <div class="process pt-2 pb-5 px-4">
                <div
                    class="process-icon mx-auto w-14 h-14 flex place-items-center justify-center mt-2 rounded-full bg-white bg-opacity-10 mb-6">
                    <span class="material-symbols-outlined text-lg text-blue-600">
                        dashboard_customize
                    </span>
                </div>

                <h4 class="text-white uppercase text-center font-bold text-lg">Create an account</h4>

                <p class="mt-4 text-white text-center leading-8">
                    Begin by signing up on our platform. The process is quick and straightforward, giving you instant
                    access to your personal dashboard....
                </p>
            </div>

            <div class="process pt-2 pb-5 px-4">
                <div
                    class="process-icon mx-auto w-14 h-14 flex place-items-center justify-center mt-2 rounded-full bg-white bg-opacity-10 mb-6">
                    <span class="material-symbols-outlined text-lg text-blue-600">
                        currency_exchange
                    </span>
                </div>

                <h4 class="text-white uppercase text-center font-bold text-lg">Fund Account</h4>

                <p class="mt-4 text-white text-center leading-8">
                    Fund your account with a deposit to kickstart your invest journey. Transfer to our secure payment
                    address and deposit the amount that suits your investment....
                </p>
            </div>
            <div class="process pt-2 pb-5 px-4">
                <div
                    class="process-icon mx-auto w-14 h-14 flex place-items-center justify-center mt-2 rounded-full bg-white bg-opacity-10 mb-6">
                    <span class="material-symbols-outlined text-lg text-blue-600">
                        finance_mode
                    </span>
                </div>

                <h4 class="text-white uppercase text-center font-bold text-lg">Start Investing</h4>

                <p class="mt-4 text-white text-center leading-8">
                    You can now start investing after depositing. you will find our well proposed investment plans,
                    choose your preffered investment plan and start investing.
                </p>
            </div>

        </div>

    </section>

    <section class="about-investment py-10 " id="about">
        <h3 class="text-center font-bold text-2xl uppercase">About Vicron Investment</h3>

        <div class="block md:flex md:gap-x-7 md:gap-y-3 md:justify-between py-6">
            <div class="bg-white bg-opacity-10 rounded-lg flex-grow basis-60 py-4 px-5 leading-8 block">
                Investing on VicronPlus offers a world of benefits, empowering you to take control of your financial
                future. By joining our platform, you'll gain access to a wide range of investment opportunities, expert
                guidance, and cutting-edge tools to help you achieve your financial goals.
                <p class="text-xl font-bold mt-4 mb-2">Key Features.</p>

                <ul class="px-2 py-1 ">
                    <li class="mb-2 text-sm leading-9">
                        <b>Diversified Investment Options:</b> Explore a variety of assets, including stocks, bonds,
                        ETFs, and more, to create a balanced portfolio that suits your risk tolerance and investment
                        objectives.
                    </li>

                    <li class="mb-2 text-sm leading-9">
                        <b>Convenience and Accessibility:</b> Invest on-the-go with our user-friendly platform,
                        available 24/7, and manage your portfolio with ease.
                    </li>

                    <li class="mb-2 text-sm leading-9">
                        <b>Security and Transparency:</b> Enjoy peace of mind with our robust security measures and
                        transparent fee structures.
                    </li>
                </ul>

                <div class="my-6 px-3">
                    <button
                        class="px-4 py-2 bg-blue-700 text-white rounded-3xl flex flex-row gap-x-3 place-items-center hover:bg-blue-400"><span>Read
                            more</span> <span class="material-symbols-outlined text-white text-base">
                            skip_next
                        </span></button>
                </div>
            </div>

            <div class="hidden md:flex front flex-grow basis-60 justify-center place-items-center">
                <img src="{{ asset('front.png') }}" alt="" class="w-80 h-80" loading="lazy">
            </div>
        </div>
    </section>

    <section class="investment-plans py-10">
        <h3 class="text-center font-bold text-3xl uppercase mb-12">See Our Investment Plans</h3>

        <div class="plans w-full">

            @foreach ($plans as $plan)
                <div class="card">
                    <div class="card__border"></div>
                    <div class="card_title__container">
                        <span
                            class="card_title text-2xl font-bold uppercase text-cyan-400">{{ $plan->plan_name }}</span>
                        {{-- <p class="card_paragraph">Best way to be success in your life.</p> --}}
                    </div>
                    <hr class="line" />
                    <ul class="card__list">
                        <li class="card__list_item mb-2">
                            <span class="check">
                                <span class="material-symbols-outlined text-xs text-black font-bold chev_svg">
                                    chevron_right
                                </span>
                            </span>
                            <span class="list_text text-sm">Minimum Deposit {{ $plan->minimum }} USD</span>
                        </li>
                        <li class="card__list_item mb-2">
                            <span class="check">
                                <span class="material-symbols-outlined text-xs text-black font-bold chev_svg">
                                    chevron_right
                                </span>
                            </span>
                            <span class="list_text text-sm">Maximum Deposit {{ $plan->maximum }} USD</span>
                        </li>
                        <li class="card__list_item mb-2">
                            <span class="check">
                                <span class="material-symbols-outlined text-xs text-black font-bold chev_svg">
                                    chevron_right
                                </span>
                            </span>
                            <span class="list_text text-sm capitalize flex flex-row gap-x-2 place-items-center"><span>Capital
                                    Return</span>
                                <span
                                    class="py-1 px-2 text-white rounded-lg {{ $plan->capital_return == 'on' ? 'bg-green-500' : 'bg-red-500' }}">{{ $plan->capital_return }}</span></span>
                        </li>
                        <li class="card__list_item mb-2">
                            <span class="check">
                                <span class="material-symbols-outlined text-xs text-black font-bold chev_svg">
                                    chevron_right
                                </span>
                            </span>
                            <span class="list_text text-sm capitalize">
                                {{ $plan->percentage }}% payback after {{ $plan->duration }} <span
                                    class="uppercase">{{ $plan->unit }}s</span>
                            </span>
                        </li>

                    </ul>
                    <button class="button" onclick="window.location.href = '/user/investment/new'">Buy Now</button>
                </div>
            @endforeach

        </div>
    </section>



</x-page-layout>
