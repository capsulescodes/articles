

<p align="center"><img src="../capsules-articles-image.png" width="300px" height="200px" /></p>


## About

How to use multiple databases in your laravel project.


## Installation

1. Install dependencies

```bash
commposer install
```

<br>

2. Create databases `one` and `two`
```bash
mysql -u <username> -p <password> -e "CREATE DATABASE one"

mysql -u <username> -p <password> -e "CREATE DATABASE two"
```

<br>

3. Copy Environment and possibly change database credentials
```bash
cp .env.example .env
```

<br>

4. Launch migrations

```bash
php artisan migrate
```

<br>

5. Link your project with Laravel Valet

```bash
valet link article
```

<br>

6. Visit your website : http://article.test
