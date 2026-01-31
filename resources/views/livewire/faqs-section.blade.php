<div class="container p-4 md:p-container-padding grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
    <div class="section-header flex flex-col items-center md:items-start">
        <h3 class="font-bold text-main-color text-4xl mb-5 text-center md:text-left">Frequently Asked Questions</h3>
        <p class="text-secondary-text-color text-lg text-center md:text-left">Still you have any questions? Contact our
            Team via
            support@Career180.com</p>
        <a href="" class="bg-main-color text-white p-btn-padding rounded-btn-radius mt-10">
            See All FAQ’s
        </a>
    </div>
    <div class="md:col-span-2 " wire:init="getFaqs">
        <div class="w-full" wire:loading>
            <div>
                <x-lazy-faq></x-lazy-faq>
                <x-lazy-faq></x-lazy-faq>
                <x-lazy-faq></x-lazy-faq>
            </div>
        </div>
        <div wire:loading.remove>
            @foreach ($faqs as $faq)
                <livewire:faq-box wire:key="faq-{{ $faq->id }}" :faq="$faq" />
            @endforeach
        </div>
    </div>


</div>
