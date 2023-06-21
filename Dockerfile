FROM php:8.2-fpm-bookworm as php

ENV PHP_OPCACHE_ENABLE=1
ENV PHP_OPCACHE_ENABLE_CLI=0
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=1
ENV PHP_OPCACHE_REVALIDATE_FREQ=1

RUN usermod -u 1000 www-data

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev nginx nodejs npm nano net-tools nmap traceroute iputils-ping mc curl
RUN docker-php-ext-install pdo pdo_mysql bcmath curl opcache
# RUN docker-php-ext-enable opcache

WORKDIR /var/www

COPY --chown=www-data:www-data . .

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

RUN chmod -R 755 /var/www/storage
RUN chmod -R 755 /var/www/bootstrap

RUN chmod 777 /var/www/docker/entrypoint.sh
RUN chown www-data:www-data /var/www/docker/entrypoint.sh

RUN ["chmod", "+x", "docker/entrypoint.sh"]

ENTRYPOINT [ "docker/entrypoint.sh" ]