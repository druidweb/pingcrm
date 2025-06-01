# Ping CRM

A demo application to illustrate how Inertia.js works.

![](https://raw.githubusercontent.com/druidweb/pingcrm/main/screenshot.png)

This version is completely updated to use

- Laravel 12.x
- PHP 8.3
- Inertia 2.x
- Vue 3.x
- Vite 6.x
- Tailwind 4.x
- Pest 3.x

Special thanks to the following people for their PR contributions to the original `inertiajs/pingcrm` repository:

- [Billy Bouman](https://github.com/BillyBouman-2B-IT)
- [Martin Chevignard](https://github.com/mchev)
- [Kajal Kumar Das](https://github.com/kajal452)
- [Nathan Taylor](https://github.com/ntaylor-86)

Your pull requests to the original repository were very valuable and much appreicated. Thank you!

## Installation

Clone the repo locally:

```sh
git clone https://github.com/druidweb/pingcrm.git pingcrm
cd pingcrm
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Ping CRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the Ping CRM tests, run:

```
php artisan test
```
