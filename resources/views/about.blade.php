<x-page-layout :title="$title" :showHeader="true">

    <section class="hero">
        <div id="particles-js"></div>

        <div class="body">
            <div class="body flex justify-center place-items-center flex-wrap">

                <div class="text px-3">
                    <h3 class="animate__animated animate__bounceInUp text-white uppercase text-center">About Us
                    </h3>

                </div>
            </div>
    </section>

    <div class="index-about w-full">

        <h3 class=" text-center mb-3">Know More About Us</h3>

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

                <h3>Our Vision</h3>
                <p> At VicronPlus, we envision a world where individuals and businesses have the knowledge, resources,
                    and support to take control of their financial futures. We strive to be a leader in the investment
                    industry, recognized for our innovative approaches and unwavering commitment to our clients'
                    success. Our vision is to cultivate a community of informed investors who are equipped to navigate
                    the complexities of the financial landscape with confidence and clarity. </p>


            </div>

            <div class="img-about">
            </div>

        </div>


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
