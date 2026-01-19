@section('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.8.4/plyr.css" />
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.8.4/plyr.polyfilled.js"></script>
@endsection

<div>
    <div class="page-header p-container-padding py-5 w-full bg-main-color">
        <h1 class="text-section-title font-bold text-white">
            {{ $lesson->title }}
        </h1>
    </div>
    <div class="container p-container-padding py-1">
        <div class="video w-full h-[600px]">
            <video id="player" class="w-full h-full" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="{{ $lesson->video_url }}" type="video/mp4" />
            </video>
        </div>



        {{-- prev/next lesson --}}
        <div class="flex flex-row gap-10 mt-10">
            @if ($prev_lesson)
            <a href="{{ route('lesson.page', [$course->id, $prev_lesson]) }}" class="text-main-color text-sm  mb-2 underline font-bold">
                Previous Lesson
            </a>
            @else
            <span class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                Previous Lesson
            </span>
            @endif

            {{-- next lesson --}}
            @if ($next_lesson)
            <a href="{{ route('lesson.page', [$course->id, $next_lesson]) }}" class="text-main-color text-sm  mb-2 underline font-bold">
                Next Lesson
            </a>
            @else
            <span class="text-main-color text-sm  mb-2 underline font-bold opacity-50 cursor-not-allowed">
                Next Lesson
            </span>
            @endif
           
        </div>

        {{-- lesson info --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10">

            <div class="w-full col-span-2  mb-5">
                <div class='rounded-lg border border-gray-100 mb-5 p-10'>
                    <h2 class="text-2xl font-bold text-main-color">About the Lesson</h2>
                    <p class="text-main-text-color">{{ $lesson->learnings }}</p>
                </div>

                <div x-data="{ expanded: true }" wire:init="lessons">
                    <div class="rounded-lg px-[50px] pt-[30px] border border-gray-100 mb-5">
                        <div class="flex flex-row items-center justify-between cursor-pointer pb-5 text-main-color text-3xl font-bold "
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
            <div class="w-full rounded-lg  border border-gray-100 mb-5 p-10">
                <h2 class="text-2xl font-bold text-main-color">what you will learn</h2>
                <p class="text-secondary-text-color">{{ $lesson->learnings }}</p>
            </div>
        </div>
    </div>
</div>
