# SlimApplication
A simple boilerplate PHP app that makes uses of the Slim 4 framework and various other packages.

# Installation
The installation process is very simple. First you need to make sure that you have composer installed, and that you're running PHP 7.4.0 or greater.

To install all packages:
```
$ composer install
```

To start the dev server:
```
$ cd public/
$ php -S 127.0.0.1:8080
```

# Installed packages and dependencies
This boilerplate app setup comes with several backend packages and technologies that hopefully will give your future application a bit more of structure, and makes it overall easier to develop it.

## Vlucas/PHPDotenv
This package enables your application to load variables from a .env file. Upon creating a .env in the root of your project (the same folder as this readme.md file is located in) the variables within that file will be loaded into your application.

[Read more about this package.](https://github.com/vlucas/phpdotenv)

## Illuminate/Database
This package enables your application to make use of the models and query builder of the Laravel framework.

Documentation can be found at the offical Laravel website.

* [Models](https://laravel.com/docs/7.x/eloquent)
* [Query builder](https://laravel.com/docs/7.x/queries)

[Read more about this package](https://github.com/illuminate/database)

## Slim 4
This framework enables your application to makes use of:
* Routing
* Controllers
* Middleware
* Dependency container

[Read more about Slim 4](http://www.slimframework.com/docs/v4/)

## Phinx
This package enables you to make use of database migrations and seeders.

[Read more about Phinx](https://phinx.org/)