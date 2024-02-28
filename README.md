<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to modify tables and records with [Laravel Population](https://github.com/capsulescodes/laravel-population).


## Installation

1. Install dependencies

```bash
composer install
```

<br>

2. Copy Environment and modify database credentials

```bash
cp .env.example .env
```

<br>

3. Set up initial database

```bash
mysql -u <username> -p <password> -e "CREATE DATABASE template"

php artisan populate:rollback
```

<br>

4. Populate

```bash
php artisan populate
```
