<div>
    <div class="page-header p-4 md:p-container-padding py-5 w-full bg-main-color">
        <h1 class="text-xl md:text-section-title font-bold text-white">
            {{ $lesson->title }}
        </h1>
    </div>
    <div class="container p-4 md:p-container-padding py-1">
        <div x-data="videoPlayer()" x-init="init()">
            <div class="video w-full h-auto md:h-[600px]">
                <video id="player" class="w-full h-full" controls>
                    <source src="{{ $lesson->video_url }}" type="video/mp4" />
                </video>
            </div>

            <p class="text-xl font-bold mt-3" x-show="video_ended">you completed this lesson </p>

            {{-- completed modal --}}
            <div x-show="show_completed" @click="close()"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-[500] completed-lesson-container-overlay">
                <div class=" p-5 rounded-lg my-5 bg-white rounded-lg p-5">

                    <div class="flex justify-center w-full mb-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 animate-bounce"
                            viewBox="0 0 512 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="#74C0FC"
                                d="M256 0a256 256 0 1 0 0 512 256 256 0 1 0 0-512zM374.3 233.7L257.7 391.3 141.3 233.7c-9-12.3-19.7-52 14-74.3 29-18.7 56.4-4.3 70.7 12.3 16.4 18.5 48.1 17.4 63.7 0 14.3-16.6 41.7-31 70.3-12.3 34 22.3 23.3 61.9 14.2 74.3z" />
                        </svg>
                    </div>
                    <p class="text-xl font-bold">Good job! you completed this lesson <br> keep going </p>

                    {{-- prev/next lesson --}}
                    <div class="flex flex-row gap-10 mt-10">
                        @if ($prev_lesson)
                            <a href="{{ route('lesson.page', [$course->id, $prev_lesson]) }}"
                                class="text-main-color text-sm  mb-2 underline font-bold">
                                Previous Lesson
                            </a>
                        @else
                            <span
                                class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                                Previous Lesson
                            </span>
                        @endif

                        {{-- next lesson --}}
                        @if ($next_lesson)
                            <a href="{{ route('lesson.page', [$course->id, $next_lesson]) }}"
                                class="text-main-color text-sm  mb-2 underline font-bold">
                                Next Lesson
                            </a>
                        @else
                            <span
                                class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                                Next Lesson
                            </span>
                        @endif

                    </div>
                </div>
            </div>


        </div>

        {{-- prev/next lesson --}}
        <div class="flex flex-row gap-10 mt-10">
            @if ($prev_lesson)
                <a href="{{ route('lesson.page', [$course->id, $prev_lesson]) }}"
                    class="text-main-color text-sm  mb-2 underline font-bold">
                    Previous Lesson
                </a>
            @else
                <span class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                    Previous Lesson
                </span>
            @endif

            {{-- next lesson --}}
            @if ($next_lesson)
                <a href="{{ route('lesson.page', [$course->id, $next_lesson]) }}"
                    class="text-main-color text-sm  mb-2 underline font-bold">
                    Next Lesson
                </a>
            @else
                <span class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                    Next Lesson
                </span>
            @endif

        </div>

        {{-- lesson info --}}
        <div class=" mt-10">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-5">
                <div class='rounded-lg border border-gray-100 mb-5 p-10 col-span-2'>
                    <h2 class="text-2xl font-bold text-main-color">About the Lesson</h2>
                    <p class="text-main-text-color">{{ $lesson->learnings }}</p>
                </div>

                <div class="w-full rounded-lg  border border-gray-100 mb-5 p-10">
                    <h2 class="text-2xl font-bold text-main-color">what you will learn</h2>
                    <p class="text-secondary-text-color">{{ $lesson->learnings }}</p>
                </div>

            </div>

            <div x-data="{ expanded: true }" wire:init="lessons" class="grid grid-cols-1 md:grid-cols-3">
                <div class="col-span-2">
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
                        @foreach ($lessons as $lesson_item)
                            <div class="flex items-center justify-between gap-4  p-2 border-b border-gray-100 ">
                                <p class="text-main-text-color text-sm  mb-2">
                                    {{ $lesson_item->title }}
                                </p>

                                <div class="flex items-center gap-10">
                                    @if ($lesson_item->id == $lesson->id)
                                        <span class="text-main-color text-sm mb-2">
                                            Watching...
                                        </span>
                                    @else
                                        <a href="{{ route('lesson.page', [$course->id, $lesson_item->id]) }}"
                                            class="text-main-color text-sm  mb-2 underline font-bold">
                                            Preview
                                        </a>
                                    @endif

                                    <div class="flex items-center gap-2">
                                        <span class="me-2">
                                            <img src="{{ asset('assets/clock-hour.svg') }}" alt="">
                                        </span>
                                        <span class="text-secondary-text-color text-sm">
                                            {{ ceil($lesson_item->duration_in_seconds / 60) }} minutes
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
