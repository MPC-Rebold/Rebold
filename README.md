# Rebold

---

## Getting started

Requirements: ```php >= 8.2``` ```node >= 18.0``` ```composer >= 2.0```


Copy ```.env.example``` to ```.env``` and set the environment variables

Run:
```bash
npm install
composer install
php artisan key:generate
php artisan migrate --force
php artisan db:seed
```