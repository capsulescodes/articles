<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Access Laravel before and after running Pest tests.

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 019-access-laravel-before-and-after-running-pest-tests
```

<br>

1. Install dependencies

```bash
composer install
```

<br>

2. Add environment and generate application key

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Create database and run migrations

```bash
touch database/database.sqlite

php artisan migrate
```

<br>

4. Run tests

```bash
composer test
```
