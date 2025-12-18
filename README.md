# LMS (Learning Management System)

A modern Learning Management System built with Laravel 12 and Filament 4.0. This application provides a comprehensive admin panel for managing courses, instructors, lessons, categories, levels, and FAQs.

## Features

- 🎓 **Course Management**: Create and manage courses with descriptions, ratings, and featured status
- 👨‍🏫 **Instructor Management**: Manage instructors with profiles, bios, and social links
- 📚 **Lesson Management**: Organize lessons within courses with video content
- 🏷️ **Category & Level System**: Organize courses by categories and difficulty levels
- ❓ **FAQ Management**: Manage frequently asked questions
- 🔐 **Admin Panel**: Beautiful Filament admin interface for all operations
- 🎬 **Video Integration**: Support for video lessons with sample video URLs

## Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x and NPM
- SQLite (default) or MySQL/PostgreSQL
- Web server (Apache/Nginx) or PHP built-in server

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd lms-project
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Environment Setup

Copy the environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database

The project uses SQLite by default. If you want to use SQLite (recommended for development), ensure the database file exists:

```bash
touch database/database.sqlite
```

Or configure MySQL/PostgreSQL in your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lms
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Seed the Database

Seed the database with sample data including admin user, categories, levels, instructors, courses, lessons, and FAQs:

```bash
php artisan db:seed
```

This will create:
- **Admin User**: 
  - Email: `admin@admin.com`
  - Password: `password`
- **10 Categories**: Web Development, Mobile Development, Data Science, etc.
- **4 Levels**: Beginner, Intermediate, Advanced, Expert
- **6 Instructors**: With profiles and bios
- **8 Courses**: With descriptions, ratings, and relationships
- **Lessons**: 5-12 lessons per course with video URLs
- **12 FAQs**: Common questions and answers

### 7. Install Frontend Dependencies

```bash
npm install
```

### 8. Build Frontend Assets

```bash
npm run build
```

Or for development with hot reload:

```bash
npm run dev
```

### 9. Start the Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Accessing the Admin Panel

1. Navigate to `/admin` in your browser
2. Login with the admin credentials:
   - **Email**: `admin@admin.com`
   - **Password**: `password`

## Project Structure

```
lms-project/
├── app/
│   ├── Filament/Admin/Resources/    # Filament admin resources
│   │   ├── Categories/              # Category resource
│   │   ├── Courses/                 # Course resource with Lessons relation
│   │   ├── FAQs/                    # FAQ resource
│   │   ├── Instructors/             # Instructor resource
│   │   └── Levels/                  # Level resource
│   └── Models/                      # Eloquent models
├── database/
│   ├── factories/                   # Model factories
│   ├── migrations/                  # Database migrations
│   └── seeders/                      # Database seeders
└── resources/
    └── views/                       # Blade templates
```

## Available Resources

The admin panel includes the following resources:

### Categories
- Manage course categories
- Fields: Title

### Levels
- Manage course difficulty levels
- Fields: Title (Beginner, Intermediate, Advanced, Expert)

### Instructors
- Manage instructor profiles
- Fields: Name, Title, Bio, LinkedIn URL, Avatar URL

### Courses
- Manage courses with full CRUD operations
- Fields: Title, Description, Instructor, Category, Level, Ratings, Featured Status
- Special Field: "Who Takes This Course" (array of strings)
- Relation: Lessons (manage lessons directly from course page)

### Lessons
- Manage lessons within courses
- Fields: Title, Learnings, Video URL, Duration, Published Status
- Accessible via Course relation manager

### FAQs
- Manage frequently asked questions
- Fields: Question, Answer

## Database Seeding

### Seed All Data

```bash
php artisan db:seed
```

### Seed Individual Seeders

You can also run individual seeders:

```bash
# Seed only categories
php artisan db:seed --class=CategorySeeder

# Seed only courses
php artisan db:seed --class=CourseSeeder

# Seed only FAQs
php artisan db:seed --class=FAQSeeder
```

### Fresh Migration with Seeding

To reset the database and reseed:

```bash
php artisan migrate:fresh --seed
```

## Using Factories

The project includes factories for all models. You can use them in Tinker or tests:

```php
// Create a single course
Course::factory()->create();

// Create multiple courses
Course::factory()->count(10)->create();

// Create a course with related models
$course = Course::factory()->create();
$lesson = Lesson::factory()->for($course)->create();
```

## Development

### Running Tests

The project uses Pest for testing:

```bash
php artisan test
```

### Code Style

The project uses Laravel Pint for code formatting:

```bash
./vendor/bin/pint
```

### Development Scripts

Use the provided composer scripts:

```bash
# Setup project (install dependencies, migrate, build assets)
composer setup

# Run development server with hot reload
composer dev

# Run tests
composer test
```

## Key Features Explained

### Course "Who Takes This Course" Field

This field stores an array of strings describing the target audience. The system automatically handles conversion between:
- **Storage**: Simple array `["text1", "text2"]`
- **Form Display**: Repeater format for easy editing
- **View Display**: Simple array for foreach loops

### Video URLs

Lessons use sample video URLs from Google's sample video bucket. These are real, working video URLs that can be used for testing and development.

### Relations

- **Course** belongs to: Instructor, Category, Level
- **Course** has many: Lessons
- **Lesson** belongs to: Course
- **Category** has many: Courses
- **Level** has many: Courses
- **Instructor** has many: Courses

## Troubleshooting

### Permission Issues

If you encounter permission issues with storage:

```bash
php artisan storage:link
chmod -R 775 storage bootstrap/cache
```

### Database Connection Issues

Ensure your database is properly configured in `.env` and the database exists:

```bash
# For SQLite
touch database/database.sqlite

# For MySQL/PostgreSQL, create the database first
```

### Clear Cache

If you encounter caching issues:

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests and ensure code style compliance
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For issues and questions, please open an issue on the repository.
