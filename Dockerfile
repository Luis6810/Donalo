FROM php:7.4.15-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions gd xdebug mysqli pdo pdo_mysql @composer
RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    git\
    nano\
    unzip
RUN docker-php-ext-install zip

