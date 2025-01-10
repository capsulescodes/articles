<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Serve a Laravel project on Web, Desktop and Mobile with Tauri

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 020-serve-a-laravel-project-on-web-desktop-and-mobile-with-tauri
```

<br>

1. Install dependencies

```bash
composer install
```

<br>

2. Add environment

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Run commands

```bash
php artisan serve:web

php artisan serve:desktop

php artisan serve:mobile
```
