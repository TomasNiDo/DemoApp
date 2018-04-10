# Laravel 5.6 Demo App using TDD
[![Build Status](https://travis-ci.org/VerzatileTom/DemoApp.svg?branch=master)](https://travis-ci.org/VerzatileTom/DemoApp) [![StyleCI](https://styleci.io/repos/125182649/shield?branch=master)](https://styleci.io/repos/125182649) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/f49c6d840e0e4ed2b5db5ffed08f1c56)](https://www.codacy.com/app/VerzatileTom/DemoApp?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=VerzatileTom/DemoApp&amp;utm_campaign=Badge_Grade)

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
