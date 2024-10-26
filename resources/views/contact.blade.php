<x-page-layout :title="$title" :showHeader="true">

    <section class="hero">
        <div id="particles-js"></div>

        <div class="body">
            <div class="body flex justify-center place-items-center flex-wrap">

                <div class="text px-3">
                    <h3 class="animate__animated animate__bounceInUp text-white uppercase text-center">Contact Us
                    </h3>

                </div>
            </div>
    </section>

    <div class="contact-form  w-full">

        <h3 class=" text-center mb-3">Send Us A Message</h3>

        <hr>


        <form action="/send-mail" method="POST" class="w-full py-[30px] px-4 md:px-24">
            @csrf

            <div class="large-group grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">

                <div class="grow shrink">

                    <label for="firstname" class="text-slate-500 uppercase font-semibold">
                        Firstname
                    </label>
                    <input type="text" id="firstname" name="firstname"
                        class="w-full py-2 rounded-sm px-2 border border-gray-500" required autocomplete="off">

                </div>

                <div class="grow shrink">

                    <label for="lastname" class="text-slate-500 uppercase font-semibold">
                        Lastname
                    </label>
                    <input type="text" id="lastname" name="lastname"
                        class="w-full py-2 rounded-sm px-2 border border-gray-500" required autocomplete="off">

                </div>

            </div>

            <div class="large-group grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 my-4 md:my-8">

                <div class="grow shrink">

                    <label for="firstname" class="text-slate-500 uppercase font-semibold">
                        Email
                    </label>
                    <input type="email" id="email" name="email"
                        class="w-full rounded-sm py-2 px-2 border border-gray-500" required autocomplete="off">

                </div>

                <div class="grow shrink">

                    <label for="subject" class="text-slate-500 uppercase font-semibold">
                        Subject
                    </label>
                    <input type="text" id="subject" name="subject"
                        class="w-full rounded-sm py-2 px-2 border border-gray-500" required autocomplete="off">

                </div>

            </div>

            <div class="group">
                <label for="message" class="text-slate-500 uppercase font-semibold">
                    Message
                </label>
                <textarea name="message" id="message" class="w-full min-h-[300px] rounded-sm" required autocomplete="off"></textarea>
            </div>

            <button
                class="w-full mt-10 bg-primary-700 text-white hover:bg-primary-600 py-3 flex flex-row justify-center rounded-sm place-items-center gap-x-1">Send
                <i class="fa-solid fa-paper-plane"></i></button>
        </form>

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
    @endpush

</x-page-layout>
