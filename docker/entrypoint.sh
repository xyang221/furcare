#!/bin/bash

composer install --no-progress --no-interaction

php artisan migrate
php artisan key:generate
php artisan storage:link
php artisan cache:clear
php artisan config:clear
php artisan route:clear

if [ ! -f "/var/www/first_start.txt" ]; then
    sleep 120
    php artisan db:seed
    touch /var/www/first_start.txt
fi

# Add a delay before starting the Laravel application
sleep 120

php artisan serve --port=$PORT --host=0.0.0.0
exec docker-php-entrypoint "$@"