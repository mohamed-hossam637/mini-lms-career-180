<?php

namespace App\Livewire;

use Livewire\Component;

class FaqBox extends Component
{
    public $faq;

    public function mount($faq)
    {
        $this->faq = $faq;
    }

    public function render()
    {
        return view('livewire.faq-box');
    }
}
