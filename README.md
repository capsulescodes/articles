<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to organize Laravel tools on a unique subdomain.

<br>
<br>

> [!NOTE]
> Access the CodeSandbox demo via this link : [CodeSandbox Demo](https://codesandbox.io/p/devbox/github/capsulescodes/articles/tree/009-organize-laravel-tools-on-a-unique-subdomain)
>
> APP_DOMAIN environment variable should coincide with Codesandbox's subdomain in order to make this demo work

<br>

## Installation

0. Checkout branch

```bash
git checkout 009-organize-laravel-tools-on-a-unique-subdomain
```

<br>

1. Install dependencies

```bash
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

3. Create and populate the database

```bash
touch database/tools.sqlite

php artisan migrate
```

<br>

4. Link your project with Laravel Valet

```bash
valet link article
```

<br>

5. Run development server script

```bash
npm run dev
```

<br>

5. Visit your website : http://article.test
