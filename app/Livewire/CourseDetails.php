<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseDetails extends Component
{

    public $course;

    public $lessons = [];

    public $instructor;


    public function mount(Course $course)
    {
        $this->course = $course;
        $this->lessons = $course->lessons()->get();
        $this->instructor = $course->instructor;
    }

    
    public function render()
    {
        return view('livewire.course-details');
    }
}
