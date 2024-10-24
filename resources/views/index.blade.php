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

        <h3 class="text-blue-700 text-center">About Us</h3>
    </div>

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
            stats = new Stats;
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
    @endpush


</x-page-layout>
