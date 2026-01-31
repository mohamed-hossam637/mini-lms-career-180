<section class="splide h-[80vh] relative" aria-label="Splide Basic HTML Example ">

    <div class="splide__track h-full ">

        <ul class="splide__list">
            <li class="splide__slide">

                <div class="h-full w-full bg-main-color bg-cover bg-center mix-blend-luminosity"
                    style="background-image: url({{ asset('assets/slider_1.png') }})">
                    <div class="container p-4 md:p-container-padding h-full flex items-center">
                        <div class="w-full md:w-1/2">
                            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">
                                Build Your Career with Egypt’s Leading Learning & Job Platform
                            </h1>
                            <p class="text-white text-xl md:text-2xl">
                                Courses, Events, Internships & Jobs — All in One Place .
                            </p>
                            <div class="mt-10 flex items-center gap-2">
                                <button
                                    class="bg-main-color text-white p-btn-padding rounded-btn-radius font-medium flex items-center gap-2">
                                    Explore Courses

                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z" />
                                    </svg>
                                </button>
                                <button
                                    class="bg-gray-200 text-secondary-color border border-secondary-color p-btn-padding rounded-btn-radius font-medium">
                                    Subscribe Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="splide__slide">

                <div class="h-full w-full bg-main-color bg-cover bg-center mix-blend-luminosity"
                    style="background-image: url({{ asset('assets/slider_2.png') }})">
                    <div class="container p-4 md:p-container-padding h-full flex items-center">
                        <div class="w-full md:w-1/2">
                            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">
                                Build Your Career with Egypt’s Leading Learning & Job Platform
                            </h1>
                            <p class="text-white text-xl md:text-2xl">
                                Courses, Events, Internships & Jobs — All in One Place .
                            </p>
                            <div class="mt-10 flex items-center gap-2">
                                <button
                                    class="bg-main-color text-white p-btn-padding rounded-btn-radius font-medium flex items-center gap-2">
                                    Explore Courses

                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z" />
                                    </svg>
                                </button>
                                <button
                                    class="bg-gray-200 text-secondary-color border border-secondary-color p-btn-padding rounded-btn-radius font-medium">
                                    Subscribe Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    {{-- custom arrows --}}

    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 544 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-434.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
            </svg>
        </button>
        <button class="splide__arrow splide__arrow--next">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path
                    d="M598.6 342.6C611.1 330.1 611.1 309.8 598.6 297.3L470.6 169.3C458.1 156.8 437.8 156.8 425.3 169.3C412.8 181.8 412.8 202.1 425.3 214.6L498.7 288L64 288C46.3 288 32 302.3 32 320C32 337.7 46.3 352 64 352L498.7 352L425.3 425.4C412.8 437.9 412.8 458.2 425.3 470.7C437.8 483.2 458.1 483.2 470.6 470.7L598.6 342.7z" />
            </svg>
        </button>
    </div>
</section>
