<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to build a Laravel blog using Vue and [Canvas](https://trycanvas.app/).


## Installation

1. Install dependencies

```bash
commposer install

npm install
```

<br>

2. Copy Environment, generate app key and modify database credentials

```bash
cp .env.example .env

php artisan key:generate
```

<br>

3. Populate the database

```bash
mysql -u <username> -p <password> -e "CREATE DATABASE blog"

php artisan canvas:install

php artisan db:seed

php artisan storage:link
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
