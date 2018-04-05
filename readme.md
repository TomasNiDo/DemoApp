# Laravel 5.6 Demo App using TDD
[![Build Status](https://travis-ci.org/VerzatileTom/DemoApp.svg?branch=master)](https://travis-ci.org/VerzatileTom/DemoApp)

# Installation
- Clone
- `composer install`
- `cp .env.example .env && php artisan key:generate`
- Open `.env` and setup your database config
- `php artisan migrate`
- `php artisan db:seed`

# Test Account
Email: johndoe@example.com <br>
Password: secret

# Prerequisites
- PHP >=7.1.3
- PHPUnit 7.0
- SQLite 3 (for testing)

# Test
```shell
vendor\bin\phpunit
```
