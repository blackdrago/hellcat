# Hellcat
Driving webcomics wild.

Hellcat is a multilingual platform for webcomics.

# 1. Requirements
- Laravel 5
- Laravel Mix   

# 2. Installation
## 2.1. Install by Composer
Install via composer:
```
composer require blackdrago/hellcat
```

Then edit the application's config/app.php file and add the following:
```php
    'providers' => [
        // ...
        Blackdrago\Hellcat\ServiceProvider::class,
        // ...
    ],
```
Then run the following commands:
```
php artisan config:cache
php artisan vendor:publish --provider="Blackdrago\Hellcat\ServiceProvider" --tag=public
```

#2.2 Configuration
More coming soon.
