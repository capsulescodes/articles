<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Craft emails with React and Tailwind using [Inertia Mailable](https://github.com/capsulescodes/inertia-mailable).

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 021-craft-emails-with-react-and-tailwind-using-inertia-mailable
```

<br>

1. Install dependencies

```bash
composer install

npm install
```

<br>

2. Add environment and generate application key

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Build SSR files

```bash
npm run ssr
```

<br>

4. Link your project

```bash
herd link article
```

<br>

5. Visit your website : http://article.test
