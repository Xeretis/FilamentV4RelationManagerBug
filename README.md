# Filament v4 realtion manager bug

1. Copy .env.example
```
cp .env.example .env
```

2. Install composer dependencies
```
composer install
```

3. Generate app key
```
php artisan key:generate
```

4. Migrate (fresh) and seed database (for quick local login with demo user)
```
php artisan migrate:fresh --seed
```
