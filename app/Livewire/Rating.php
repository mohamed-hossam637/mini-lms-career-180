<?php

namespace App\Livewire;

use Livewire\Component;

class Rating extends Component
{

    public $rating;
    public $stars;

    public function mount($rating)
    {
        $rate = round($rating) ;
        $this->rating =  $rate;
        $this->stars = $rate == 5 ? 0 : 5 - $rate ;
    }

    public function render()
    {
        return view('livewire.rating');
    }
}
