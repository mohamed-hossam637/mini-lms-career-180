<div>
    {{-- hero section --}}
    <div class="main-slider-container h-auto md:h-[60vh] bg-main-color bg-cover bg-center mix-blend-luminosity"
        style="background-image: url({{ asset('assets/slider.png') }})">

        <div class="container p-4 md:p-container-padding h-full flex items-center">
            <div class="flex flex-col gap-4 h-full w-full md:w-6/12">
                <h1 class="text-3xl md:text-4xl font-bold text-white">{{ $course->title }}</h1>
                <p class="text-white">{{ $course->description }}</p>
            </div>
        </div>

    </div>

    {{-- course details section --}}
    <div class="container p-4 md:p-container-padding grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- course details --}}
        <div class="md:col-span-2">
            {{-- who takes this course --}}
            <div x-data="{ expanded: true }">
                <div class="rounded-lg px-4 md:px-[50px] pt-[30px] border border-gray-100 mb-5">
                    <div class="flex flex-row items-center justify-between cursor-pointer pb-5 text-main-color text-2xl md:text-3xl font-bold "
                        @click="expanded = ! expanded" x-bind:class="{ 'border-b border-gray-100': expanded }">
                        Who takes this course
                        <div class=" flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                                x-bind:class="{ 'rotate-180': expanded }"
                                class="transition-all duration-500 ease-in-out w-10 h-10">
                                <path
                                    d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg p-5 border border-gray-100 mb-5 grid grid-cols-1 md:grid-cols-2 gap-4" x-show="expanded"
                    x-collapse.duration.500ms>
                    @foreach ($course->who_takes_this_course as $index => $item)
                        <div class="flex items-center gap-4 bg-gray-100 p-2 rounded-lg">
                            <span
                                class="bg-secondary-color text-lg font-bold rounded w-10 h-10 flex items-center justify-center text-white">
                                {{ $index + 1 }}.
                            </span>
                            <p class="text-main-text-color text-sm  mb-2">
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- course content --}}
            <div x-data="{ expanded: true }" wire:init="lessons">
                <div class="rounded-lg md:px-[50px] px-4 pt-[30px] border border-gray-100 mb-5">
                    <div class="flex md:flex-row flex-col items-center justify-between cursor-pointer pb-5 text-main-color text-2xl md:text-3xl font-bold "
                        @click="expanded = ! expanded" x-bind:class="{ 'border-b border-gray-100': expanded }">

                        <p>Course Content</p>

                        <div class="duration flex items-center">
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
                                23
                                Lectures
                            </div>
                        </div>

                        <div class=" flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"
                                x-bind:class="{ 'rotate-180': expanded }"
                                class="transition-all duration-500 ease-in-out w-10 h-10">
                                <path
                                    d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
                            </svg>
                        </div>

                    </div>
                </div>

                <div wire:loading>
                    <div class="rounded-lg p-5 border border-gray-100 mb-5 grid grid-cols-2 gap-4">
                        <div class="flex items-center justify-between gap-4  p-2 bg-gray-100 rounded-lg">
                            <p class="text-main-text-color text-sm  mb-2">
                                Loading...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg p-5 border border-gray-100 mb-5 grid grid-cols-1 gap-4" x-show="expanded"
                    x-collapse.duration.500ms wire:loading.remove>
                    @foreach ($lessons as $lesson)
                        <div class="flex items-center justify-between gap-4  p-2 border-b border-gray-100 ">
                            <p class="text-main-text-color text-sm  mb-2">
                                {{ $lesson->title }}
                            </p>

                            <div class="flex items-center gap-10">
                                <a href="{{ route('lesson.page', [$course->id, $lesson->id]) }}"
                                    class="text-main-color text-sm  mb-2 underline font-bold">
                                    Preview
                                </a>

                                <div class="flex items-center gap-2">
                                    <span class="me-2">
                                        <img src="{{ asset('assets/clock-hour.svg') }}" alt="">
                                    </span>
                                    <span class="text-secondary-text-color text-sm">
                                        {{ ceil($lesson->duration_in_seconds / 60) }} minutes
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- instructor section --}}

            <div class="rounded-lg p-10 border border-gray-100 mb-5">
                <h2 class="text-main-color text-2xl font-bold mb-4">Meet your instructor</h2>
                <div class='flex md:flex-row flex-col gap-4'>
                    <div class="instructor-image h-[255px] md:w-[40%] w-full rounded-lg overflow-hidden">
                        <img src="{{ $instructor->avatar_url }}" alt="instructor image" loading="lazy"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="instructor-info">
                        <h3 class=" text-2xl font-bold mb-2">{{ $instructor->name }}</h3>
                        <p class="text-secondary-text-color text-sm mb-2">{{ $instructor->title }}</p>
                        <p class="text-main-text-color text-sm mb-2">{{ $instructor->bio }}</p>

                        <div class="instructor-social">
                            <a href="{{ $instructor->linkedin_url }}" target="_blank"
                                class="bg-main-color text-sm font-bold text-white px-4 py-2 rounded-lg mt-10 inline-block">
                                Visit LinkedIn
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        {{-- course card --}}
        <div class="col-span-1 course-card">
            <div class="p-card rounded-card bg-white shadow-lg md:translate-y-[-60%]">
                <div class="image h-[350px] mb-6">
                    <img src="{{ asset('assets/course-details.png') }}" alt="course name" loading="lazy"
                        class="w-full h-full object-cover">
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
                    Unlock with Subscription
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 640 640">
                        <path fill="#ffffff"
                            d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z" />
                    </svg>
                </a>

                <p class="text-main-text-color text-sm mt-4 text-center">
                    Get access to all courses for 350 EGP.
                </p>

            </div>
        </div>
    </div>

    {{-- related courses section --}}
    <livewire:related-courses :courses="$relatedCourses"></livewire:related-courses>

    {{-- subscriptions section --}}
    <livewire:subscriptions></livewire:subscriptions>
</div>
