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
        <div class="" >
            <a href="/" class="inline-block border border-secondary-color  text-secondary-color p-btn-padding rounded-btn-radius bg-white">
                Explore All courses
            </a>
        </div>
    </div>

    <ul class="categories flex items-center gap-3 pt-5 overflow-x-auto scroll">
        @foreach ($categories as  $category )
            <li wire:key="{{ $category->id }}" @class([ "rounded-btn-radius p-btn-padding bg-white text-main-text-color text-nowrap cursor-pointer hover:bg-main-color hover:text-white transition-all ease-in-out" , '!bg-main-color text-white' => $loop->first])>
                {{ $category->title }}
            </li>
        @endforeach
    </ul>

</section>
