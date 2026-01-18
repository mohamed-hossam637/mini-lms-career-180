<?php

namespace App\Livewire;

use App\Models\FAQ;
use Livewire\Component;

class FaqsSection extends Component
{

    public $faqs = [];

    public function getFaqs()
    {
        $this->faqs = FAQ::limit(5)->get();
    }

    public function render()
    {
        return view('livewire.faqs-section');
    }
}
