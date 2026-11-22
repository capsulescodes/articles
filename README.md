<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to create a Node package on your local Laravel environment.

<br>
<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

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

2. Add environment and generate application key

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Access Node CLI

```bash
> npm run greet
```
