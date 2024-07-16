<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

Collect feedback via Discord notifications in your Laravel project.

<br>

## Installation

0. Checkout branch

```bash
git checkout 015-collect-feedback-via-discord-notifications-in-your-laravel-project
```

1. Install dependencies

```bash
commposer install

npm install
```

<br>

2. Create [Discord Webhook](https://discord.com/apps) and add environment variable

```bash
cp .env.example .env

php artisan key:generate

LOG_DISCORD_WEBHOOK_URL=https://discord.com/api/webhooks/{your-webhook-key}
```

<br>

3. Link your project with Laravel Valet

```bash
valet link article
```

<br>

4. Run development server script

```bash
npm run dev
```

<br>

5. Visit your website : http://article.test
