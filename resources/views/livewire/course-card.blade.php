<div class="p-card rounded-card bg-white">
    <div class="image h-[240px] mb-6">
        <img src="{{ asset('assets/test-card.png') }}" alt="course name" loading="lazy" class="w-full h-100">
    </div>

    <div class="rating-level flex justify-between items-center">
        <div class="level">
            <span class="badge me-3">
                8 Weeks
            </span>
            <span class="badge">
                {{ $course->level->title }}
            </span>
        </div>

        <div class="rating">
            <livewire:rating :rating="$course->ratings">
                {{-- {{ $course->ratings }} --}}
        </div>
    </div>

    <h2 class="text-main-text-color font-medium my-3">
        {{ $course->title }}
    </h2>

    <div class="duration flex items-center w-full">
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

    <a href="{{ route('course.details', $course->id) }}"
        class=" w-full rounded-btn-radius text-center p-btn-padding bg-main-color text-white font-medium mt-4 flex items-center justify-center gap-2">
        View Details
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
            viewBox="0 0 640 640">
            <path fill="#ffffff"
                d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z" />
        </svg>
    </a>

</div>
