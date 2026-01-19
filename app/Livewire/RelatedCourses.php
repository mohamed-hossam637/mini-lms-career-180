<?php

namespace App\Livewire;

use Livewire\Component;

class RelatedCourses extends Component
{

    public $courses;

    public function mount($courses)
    {
        $this->courses = $courses;
    }

    public function render()
    {
        return view('livewire.related-courses');
    }
}
