<div class="container p-container-padding grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
    <div class="section-header flex flex-col items-start">
        <h3 class="font-bold text-main-color text-4xl mb-5">Frequently Asked Questions</h3>
        <p class="text-secondary-text-color text-lg">Still you have any questions? Contact our Team via
            support@Career180.com</p>
        <a href="" class="bg-main-color text-white p-btn-padding rounded-btn-radius mt-10">
            See All FAQ’s
        </a>
    </div>
    <div class="col-span-2 " wire:init="getFaqs">
        <div wire:loading>
            loading..
        </div>
        <div wire:loading.remove>
            @foreach ($faqs as $faq)
                <livewire:faq-box wire:key="faq-{{ $faq->id }}" :faq="$faq" />
            @endforeach
        </div>
    </div>
</div>
