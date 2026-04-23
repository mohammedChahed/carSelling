# Car Selling

Car Selling is a Laravel-based car marketplace project focused on browsing, searching, and showcasing vehicle listings. The app includes a landing page, search experience, car listing pages, a car detail view, and authentication screens for sign up and sign in.

## Features

- Landing page with featured content and latest cars
- Advanced car search UI with filters for maker, model, type, year, price, and mileage
- Car listing and detail pages
- Add-car form for creating new listings
- Sign up and sign in pages
- Built with Laravel 12, Vite, and Tailwind CSS 4

## Tech Stack

- PHP 8.2+
- Laravel 12
- Vite
- Tailwind CSS 4
- PHPUnit 11

## Project Structure

- `app/Http/Controllers` - request handling for the home page, car pages, and auth screens
- `app/Models` - Eloquent models for cars, makers, models, cities, fuel types, and related data
- `resources/views` - Blade templates for the home page, car pages, auth pages, and shared components
- `routes/web.php` - application routes
- `database/migrations` - database schema definitions
- `database/factories` - factories for seeding and testing

## Routes

- `/` - home page
- `/signup` - sign up page
- `/signin` - sign in page
- `/show` - car detail page
- `/create` - add-car form
- `/cars` - car listings page
- `/search` - car search page

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm
- A supported database such as SQLite, MySQL, or PostgreSQL

## Installation

1. Clone the repository.
2. Install PHP dependencies with `composer install`.
3. Copy `.env.example` to `.env` and generate an app key with `php artisan key:generate`.
4. Configure your database in `.env`.
5. Run migrations with `php artisan migrate`.
6. Install frontend dependencies with `npm install`.
7. Build assets with `npm run build` or start the Vite dev server with `npm run dev`.

## Quick Start

For a full local setup, run:

```bash
composer setup
```

To run the app in development mode:

```bash
composer dev
```

## Testing

Run the test suite with:

```bash
composer test
```

## Notes

- Some pages are currently presentation-focused and may use static sample content while the backend is expanded.
- The project already includes Eloquent models, factories, and migrations to support a full marketplace workflow.

## License

This project is open-sourced software licensed under the MIT license.
