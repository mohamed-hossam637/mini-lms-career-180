<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name' => 'John Smith',
                'title' => 'Senior Full Stack Developer',
                'bio' => 'John has over 10 years of experience in web development. He specializes in React, Node.js, and Laravel. He has worked with numerous startups and Fortune 500 companies.',
                'linkedin_url' => 'https://linkedin.com/in/johnsmith',
                'avatar_url' => 'https://i.pravatar.cc/150?img=1',
            ],
            [
                'name' => 'Sarah Johnson',
                'title' => 'Mobile App Development Expert',
                'bio' => 'Sarah is a mobile development specialist with expertise in React Native, Flutter, and native iOS/Android development. She has published over 20 apps on app stores.',
                'linkedin_url' => 'https://linkedin.com/in/sarahjohnson',
                'avatar_url' => 'https://i.pravatar.cc/150?img=5',
            ],
            [
                'name' => 'Michael Chen',
                'title' => 'Data Scientist & ML Engineer',
                'bio' => 'Michael holds a PhD in Computer Science and has extensive experience in machine learning, deep learning, and data analysis. He has published numerous research papers.',
                'linkedin_url' => 'https://linkedin.com/in/michaelchen',
                'avatar_url' => 'https://i.pravatar.cc/150?img=12',
            ],
            [
                'name' => 'Emily Davis',
                'title' => 'UI/UX Design Lead',
                'bio' => 'Emily is a creative designer with 8 years of experience in user interface and user experience design. She has designed interfaces for major tech companies and startups.',
                'linkedin_url' => 'https://linkedin.com/in/emilydavis',
                'avatar_url' => 'https://i.pravatar.cc/150?img=9',
            ],
            [
                'name' => 'David Wilson',
                'title' => 'DevOps & Cloud Architect',
                'bio' => 'David is a DevOps engineer specializing in AWS, Docker, Kubernetes, and CI/CD pipelines. He helps companies scale their infrastructure efficiently.',
                'linkedin_url' => 'https://linkedin.com/in/davidwilson',
                'avatar_url' => 'https://i.pravatar.cc/150?img=15',
            ],
            [
                'name' => 'Lisa Anderson',
                'title' => 'Cybersecurity Specialist',
                'bio' => 'Lisa is a cybersecurity expert with certifications in ethical hacking and security analysis. She helps organizations protect their digital assets.',
                'linkedin_url' => 'https://linkedin.com/in/lisaanderson',
                'avatar_url' => 'https://i.pravatar.cc/150?img=20',
            ],
        ];

        foreach ($instructors as $instructor) {
            Instructor::updateOrCreate(
                ['name' => $instructor['name']],
                $instructor
            );
        }
    }
}

