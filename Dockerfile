FROM php:8.2 as php

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev
RUN docker-php-ext-install pdo_mysql bcmath

RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

WORKDIR /var/www
ADD . /var/www/

COPY .env .

COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer


RUN composer install

ENV PORT=8000
RUN chmod 777 docker/entrypoint.sh
RUN chmod +x docker/entrypoint.sh

ENTRYPOINT [ "docker/entrypoint.sh"]