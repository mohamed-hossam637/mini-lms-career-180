<div class="rounded-lg px-4 md:px-[50px] pt-[30px] border border-gray-100 mb-5" x-data="{ expanded: false }">
    <div class="flex flex-row items-center justify-between cursor-pointer pb-5" @click="expanded = ! expanded" x-bind:class="{ 'border-b border-gray-100': expanded }">
        {{ $faq->question }}
        <div class="w-[50px] h-[50px] bg-gray-200 p-btn-padding rounded-lg flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" x-bind:class="{ 'rotate-180': expanded }" class="transition-all duration-500 ease-in-out">
                <path
                    d="M297.4 470.6C309.9 483.1 330.2 483.1 342.7 470.6L534.7 278.6C547.2 266.1 547.2 245.8 534.7 233.3C522.2 220.8 501.9 220.8 489.4 233.3L320 402.7L150.6 233.4C138.1 220.9 117.8 220.9 105.3 233.4C92.8 245.9 92.8 266.2 105.3 278.7L297.3 470.7z" />
            </svg>
        </div>
    </div>
    <div class="accordion-content " x-show="expanded" x-collapse.duration.500ms>
        <p class=" py-4 text-gray-600">
            {{ $faq->answer }}
        </p>
    </div>
</div>
