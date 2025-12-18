<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\Level;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Complete Web Development Bootcamp',
                'description' => 'Learn full-stack web development from scratch. Master HTML, CSS, JavaScript, React, Node.js, and MongoDB. Build real-world projects and get job-ready.',
                'category' => 'Web Development',
                'instructor' => 'John Smith',
                'level' => 'Beginner',
                'ratings' => 4.8,
                'is_featured' => true,
                'who_takes_this_course' => [
                    'Beginners who want to start a career in web development',
                    'Students looking to build their first web applications',
                    'Anyone wanting to switch careers to tech',
                ],
            ],
            [
                'title' => 'React Native Mobile App Development',
                'description' => 'Build native mobile apps for iOS and Android using React Native. Learn to create professional mobile applications with modern tools and best practices.',
                'category' => 'Mobile Development',
                'instructor' => 'Sarah Johnson',
                'level' => 'Intermediate',
                'ratings' => 4.7,
                'is_featured' => true,
                'who_takes_this_course' => [
                    'Developers with JavaScript experience',
                    'Web developers wanting to build mobile apps',
                    'Anyone interested in cross-platform development',
                ],
            ],
            [
                'title' => 'Machine Learning Fundamentals',
                'description' => 'Introduction to machine learning concepts, algorithms, and practical applications. Learn Python, scikit-learn, TensorFlow, and build ML models from scratch.',
                'category' => 'Machine Learning',
                'instructor' => 'Michael Chen',
                'level' => 'Intermediate',
                'ratings' => 4.9,
                'is_featured' => true,
                'who_takes_this_course' => [
                    'Programmers interested in AI and ML',
                    'Data analysts wanting to learn ML',
                    'Students studying computer science',
                ],
            ],
            [
                'title' => 'UI/UX Design Masterclass',
                'description' => 'Master the art of user interface and user experience design. Learn design principles, prototyping, user research, and create stunning interfaces.',
                'category' => 'UI/UX Design',
                'instructor' => 'Emily Davis',
                'level' => 'Beginner',
                'ratings' => 4.6,
                'is_featured' => false,
                'who_takes_this_course' => [
                    'Aspiring designers',
                    'Developers wanting to improve their design skills',
                    'Anyone interested in creating better user experiences',
                ],
            ],
            [
                'title' => 'AWS Cloud Architecture & DevOps',
                'description' => 'Learn to design and deploy scalable cloud infrastructure on AWS. Master DevOps practices, Docker, Kubernetes, and CI/CD pipelines.',
                'category' => 'DevOps',
                'instructor' => 'David Wilson',
                'level' => 'Advanced',
                'ratings' => 4.8,
                'is_featured' => true,
                'who_takes_this_course' => [
                    'System administrators',
                    'Developers wanting to learn DevOps',
                    'IT professionals looking to advance their careers',
                ],
            ],
            [
                'title' => 'Ethical Hacking & Penetration Testing',
                'description' => 'Learn ethical hacking techniques and penetration testing. Understand security vulnerabilities and how to protect systems from attacks.',
                'category' => 'Cybersecurity',
                'instructor' => 'Lisa Anderson',
                'level' => 'Advanced',
                'ratings' => 4.7,
                'is_featured' => false,
                'who_takes_this_course' => [
                    'Security professionals',
                    'System administrators',
                    'Developers wanting to secure their applications',
                ],
            ],
            [
                'title' => 'Python Programming for Data Science',
                'description' => 'Learn Python programming specifically for data science. Master pandas, numpy, matplotlib, and work with real-world datasets.',
                'category' => 'Data Science',
                'instructor' => 'Michael Chen',
                'level' => 'Beginner',
                'ratings' => 4.5,
                'is_featured' => false,
                'who_takes_this_course' => [
                    'Beginners to programming',
                    'Analysts wanting to learn Python',
                    'Anyone interested in data analysis',
                ],
            ],
            [
                'title' => 'Advanced React Patterns & Performance',
                'description' => 'Deep dive into advanced React patterns, performance optimization, and best practices. Learn hooks, context, state management, and more.',
                'category' => 'Web Development',
                'instructor' => 'John Smith',
                'level' => 'Advanced',
                'ratings' => 4.9,
                'is_featured' => false,
                'who_takes_this_course' => [
                    'Experienced React developers',
                    'Developers wanting to optimize their React apps',
                    'Senior frontend engineers',
                ],
            ],
        ];

        foreach ($courses as $courseData) {
            $category = Category::where('title', $courseData['category'])->first();
            $instructor = Instructor::where('name', $courseData['instructor'])->first();
            $level = Level::where('title', $courseData['level'])->first();

            if ($category && $instructor && $level) {
                Course::updateOrCreate(
                    ['title' => $courseData['title']],
                    [
                        'title' => $courseData['title'],
                        'description' => $courseData['description'],
                        'category_id' => $category->id,
                        'instructor_id' => $instructor->id,
                        'level_id' => $level->id,
                        'ratings' => $courseData['ratings'],
                        'is_featured' => $courseData['is_featured'],
                        'who_takes_this_course' => $courseData['who_takes_this_course'],
                    ]
                );
            }
        }
    }
}

