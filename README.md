<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to organize Laravel tools on a unique subdomain.

<br>
<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 009-organize-laravel-tools-on-a-unique-subdomain
```

<br>

1. Install dependencies

```bash
commposer install

npm install
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
touch database/tools.sqlite

php artisan migrate
```

<br>

4. Run development server script

```bash
npm run dev
```

<br>

5. Link your project

```bash
herd link article
```

<br>

6. Visit your website : http://article.test or even your tools : http://tools.article.test
