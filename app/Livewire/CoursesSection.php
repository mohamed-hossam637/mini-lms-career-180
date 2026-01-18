<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Course;
use Livewire\Component;

class CoursesSection extends Component
{
    public $courses = [];
    public $current_category ;

    public $categories = [];

    public function getCourses(Category $category)
    {
        $this->current_category = $category->id ;
        $this->courses = $category->courses;
    }

    public function getCategories() {
        $this->categories = Category::all() ;
        $this->getCourses($this->categories[0]) ;
    }

    public function render()
    {
        return view('livewire.courses-section');
    }
}
