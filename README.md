<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Create a backup of your Laravel project on Dropbox.

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 018-create-a-backup-of-your-laravel-project-on-dropbox
```

<br>

1. Install dependencies

```bash
composer install
```

<br>

2. Add environment

```bash
cp .env.example .env
```

<br>

3. Retrieve following environment variables

```
DROPBOX_APP_KEY=
DROPBOX_APP_SECRET=
DROPBOX_REFRESH_TOKEN=
```

<br>

4. Run backup command

```bash
php artisan backup:run
```

<br>

5. Visit Dropbox home : http://dropbox.com/home
