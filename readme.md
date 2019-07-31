<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# `Online Auction Systems` using  [Laravel](https://laravel.com/)

## Here, I've developed an application for `University Last Year Projects` purpose.<Enter>

### Installation
#### 1. Clone this repo:

<pre>
    git clone git@github.com:khandakerakash/oas.git
</pre>

#### 2. Install the dependencies:
<pre>
    composer install
</pre>

#### 3. Copy .env file and key generate
<pre>
    i. cp .env.example .env
    ii.php artisan key:generate
</pre>

#### 4. Setup database config .env
<pre>
     ...
     
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your-mysql-dbname
     DB_USERNAME=your-mysql-username
     DB_PASSWORD=your-mysql-password
     
     ...
</pre>

#### 5. Running Database Migration
<pre>
    php artisan migrate
</pre>

#### 6. Running Development Server
<pre>
    i. php artisan serve OR
    ii.Your local Laravel Dev Environment like laragon
</pre>
