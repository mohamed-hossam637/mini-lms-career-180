<div>
    {{-- About Us Hero Section --}}
    <section class="relative w-full h-[500px] flex items-center justify-center about-gradient-bg">
        {{-- Background Image Overlay --}}
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat z-[-1]"
            style="background-image: url({{ asset('assets/about.jpg') }});">
        </div>

        {{-- Content Overlay --}}
        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                About Us
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Career 180 is one of the top rising Ed-Tech startups in Egypt
            </p>
            <button
                class="bg-main-color hover:bg-main-color/90 text-white px-8 py-3 rounded-btn-radius transition-all ease-in-out">
                Learn More
            </button>
        </div>
    </section>

    {{-- About Us Content Section --}}
    <section class="container p-4 md:p-container-padding bg-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            {{-- About Career 180 Column --}}
            <div class="flex flex-col items-center md:items-start border-main-color md:pr-4 pr-0">
                <div class="bg-secondary-color rounded-lg p-4 mb-4">
                    <img src="{{ asset('assets/180.svg') }}" alt="">
                </div>
                <h2 class="text-2xl font-bold text-main-color mb-4">
                    About Career 180
                </h2>
                <p class="text-secondary-text-color text-center md:text-left">
                    Career 180 is one of the top rising Ed-Tech startups in Egypt, aiming to be a one stop shop for all
                    youth from their career development journey till getting hired and meeting the need for professional
                    development in the Egyptian market.
                </p>
            </div>

            {{-- Our Mission Column --}}
            <div class="flex flex-col items-center md:items-start border-main-color md:pr-4 pr-0">
                <div class="bg-secondary-color rounded-lg p-4 mb-4">
                    <img src="{{ asset('assets/target-arrow.svg') }}" alt="">
                </div>
                <h2 class="text-2xl font-bold text-main-color mb-4">
                    Our Mission
                </h2>
                <p class="text-secondary-text-color text-center md:text-left">
                    We are a bunch of enthusiastic individuals who established a comprehensive and interactive online
                    career knowledge network. Through Career 180 we creatively connect you with industry experts, career
                    coaches, and mentors to help you navigate your career path successfully.
                </p>
            </div>

            {{-- Our Vision Column --}}
            <div class="flex flex-col items-center md:items-start">
                <div class="bg-secondary-color rounded-lg p-4 mb-4">
                    <img src="{{ asset('assets/eye.svg') }}" alt="">
                </div>
                <h2 class="text-2xl font-bold text-main-color mb-4">
                    Our Vision
                </h2>
                <p class="text-secondary-text-color text-center md:text-left">
                    To be the 1st choice to all the ambitious youth, to enhance their delicate abilities to a level they
                    could ready to discover their fantasy occupations and meet the job market requirements with
                    confidence and competence.
                </p>
            </div>
        </div>
    </section>

    {{-- about invest in your career section  --}}
    <section class="container p-4 md:p-container-padding bg-white">
        <div class="section-header flex flex-col items-center">
            <h3 class="font-bold text-main-color text-xl">Career 180</h3>
            <h4 class=" text-main-text-color text-3xl md:text-5xl font-bold">Invest in your career</h4>
        </div>
        <div class="mt-10 bg-cover bg-center bg-no-repeat p-10" style="background-image: url({{ asset('assets/invest-section.png') }})">
            <iframe class="w-full md:h-[500px] h-[300px] rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/obCH5N0mYIA?si=7UhnAWHUalNyltK9"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
</div>
