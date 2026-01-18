<section class="container p-container-padding bg-section-bg">

    <div class="section-header flex justify-between align-start">
        <div class="title-description">
            <h2 class="text-section-title font-bold text-main-color">
                Courses
            </h2>
            <p class="text-section-desc text-secondary-text-color">
                Extraordinary online learning experience with Experts, to be qualified for the job market necessities
                and vacancies
            </p>
        </div>
        <div class="">
            <a href="/"
                class="inline-block border border-secondary-color  text-secondary-color p-btn-padding rounded-btn-radius bg-white">
                Explore All courses
            </a>
        </div>
    </div>

    <div wire:init="getCategories">

        {{-- loading skeleton --}}

        <div wire:loading wire:target="getCategories">
            <ul class="categories flex flex-row gap-3 pt-5 overflow-x-auto scroll animate-pulse">
                <li class="bg-secondary-text-color w-40  h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
                <li class="bg-secondary-text-color w-40 h-10 rounded-btn-radius"></li>
            </ul>
        </div>

        {{-- categories --}}

        <ul class="categories flex items-center gap-3 pt-5 overflow-x-auto scroll" wire:loading.remove
            wire:target="getCategories">
            @foreach ($categories as $category)
                <li wire:key="{{ $category->id }}" @class([
                    'rounded-btn-radius p-btn-padding bg-white text-main-text-color text-nowrap cursor-pointer hover:bg-main-color hover:text-white transition-all ease-in-out',
                    '!bg-main-color text-white' =>
                        $loop->first || $current_category == $category->id,
                ])
                    wire:click="getCourses({{ $category->id }})">
                    {{ $category->title }}
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <div wire:loading>
            loading..
        </div>
        <div class="courses grid lg:grid-cols-3 sm:grid-cols-2 md:grid-cols-3 gap-6 py-4" wire:loading.remove>
            @if (count($courses) == 0)
                <p>no data</p>
            @else
                @foreach ($courses as $course)
                    <livewire:course-card :course="$course">
                @endforeach
            @endif
        </div>
    </div>

</section>
