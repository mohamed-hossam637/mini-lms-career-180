<div class="flex items-center gap-1">
    {{-- active stars --}}
    @for ($i = 0; $i < $rating; $i++)
        <img src="{{ asset('assets/active-star.svg') }}" alt="">
    @endfor

    {{-- not active stars --}}
    @for ($i = 0; $i < $stars; $i++)
        <img src="{{ asset('assets/not-active-star.svg') }}" alt="">
    @endfor

</div>
