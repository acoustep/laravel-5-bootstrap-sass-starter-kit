# Laravel 5.1 Bootstrap SASS Starter Kit

*This is in very early development.*

## Introduction
A Laravel starter kit which aims to take the pain out of beginning custom Laravel content management systems. Common packages such as Bootstrap, Font Awesome, Fancybox, Dropzone and Vue are included out of the box to speed up development time.

## Installation

```git clone git://github.com/acoustep/laravel-5-bootstrap-sass-starter-kit project-name```

### Javascript set up

Install node modules

```npm install```

Install bower modules

```bower install```

Install Gulp globally if you haven't already

```npm install -g gulp```

Run Gulp

```gulp watch```

### Laravel set up

```composer install```

```mv .env.example .env```

```php artisan migrate```

### Entrust authorization

Edit ```database/seeds/UserTableSeeder.php and ```database/seeds/RoleTableSeeder.php``` with initial users.

```
php artisan entrust:migration
php artisan migrate
php artisan db:seed
```

## Features

* Laravel 5.1
	* Laracasts Extended Generators
	* Entrust
	* Whoops
	* Debugbar
* Node dependencies
	* Gulp
	* Laravel Elixir
	* Vue, Vue Resource and Vue DND
* Bower dependencies
	* Bootstrap SASS
	* Jasny Bootstrap SASS
	* Font Awesome SASS
	* Chosen
	* Fancybox
	* Moment and Moment Range
	* JCrop
	* Dropzone
	* Slick Carousel

## To do

Everything
