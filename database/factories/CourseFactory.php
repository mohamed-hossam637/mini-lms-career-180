<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(5),
            'instructor_id' => Instructor::factory(),
            'category_id' => Category::factory(),
            'level_id' => Level::factory(),
            'ratings' => fake()->randomFloat(2, 0, 5),
            'is_featured' => fake()->boolean(30),
            'who_takes_this_course' => [
                fake()->sentence(),
                fake()->sentence(),
                fake()->sentence(),
            ],
        ];
    }
}

