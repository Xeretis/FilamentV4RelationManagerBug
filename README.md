# Filament v4 realtion manager bug

1. Clone repo
```
git clone git@github.com:MarcelWeidum/filament-v4-relationship-bug.git 
```

2. Copy .env.example
```
cp .env.example .env
```

3. Install composer dependencies
```
composer install
```

4. Generate app key
```
php artisan key:generate
```

5. Migrate (fresh) and seed database (for quick local login with demo user)
```
php artisan migrate:fresh --seed
```

Change `app/Filament/Resources/Companies/Schemas/CompanyForm.php` to a closure or an array.
