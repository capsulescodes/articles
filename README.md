<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Create a backup of your Laravel project on Nextcloud.

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 023-create-a-backup-of-your-laravel-project-on-nextcloud
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
NEXTCLOUD_URL=
NEXTCLOUD_USERNAME=
NEXTCLOUD_PASSWORD=
```

<br>

4. Run backup command

```bash
php artisan backup:run
```

<br>

5. Visit Nextcloud home
