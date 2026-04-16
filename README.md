<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to modify tables and records with [Laravel Population](https://github.com/capsulescodes/laravel-population).

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 007-modify-tables-and-records-with-laravel-population
```

<br>

1. Install dependencies

```bash
composer install
```

<br>

2. Copy Environment and modify database credentials

```bash
cp .env.example .env

php artisan key:generate

touch database/database.sqlite

php artisan migrate:fresh --path=stubs --seed
```

<br>

3. Verify users names

```bash
php artisan tinker

> User::all();
```

4. Populate and modify `first_name` and `last_name` interactively

```bash
php artisan populate
```

5. Verify users names again

```bash
php artisan tinker

> User::all();
```
