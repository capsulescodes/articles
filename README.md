<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to use several databases within your laravel project.

<br>

## Installation

0. Checkout branch

```bash
git checkout 003-use-several-databases-within-your-laravel-project
```

<br>

1. Install dependencies

```bash
commposer install
```

<br>

2. Copy Environment, generate app key and optionally add database credentials
```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Create and migrate SQLite database `one` and SQLite database `two`
```bash
touch database/one.sqlite
touch database/two.sqlite

php artisan migrate
```

<br>

4. Link your project with Laravel Valet

```bash
valet link article
```

<br>

6. Visit your website : http://article.test
