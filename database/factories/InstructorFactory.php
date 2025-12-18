<?php

namespace Database\Factories;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    protected $model = Instructor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'title' => fake()->jobTitle(),
            'bio' => fake()->paragraph(3),
            'linkedin_url' => 'https://linkedin.com/in/' . fake()->userName(),
            'avatar_url' => fake()->imageUrl(200, 200, 'people'),
        ];
    }
}

