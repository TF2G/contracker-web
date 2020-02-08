# contracker-web

Web frontend for TF2G+ ConTracker. Uses the [contracker-api](https://github.com/scoliono/contracker-api) repo as a backend.

## Installation

- Install requirements for Laravel 6

- `composer install`

- Set up a SQL database

- `php artisan key:generate`

- Configure `.env`

- `php artisan migrate`

- Serve with Apache 2 to take advantage of `.htaccess` files. Regardless of what web server you use, only the `public` directory should be public; make a symlink to there in your document root if needed.

