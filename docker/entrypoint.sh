#!/bin/bash

# Remove the Docker volume
docker volume rm furcare

if [ ! -f "vendor/autoload.php"]; then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env"]; then
    echo "Creating env file for env $APP_ENV"
    cp .env.example .env
else
    echo "env file exists."
fi

if [ ! -f "/first_start.txt" ]; then
    sleep 120
    php artisan migrate
    php artisan db:seed
    touch /first_start.txt
fi

php artisan key:generate
php artisan storage:link
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Add a delay before starting the Laravel application
sleep 120

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env
exec docker-php-entrypoint "$@"
