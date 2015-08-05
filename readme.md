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

```php artisan key:generate```

```php artisan migrate```


### Entrust authorization


```
php artisan entrust:migration
php artisan migrate
```
Edit ```database/seeds/UserTableSeeder.php``` and ```database/seeds/RoleTableSeeder.php``` with initial users.

```
php artisan db:seed
```

### Getting Started

#### Routes

```
app/Http/routes.php
```

By default there are routes for home, admin and authentication.

#### SASS

```
resources/assets/sass/app.scss
resources/assets/sass/admin/app.scss
```

Although not mandatory, see https://mattstauffer.co/blog/organizing-css-oocss-smacss-and-bem and http://horsed.github.io/smacss-with-sass-and-bem-cheat-sheet/ for organising your SASS files.

You can override any bootstrap variable within ```resources/assets/sass/base/_base.scss``` so long as you place it above the bootstrap import.  This is the same for any Jasny Bootstrap changes as well.

#### Javascript

```
resources/assets/js/app.js
resources/assets/js/admin/app.js
```

Browserify is supported with Laravel Elixir out of the box, so you can use all the EMCA2015 goodies.

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
	* Select2
	* Swipebox
	* Sortable
	* Moment and Moment Range
	* JCrop
	* Dropzone
	* Slick Carousel

## To do

* Importing non-sass javascript plugin stylesheets, Dropzone etc as a separate command line package.
* User management GUI for Entrust as a separate package.
* Add Modernizr
* Add Swipebox and Sortable
* Find the best WYSIWYG editor in the world
