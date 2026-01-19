# LMS (Learning Management System)

## Setup

### Requirements
- PHP ^8.1
- Composer
- Node.js & npm
- MySQL

### Installation

```bash
git clone https://github.com/mohamed-hossam637/mini-lms-career-180
cd repo
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
php artisan serve
```

## What I Focused On

- Creating a shared layout that can be reused across all pages to ensure a consistent design and avoid layout code duplication
- Separating reusable UI parts into standalone components to improve reusability and maintainability
- Using Alpine.js for lightweight frontend interactions such as FAQ accordions
- Leveraging Livewire and Laravel Blade to handle component logic and dynamic UI updates
- use splide.js to create home page hero section carousel 
- try to create tailwind design system by adding classes on tailwind.config.js

## Assumptions & Tradeoffs

- Used Splide.js for the hero section slider instead of building it with Alpine.js to reduce implementation complexity and ensure better slider performance and accessibility
- Replaced the static About section from the Figma design with a short video to increase user engagement

## If I Had More Time

- add more Alpine interactions
- Improve UI animations and transitions
- Integrate Plyr lifecycle using x-init / x-ref
- Slider in the home page using Alpine.js
- in lesson page add “Mark as completed” button (UI interaction only) 
- improve empty state UI
