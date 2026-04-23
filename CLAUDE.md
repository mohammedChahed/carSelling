# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Laravel 12 application (PHP 8.2+) with Vite + Tailwind CSS 4 for frontend assets.

## Commands

```bash
# Install dependencies and setup
composer setup              # Full setup: install deps, create .env, generate key, migrate, npm install, build

# Development
composer dev                # Run server, queue, logs, and Vite dev server concurrently
php artisan serve           # Start development server
php artisan queue:listen    # Process queue jobs
php artisan pail            # View real-time logs

# Testing
composer test               # Run all tests
php artisan test            # Run PHPUnit tests
php artisan test --filter=ExampleTest  # Run specific test

# Linting
./vendor/bin/pint           # Format code with Laravel Pint
```

## Architecture

- **Routes**: `routes/web.php` - Two GET routes (`/` and `/hello`) mapped to controllers
- **Controllers**: `app/Http/Controllers/` - `HomeController` and `HelloController` extend base `Controller`
- **Views**: `resources/views/` - Blade templates in subdirectories (`home/`, `hello/`)
- **Models**: `app/Models/` - Standard Laravel Eloquent models
- **Tests**: `tests/Feature/` for integration tests, `tests/Unit/` for unit tests

## Frontend

- Vite bundler with `laravel-vite-plugin`
- Tailwind CSS 4 (via `@tailwindcss/vite` plugin)
- Entry points: `resources/css/app.css`, `resources/js/app.js`
- Build: `npm run build` | Dev: `npm run dev`

## Testing Configuration

- PHPUnit 11 with in-memory SQLite for tests
- Test environment uses array cache, file maintenance driver, sync queue
- Coverage includes `app/` directory
