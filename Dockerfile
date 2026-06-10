FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
RUN a2enmod headers

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

COPY src/composer.json src/composer.lock* /var/www/html/

RUN cd /var/www/html && composer install --no-dev --optimize-autoloader

RUN pecl install redis \
    && docker-php-ext-enable redis

COPY src/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html