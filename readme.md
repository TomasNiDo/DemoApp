# Laravel 5.6 Demo App using TDD
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6928af40094745a6b30bffd1ed327c08)](https://app.codacy.com/app/VerzatileTom/DemoApp?utm_source=github.com&utm_medium=referral&utm_content=VerzatileTom/DemoApp&utm_campaign=badger)
[![Build Status](https://travis-ci.org/VerzatileTom/DemoApp.svg?branch=master)](https://travis-ci.org/VerzatileTom/DemoApp) [![StyleCI](https://styleci.io/repos/125182649/shield?branch=master)](https://styleci.io/repos/125182649)

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
