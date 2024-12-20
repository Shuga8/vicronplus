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

                    <a href="{{ route('user.login') }}"
                        class="text-white bg-transparent border-cyan-500 border-[1px] py-[11px] px-[26px]">Login</a>

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

    <div class="w-full px-2 md:px-10 py-10 gap-y-10 flex flex-wrap gap-x-16 justify-center bg-slate-200">

        <div class="segment basis-[350px] shrink-0 grow lg:shrink md:grow-0 bg-white h-[300px] py-[10px] px-[15px]">
            <div class="icon text-blue-900 text-[4rem] w-full text-center">
                <i class="fa-solid fa-brain"></i>
            </div>

            <h3 class="uppercase text-center text-[20px] my-[4px] font-[450] text-stone-900">STEADY GROWTH</h3>

            <div class="text-center text-sm text- py-[5px] leading-[2.1]">
                Vicronplus is a safe and secure option, which ensures steady growth on your investments with daily
                returns on an ongoing basis with no hustle and instantly.
            </div>
        </div>

        <div class="segment basis-[350px] shrink-0 grow lg:shrink md:grow-0 bg-white h-[300px] py-[10px] px-[15px]">
            <div class="icon text-blue-900 text-[4rem] w-full text-center">
                <i class="fa-brands fa-ubuntu"></i>
            </div>

            <h3 class="uppercase text-center text-[20px] my-[4px] font-[450] text-stone-900">RELIABLE SYSTEM</h3>

            <div class="text-center text-sm text- py-[5px] leading-[2.1]">
                Vicronplus is backed by team of professionals, experts and specialist of trading market
                providing 24/7 guidance and support to the users ensuring a reliable system.
            </div>
        </div>

        <div class="segment basis-[350px] shrink-0 grow lg:shrink md:grow-0 bg-white h-[300px] py-[10px] px-[15px]">
            <div class="icon text-blue-900 text-[4rem] w-full text-center">
                <i class="fa-solid fa-sailboat"></i>
            </div>

            <h3 class="uppercase text-center text-[20px] my-[4px] font-[450] text-stone-900">MAXIMUM EFFICIENCY</h3>

            <div class="text-center text-sm text- py-[5px] leading-[2.1]">
                The most advanced intelligent monitoring technology with high level of professionalism of Vicronplus
                provides safe returns on your investments ensuring maximum efficiency.
            </div>
        </div>


    </div>

    <div class="how">
        <h3 class=" text-center mb-3">How it works</h3>
        <hr>

        <div
            class="container w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-20 gap-y-24 pt-20 pb-10 px-4 justify-center  place-content-center">

            <div class="card relative h-[280px]">
                <div class="icon">
                    <i class="fa-solid fa-user-plus"></i>
                </div>

                <div class="card-body">

                    <h4>Register An account</h4>

                    <p>
                        Go to the sign up page and register an account.Fill in all data appropiately.
                    </p>
                </div>
            </div>


            <div class="card relative h-[280px]">
                <div class="icon">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>

                <div class="card-body">

                    <h4>Make a Deposit</h4>

                    <p>
                        Make a deposit by going to the deposit page and selecting a wallet address you will like to
                        deposit to. Your deposit will be confirmed in a few minutes.
                    </p>
                </div>
            </div>
            <div class="card relative h-[280px]">

                <div class="icon">
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                </div>

                <div class="card-body">

                    <h4>Select an Invesment Plan</h4>

                    <p>
                        Go to the investment plan and pick an investment plan. Appropriately follow the plan minimum and
                        maximum amount rules.
                    </p>
                </div>
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
                            placeholder="enter your email address...." name="email" id="email" required>
                        <button
                            class="absolute right-[3px] top-[50%] translate-y-[-50%] px-3 py-2 text-[12px] bg-primary-600 text-white">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="video py-24 flex justify-center">
        <div class="w-[90%] max-w-[700px]">
            <video controls width="100%">
                <source src="{{ asset('assets/PACCC.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="w-full h-[500px] px-2.5 py-3">

        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                    "width": "100%",
                    "height": "100%",
                    "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                    "displayCurrency": "BTC",
                    "colorTheme": "light",
                    "locale": "en"
                }
            </script>
        </div>

    </div>
    <div class="w-full h-[500px] px-3.5 py-4">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-crypto-coins-heatmap.js"
                async>
                {
                    "dataSource": "Crypto",
                    "blockSize": "market_cap_calc",
                    "blockColor": "change|60",
                    "locale": "en",
                    "symbolUrl": "",
                    "colorTheme": "light",
                    "hasTopBar": false,
                    "isDataSetEnabled": false,
                    "isZoomEnabled": true,
                    "hasSymbolTooltip": true,
                    "isMonoSize": false,
                    "width": "100%",
                    "height": "100%"
                }
            </script>
        </div>
    </div>



    <section class="investment-plans w-full bg-slate-50">
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
                            class="px-7 py-2 text-white bg-primary-600 hover:bg-primary-500 rounded-sm">
                            Buy Plan
                        </a>
                    </div>

                </div>
            @endforeach


        </div>

    </section>

    <div class="certificate w-full flex justify-center place-content-center px-3 py-10">
        <img src="{{ asset('assets/certificate.png') }}" alt="Certificate" class=" object-cover">
    </div>

    @push('scripts')
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
