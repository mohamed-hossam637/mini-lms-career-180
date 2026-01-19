<section class="container p-container-padding bg-section-bg">

    <div class="section-header flex justify-between align-start">
        <div class="title-description">
            <h2 class="text-section-title font-bold text-main-color">
                Related Courses
            </h2>
        </div>
        <div class="">
            <a href="/"
                class="inline-block border border-secondary-color  text-secondary-color p-btn-padding rounded-btn-radius bg-white">
                Explore All courses
            </a>
        </div>
    </div>


    <div>
        <div class="w-full" wire:loading>
            <div class="courses grid lg:grid-cols-3 sm:grid-cols-2 md:grid-cols-3 gap-6 py-4 w-full">
                <livewire:lazy-card></livewire:lazy-card>
                <livewire:lazy-card></livewire:lazy-card>
                <livewire:lazy-card></livewire:lazy-card>
            </div>
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
