#!/bin/sh

# Делаем папки доступными для записи
chmod -R 777 storage bootstrap/cache

# Ожидание запуска MySQL
echo "Ожидаем запуск MySQL..."
until mysql -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" -e "SELECT 1" >/dev/null 2>&1; do
  echo "Ждем базу данных..."
  sleep 2
done

echo "MySQL запущен!"

# Выполняем миграции и сиды
php artisan migrate --seed --force

# Запускаем PHP-FPM
exec php-fpm