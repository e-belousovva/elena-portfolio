# Elena Okotchik — PHP Developer Portfolio

Laravel portfolio with RU/EN locales and PDF resume download.

## Local

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
npm run build
php artisan serve --port=8002
```

## Deploy (Render)

Connected via `render.yaml` (Docker, free plan, SQLite).

1. Push this repo to GitHub
2. In [Render Dashboard](https://dashboard.render.com) → **New** → **Blueprint**
3. Select the repository
4. Deploy

Public URL will look like `https://elena-portfolio.onrender.com`.
