<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to create a Laravel package on your local environment.

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 008-create-a-laravel-package-on-your-local-environment
```

<br>

1. Install dependencies

```bash
cd template

commposer install
```

<br>

2. Add environment and generate application key

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Run Artisan Tinker

```bash
php artisan tinker

> CapsulesCodes\Package\Greeter::greet()
```
