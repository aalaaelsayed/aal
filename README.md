<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Basic Blog System
This is a simple blog system built using Laravel, a popular PHP web application framework. It allows users to view, create, edit, and delete blog posts.

## Table of Contents
- ** Installation
- ** Database Setup
- ** Usage
- ** Listing All Posts
- ** Viewing a Single Post
- ** Creating a New Post
- ** Editing a Post
- ** Deleting a Post
- ** Contributing
- ** License
## Installation
- ** Clone the repository:
 git clone https://github.com/your-username/basic-blog-system.git

- ** Navigate to the project directory:
cd basic-blog-system

- ** Install the project dependencies using Composer:
composer install

- ** Create a copy of the .env.example file and rename it to .env. Update the database connection details in the .env file.

- ** Generate a new application key:
php artisan key:generate

- ** Run the database migrations to set up the tables:
php artisan migrate

- **(Optional) Seed the database with some sample data:
php artisan db:seed

- ** Start the development server:
php artisan serve

- **Access the application in your web browser at http://localhost:8000.
## Database Setup
The blog system uses a MySQL database named BlogDB with a single table called posts. The table structure is as follows:
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
The database setup is handled automatically by the Laravel migrations. You can find the migration file in the database/migrations directory.

## Usage
Listing All Posts
The homepage (/) displays a list of all blog posts.

## Viewing a Single Post
Click on the title of a post to view its details on the /posts/{id} page.

## Creating a New Post
Click the "New Post" button to navigate to the /posts/create page, where you can fill out the form and submit a new blog post.

## Editing a Post
On the post details page (/posts/{id}), click the "Edit" button to navigate to the /posts/{id}/edit page, where you can update the post's title and content.

## Deleting a Post
On the post details page (/posts/{id}), click the "Delete" button to remove the post from the database.

## Contributing
If you would like to contribute to this project, please follow these steps:

- ** Fork the repository.
- ** Create a new branch for your feature or bug fix.
- ** Make your changes and commit them.
- ** Push your changes to your forked repository.
- ** Submit a pull request to the original repository.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).