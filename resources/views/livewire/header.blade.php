<header 
class="text-2xl px-10 md:px-[80px] py-[10px] bg-white flex justify-between items-center sticky top-0 bg-white z-[300]">
    <a class="logo block" href="{{ route('home') }}">
        <img src="{{ asset('assets/logo.svg') }}" alt="career180 logo">
    </a>

    <div class="links hidden md:block">
        <ul class="flex items-center gap-[16px]">
            <li class="text-[18px] text-main-text-color font-medium">
                Learning Path
            </li>
            <li class="text-[18px] text-main-text-color font-medium">
                Vacancies & Internships
            </li>
            <li class="text-[18px] text-main-text-color font-medium">
                Events
            </li>
        </ul>
    </div>

    <div class="auth-btns hidden md:block">
        <a href="{{ route('login') }}"
            class="inline-block p-btn-padding rounded-btn-radius text-secondary-color text-[18px] border border-secondary-color me-3 w-[100px] text-center">
            Log in
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="inline-block p-btn-padding rounded-btn-radius text-[18px] bg-main-color text-white w-[150px] text-center">
                Register Now
            </a>
        @endif
    </div>

    <div class="mobile-menu block md:hidden" x-data="{ open: false }">
        {{-- mobile icon --}}
        <button class="menu-btn w-11 h-11 cursor-pointer p-2" x-on:click="open = !open">
            <svg class="w-full h-full fill-main-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
        </button>

        {{-- mobile menu --}}
        <div class="fixed top-0 left-0 w-full h-full bg-white z-[200] transform  transition-transform duration-300 ease-in-out" x-bind:class="{ 'translate-x-0': open  , 'translate-x-full': !open }" >
            <div class="w-full p-5  border-b border-gray-100" x-on:click="open = false">
                <svg class="w-10 h-10 fill-main-color ms-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/></svg>
            </div>
            <div class="links p-5">
                <ul class="flex flex-col  gap-[16px]">
                    <li class="text-xl text-main-text-color font-medium">
                        Learning Path
                    </li>
                    <li class="text-xl text-main-text-color font-medium">
                        Vacancies & Internships
                    </li>
                    <li class="text-xl text-main-text-color font-medium">
                        Events
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-4 p-5">
                <a href="{{ route('login') }}"
                    class="inline-block p-btn-padding rounded-btn-radius text-secondary-color text-[18px] border border-secondary-color me-3  text-center">
                    Log in
                </a>
        
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="inline-block p-btn-padding rounded-btn-radius text-[18px] bg-main-color text-white  text-center">
                        Register Now
                    </a>
                @endif
            </div>


        </div>
    </div>
</header>


