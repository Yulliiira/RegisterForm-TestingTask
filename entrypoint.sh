#!/bin/sh
chmod -R 777 storage bootstrap/cache

echo "MySQL запущен!"

# Выполняем миграции и сиды
php artisan migrate --seed

# Запускаем PHP-FPM
exec php-fpm
