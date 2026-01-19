<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class LessonPage extends Component
{
    public $course;
    public $lesson;
    public $lessons;

    public $prev_lesson = null ;
    public $next_lesson = null ;

    public function mount(Course $course, Lesson $lesson)
    {
        $this->course = $course;
        $this->lesson = $lesson;
        $this->lessons = $course->lessons;

        foreach ($this->lessons as $key => $lesson_item) {
            if ($lesson_item->id == $lesson->id) {
                $this->prev_lesson = $this->lessons[$key - 1] ?? null;
                $this->next_lesson = $this->lessons[$key + 1] ?? null;
            }
        }

    }

    public function render()
    {
        return view('livewire.lesson-page');
    }
}
