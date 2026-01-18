<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CoursesSection extends Component
{

    public function render()
    {
        return view('livewire.courses-section' , [
            'categories' => Category::all()
        ]);
    }
}
