<div class="p-card rounded-card bg-white">
    <div class="image h-[240px] mb-6">
        <img src="{{ asset('assets/test-card.png') }}" alt="course name" loading="lazy" class="w-full h-100">
    </div>

    <div class="rating-level flex justify-between items-center">
        <div class="level" >
            <span class="badge me-3">
                8 Weeks
            </span>
            <span class="badge">
                {{ $course->level->title }}
            </span>
        </div>

        <div class="rating" >
            <livewire:rating :rating="$course->ratings">
            {{-- {{ $course->ratings }} --}}
        </div>
    </div>

    <h2 class="text-main-text-color font-medium my-3">
        {{ $course->title }}
    </h2>

    <div class="duration flex items-center w-full" >
        <div class="text-[14px] text-secondary-text-color flex items-center me-3">
            <span class="me-2">
                <img src="{{ asset('assets/clock-hour.svg') }}" alt="">
            </span>
            22hr 30min
        </div>
        <div class="text-[14px] text-secondary-text-color flex items-center">
            <span class="me-2">
                <img src="{{ asset('assets/video.svg') }}" alt="">
            </span>
            Lectures
        </div>
    </div>

    <a href="/" class="block w-full rounded-btn-radius text-center p-btn-padding bg-main-color text-white font-medium mt-4">
        View Details >
    </a>

</div>
