<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I enroll in a course?',
                'answer' => 'To enroll in a course, simply browse our course catalog, select the course you\'re interested in, and click the "Enroll Now" button. You\'ll be guided through the enrollment process, which includes creating an account if you don\'t have one already.',
            ],
            [
                'question' => 'Are the courses self-paced or scheduled?',
                'answer' => 'Most of our courses are self-paced, meaning you can learn at your own speed and access the content whenever it\'s convenient for you. However, some courses may have scheduled live sessions or deadlines, which will be clearly indicated in the course description.',
            ],
            [
                'question' => 'Do I get a certificate upon completion?',
                'answer' => 'Yes! Upon successful completion of a course, you\'ll receive a certificate of completion that you can download and share on your LinkedIn profile or resume. Certificates are issued automatically once you complete all course requirements.',
            ],
            [
                'question' => 'Can I access courses on mobile devices?',
                'answer' => 'Absolutely! Our platform is fully responsive and works on all devices including smartphones and tablets. You can download our mobile app for iOS and Android for an even better mobile learning experience.',
            ],
            [
                'question' => 'What if I need help during a course?',
                'answer' => 'We offer multiple support channels including course discussion forums, direct messaging with instructors, and our support team. Instructors typically respond within 24-48 hours, and our support team is available to help with any technical issues.',
            ],
            [
                'question' => 'Can I get a refund if I\'m not satisfied?',
                'answer' => 'Yes, we offer a 30-day money-back guarantee. If you\'re not satisfied with your course purchase, you can request a full refund within 30 days of enrollment, no questions asked.',
            ],
            [
                'question' => 'Are there any prerequisites for courses?',
                'answer' => 'Prerequisites vary by course. Some courses are designed for complete beginners, while others may require prior knowledge. Check the course description and "Who Takes This Course" section for specific requirements. Course levels (Beginner, Intermediate, Advanced) are also clearly indicated.',
            ],
            [
                'question' => 'How long do I have access to course materials?',
                'answer' => 'Once enrolled, you have lifetime access to the course materials. This means you can revisit the content, review lessons, and access updates at any time, even after completing the course.',
            ],
            [
                'question' => 'Do courses include hands-on projects?',
                'answer' => 'Yes! Most of our courses include practical projects and exercises that allow you to apply what you\'ve learned. These projects help build your portfolio and demonstrate your skills to potential employers.',
            ],
            [
                'question' => 'Can I preview course content before enrolling?',
                'answer' => 'Yes, you can preview free sample lessons from any course. Simply click on a course to view its details page, where you\'ll find preview videos and a course curriculum overview.',
            ],
            [
                'question' => 'Are there any discounts or promotions available?',
                'answer' => 'We regularly offer promotions and discounts on our courses. Sign up for our newsletter to stay updated on special offers, flash sales, and bundle deals. We also offer discounts for students and bulk purchases.',
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept all major credit cards, debit cards, PayPal, and in some regions, we also accept bank transfers. All payments are processed securely through our encrypted payment gateway.',
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::updateOrCreate(
                ['question' => $faq['question']],
                $faq
            );
        }
    }
}

