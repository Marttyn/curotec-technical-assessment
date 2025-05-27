# Installation

1. Clone the repository
2. Run `npm install`
3. Run `composer install`
4. Run `php artisan key:generate`
5. Change the database credentials in `.env` or use `DB_CONNECTION=sqlite`
6. Run `php artisan migrate`
   1. Optional: Run `php artisan db:seed` to seed the database
7. Run vite `npm run dev`
8. Run laravel `php artisan serve`
9. Go to `http://localhost:8000`
