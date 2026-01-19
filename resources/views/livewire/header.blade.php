<header class="text-2xl px-[80px] py-[10px] bg-white flex justify-between items-center sticky top-0 bg-white z-50">
    <a class="logo block" href="{{ route('home') }}">
        <img src="{{ asset('assets/logo.svg') }}" alt="career180 logo">
    </a>

    <div class="links">
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

    <div class="auth-btns">
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
</header>


