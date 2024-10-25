<x-page-layout :title="$title" :showHeader="true">


    <section class="hero">

        <div id="particles-js"></div>

        <div class="body flex justify-center place-items-center flex-wrap">

            <div class="text px-3">
                <h3 class="animate__animated animate__bounceInUp text-white uppercase text-center">Invest With <span
                        class="text-cyan-600">VIcronPlus</span>
                </h3>

                <p class="animate__animated animate__backInLeft text-white text-center mt-3">
                    Join us here at <span class="text-cyan-600"> vicronplus </span>for your financial freedom by
                    Investing with us.
                </p>

                <p class="animate__animated animate__backInRight text-white text-center mt-3">
                    With the best and flexible investment plan, seamless and wholesome packages with benefit bonuses,
                    your financial fredom is secured here.
                </p>

                <p class="animate__animated animate__backInLeft text-white text-center mt-3">
                    Register now on <span class="text-cyan-600"> vicronplus </span>by clicking the get started button
                    below.
                    You can also conact us with the contact link below
                </p>

                <div
                    class="go-to mt-10 flex flex-row gap-x-3 justify-center sticky z-2 animate__animated animate__bounceInUp">

                    <a href="{{ route('user.register') }}"
                        class="text-white bg-gradient-to-r from-cyan-400 to-cyan-900 py-[11px] px-[26px] flex flex-row gap-x-2 place-items-center"><span>Get
                            Started</span>
                        <i class="fa-solid fa-right-to-bracket text-xs"></i>
                    </a>

                    <a href=""
                        class="text-white bg-transparent border-cyan-500 border-[1px] py-[11px] px-[26px]">Contact</a>

                </div>
            </div>
        </div>



        {{-- <div class="count-particles">
            <span class="js-count-particles">--</span> particles -
        </div> --}}


    </section>


    <div class="marquee">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        },
                        {
                            "description": "Nvidia",
                            "proName": "NASDAQ:NVDA"
                        },
                        {
                            "description": "Usdt",
                            "proName": "CRYPTOCAP:USDT"
                        },
                        {
                            "description": "Tesla",
                            "proName": "NASDAQ:TSLA"
                        },
                        {
                            "description": "Gold",
                            "proName": "OANDA:XAUUSD"
                        },
                        {
                            "description": "Binance",
                            "proName": "CRYPTOCAP:BNB"
                        },
                        {
                            "description": "Ton",
                            "proName": "CRYPTOCAP:TON"
                        }
                    ],
                    "showSymbolLogo": true,
                    "isTransparent": true,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
    </div>

    <div class="index-about w-full">

        <h3 class=" text-center mb-3">About Us</h3>

        <hr>

        <div class="">

            <div class="content">
                <p>
                    VicronPlus is a forward-thinking investment company dedicated to empowering individuals and
                    businesses
                    to achieve their financial goals. Founded on the principles of innovation, integrity, and
                    excellence,
                    VicronPlus specializes in a diverse range of investment solutions tailored to meet the unique
                    needs
                    of
                    our clients.
                </p>

                <h3>Our Mission</h3>

                <p>
                    At VicronPlus, our mission is to provide strategic investment opportunities that foster growth
                    and
                    sustainability. We aim to create value for our clients through informed decision-making and a
                    commitment
                    to transparency.
                </p>

            </div>

            <div class="img-about">
            </div>

        </div>


    </div>

    <div class="subscribe">

        <div class="subscribe-form">
            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="">
                    <label for="" class="text-white text-[12px]">Subscribe to our newsletter</label>
                    <div class="input-group relative">
                        <input type="email" autocomplete="off"
                            class="w-full px-2 text-[12px] py-2 bg-transparent border text-white"
                            placeholder="enter your email address...." required>
                        <button
                            class="absolute right-[3px] top-[50%] translate-y-[-50%] px-3 py-2 text-[12px] bg-primary-600 text-white">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section class="investment-plans w-full">
        <h3 class=" text-center mb-3">investment Plans</h3>
        <hr>

        <div class="plans">

            @foreach ($plans as $plan)
                <div class="plan">

                    <div class="card-img">
                        <div class="overlay">

                            <h4 class="text-[1.1rem] uppercase text-white font-bold">{{ $plan->plan_name }}</h4>

                            <p class=" text-white text-[1.4rem] font-light">{{ $plan->percentage }}%</p>

                            <p class=" text-white text-[0.98rem] font-light capitalize">After {{ $plan->duration }}
                                {{ $plan->unit . 's' }}</p>

                        </div>
                    </div>

                    <div class="card-body h-[calc(100%-180px)] flex flex-col gap-y-9 items-center justify-center">
                        <ul>
                            <li class="flex gap-x-1 place-items-center mb-3">
                                <i class="fa-solid fa-angles-right text-[11px] text-[#468cf6] font-bold"></i>
                                <span>Minimum - <span class="amount-usd">{{ $plan->minimum }}</span></span>
                            </li>

                            <li class="flex gap-x-1 place-items-center mb-3">
                                <i class="fa-solid fa-angles-right text-[11px] text-[#468cf6] font-bold"></i>
                                <span>Maximum - <span class="amount-usd">{{ $plan->maximum }}</span></span>
                            </li>

                            <li class="flex gap-x-1 place-items-center mb-3">
                                <i class="fa-solid fa-angles-right text-[11px] text-[#468cf6] font-bold"></i>
                                <span>Capital Return <span
                                        class="text-white px-1 pb-[1px] rounded-sm {{ $plan->capital_return == 'on' ? 'bg-green-600' : 'bg-red-600' }}">{{ $plan->capital_return }}</span></span>
                            </li>


                        </ul>

                        <a href="{{ route('user.investment.new') }}"
                            class="px-7 py-2 text-white bg-primary-600 rounded-sm">
                            Buy Plan
                        </a>
                    </div>

                </div>
            @endforeach


        </div>

    </section>

    @push('script')
        <script src="{{ asset('assets/js/particles.js') }}"></script>
        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });


            /* ---- stats.js config ---- */

            var count_particles, stats, update;
            stats = new Stats();
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
        </script>
        <script type="text/javascript">
            const amountUSDFields = document.querySelectorAll(".amount-usd");

            amountUSDFields.forEach(field => {
                let amount = parseFloat(field.textContent.replace(/[^\d\.]/g, ''));
                amount = amount.toLocaleString("en-US", {
                    style: "currency",
                    currency: "USD"
                });
                field.textContent = amount;
            });
        </script>
    @endpush


</x-page-layout>
