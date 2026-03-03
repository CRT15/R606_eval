FROM php:8.3-apache

RUN apt-get update && apt-get install -y git unzip
RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 80