# Curotec Assessment

A simple application built with Laravel that allows users to create posts and add comments. This application demonstrates basic CRUD operations and follows MVC architecture.

## Features

- Create, read, and view blog posts
- Add comments to posts
- Responsive design
- Paginated listing
- Clean and intuitive user interface

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/SQLite (or any other database supported by Laravel)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Marttyn/curotec-technical-assessment.git
   cd curotec-technical-assessment
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies:
   ```bash
   npm install
   ```

4. Create a copy of the environment file:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Configure your database in `.env`:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
   
   Or use SQLite for development:
   ```bash
   DB_CONNECTION=sqlite
   ```

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. (Optional) Seed the database with sample data:
   ```bash
   php artisan db:seed
   ```

9. Start the Vite development server (in a new terminal):
   ```bash
   npm run dev
   ```

10. Start the Laravel development server:
    ```bash
    php artisan serve
    ```

11. Open your browser and navigate to:
    ```
    http://localhost:8000
    ```

## Project Structure

- `app/Http/Controllers` - Contains the application controllers
- `app/Models` - Contains the Eloquent models
- `database/migrations` - Contains database migrations
- `resources/views` - Contains the Blade templates
- `public` - Publicly accessible files
- `routes` - Contains all application routes

## Database Schema

### Posts
- id (Primary Key)
- title (string)
- content (text)
- author (string)
- timestamps (created_at, updated_at)

### Post Comments
- id (Primary Key)
- content (text)
- post_id (Foreign Key to posts)
- timestamps (created_at, updated_at)

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
