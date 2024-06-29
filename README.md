<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to create a Laravel package on your local environment.

<br>

## Installation

1. Install dependencies

```bash
cd template

commposer install
```

<br>

2. Copy Environment, generate app key and modify database credentials

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Link your project with Laravel Valet

```bash
valet link article
```

<br>

4. Visit your website : http://article.test

<br>

5. Access Artisan Tinker

```bash
php artisan tinker

> CapsulesCodes\Package\Greeter::greet()
```
