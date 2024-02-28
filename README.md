

<p align="center"><img src="https://github.com/capsulescodes/articles/blob/main/capsules-articles-image.png" width="300px" height="200px" /></p>


## About

Run Laravel on your Browser with Browser PHP.

<br>
<br>

> Access the CodeSandbox project via this link : https://codesandbox.io/p/devbox/github/capsulescodes/articles/tree/012-run-laravel-on-your-browser-with-browser-php

<br>

## Installation

1. Install dependencies

```bash
npm install

npm run composer install -- --ignore-platform-reqs --no-scripts
```

<br>

2. Copy Environment and generate app key

```bash
cp .env.example .env

npm run php artisan key:generate
```

<br>

3. Run development server script

```bash
npm run serve
```

<br>

5. Visit your website : http://localhost:2222
