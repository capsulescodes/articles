<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to create a Node package on your local Laravel environment.

<br>
<br>

## Installation

0. Checkout branch

```bash
git checkout 013-create-a-node-package-on-your-local-laravel-environment
```

<br>

1. Install dependencies

```bash
cd template

commposer install

npm install
```

<br>

2. Copy Environment and generate app key

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

5. Access Node CLI

```bash
> npm run greet
```
