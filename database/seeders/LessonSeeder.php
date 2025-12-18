<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Available video URLs from the media JSON
     */
    protected array $videoUrls = [
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/Sintel.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/SubaruOutbackOnStreetAndDirt.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/TearsOfSteel.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/VolkswagenGTIReview.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WeAreGoingOnBullrun.mp4',
        'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/WhatCarCanYouGetForAGrand.mp4',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            $lessonCount = rand(5, 12); // Each course gets 5-12 lessons

            for ($i = 1; $i <= $lessonCount; $i++) {
                Lesson::create([
                    'course_id' => $course->id,
                    'title' => $this->generateLessonTitle($course->title, $i),
                    'learnings' => $this->generateLearnings(),
                    'video_url' => $this->getRandomVideoUrl(),
                    'duration_in_seconds' => rand(600, 3600), // 10 minutes to 1 hour
                    'is_published' => rand(1, 10) <= 8, // 80% published
                ]);
            }
        }
    }

    private function generateLessonTitle(string $courseTitle, int $lessonNumber): string
    {
        $topics = [
            'Introduction',
            'Getting Started',
            'Fundamentals',
            'Core Concepts',
            'Advanced Topics',
            'Best Practices',
            'Real-World Examples',
            'Hands-On Project',
            'Troubleshooting',
            'Next Steps',
            'Summary',
            'Conclusion',
        ];

        $topic = $topics[min($lessonNumber - 1, count($topics) - 1)] ?? 'Lesson ' . $lessonNumber;
        
        return $topic . ' - ' . $courseTitle;
    }

    private function generateLearnings(): string
    {
        $learnings = [
            'Understanding the core concepts and fundamentals',
            'Learning best practices and industry standards',
            'Building practical projects and applications',
            'Mastering advanced techniques and patterns',
            'Exploring real-world use cases and examples',
            'Implementing solutions to common problems',
            'Optimizing performance and efficiency',
            'Understanding security considerations',
        ];

        $selected = array_rand($learnings, rand(3, 5));
        $selected = is_array($selected) ? $selected : [$selected];
        
        return implode("\n\n", array_map(fn($idx) => $learnings[$idx], $selected));
    }

    private function getRandomVideoUrl(): string
    {
        return $this->videoUrls[array_rand($this->videoUrls)];
    }
}

