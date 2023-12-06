

<p align="center"><img src="../capsules-articles-image.png" width="300px" height="200px" /></p>


## About

How to organize Laravel tools on a unique subdomain.


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

3. Populate the database and publish assets

```bash
mysql -u <username> -p <password> -e "CREATE DATABASE article"

php artisan telescope:install

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
