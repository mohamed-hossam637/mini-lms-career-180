<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Web Development',
            'Mobile Development',
            'Data Science',
            'Machine Learning',
            'UI/UX Design',
            'DevOps',
            'Cybersecurity',
            'Cloud Computing',
            'Programming Languages',
            'Database Management',
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['title' => $category],
                ['title' => $category]
            );
        }
    }
}

