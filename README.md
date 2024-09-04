# Laravel 10.x blog

The purpose of this repository is to show good development practices on [Laravel](http://laravel.com/) as well as to present cases of use of the framework's features like:

## Installation

To create your development environment [follow these instructions](https://laravel.com/docs/10.x/installation).

Setting up your development environment on your local machine:
```bash
$ git clone https://github.com/abdullah-alfar/laravel_blog_task
$ cd laravel_blog_task
$ cp .env.example .env
$ php artisan key:generate
$ php artisan horizon:install
$ php artisan telescope:install
$ php artisan storage:link
```

### Mailer

You can use [Mailpit](https://github.com/axllent/mailpit) to test your emails in development.

Once installed, open [http://localhost:8025](http://localhost:8025).

## Before starting
You need to run the migrations with the seeds :
```bash
$ php artisan migrate --seed
```

This will create a new user that you can use to sign in :
```yml
email: admin@admin.com
password: 123123
```

And then, compile the assets :
```bash
$ yarn dev # or yarn watch
```

Generating fake data :
```bash
$ php artisan db:seed --class=DevDatabaseSeeder
```

Discover package
```bash
$ php artisan package:discover
```

In development environment, rebuild the database :
```bash
$ php artisan migrate:fresh --seed
```
