# Installation

1. Clone the repository
2. Run `npm install`
3. Run `composer install`
4. Run `php artisan key:generate`
5. Copy the `.env.example` file to `.env`
6. Change the database credentials in `.env` or use `DB_CONNECTION=sqlite`
7. Run `php artisan migrate`
   1. Optional: Run `php artisan db:seed` to seed the database
8. Run vite `npm run dev`
9. Run laravel `php artisan serve`
10. Go to `http://localhost:8000`
