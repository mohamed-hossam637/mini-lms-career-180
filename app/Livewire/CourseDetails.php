<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseDetails extends Component
{

    public $course;

    public $lessons = [];

    public $instructor;

    public $relatedCourses = [];


    public function mount(Course $course)
    {
        $this->course = $course;
        $this->lessons = $course->lessons()->get();
        $this->instructor = $course->instructor;
        $this->getRelatedCourses();
    }

    public function getRelatedCourses()
    {
        $this->relatedCourses = Course::where('category_id', $this->course->category_id)->where('id', '!=', $this->course->id)->get();
    }

    
    public function render()
    {
        return view('livewire.course-details');
    }
}
