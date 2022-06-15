FROM php:8.0.13-apache

RUN apt-get upgrade -y && \
    apt-get update -y --fix-missing && \
    apt-get install -y apt-utils && \
    apt-get install -y \
    libmcrypt-dev \
    zlib1g-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    pkg-config libssl-dev \
    curl gnupg && \
    pecl install mcrypt-1.0.4 && \
    docker-php-ext-enable mcrypt && \
    docker-php-ext-install zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    pecl install redis && docker-php-ext-enable redis 
    
RUN pecl install mongodb-1.13.0 && docker-php-ext-enable mongodb.so 

COPY . /var/www/html 

COPY php.ini /usr/local/etc/php/php.ini
COPY default.conf /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www/html

# RUN composer install
# RUN php artisan passport:install
# RUN php artisan key:generate

RUN chmod  -R 777 storage/*

# RUN php artisan cache:clear

RUN a2enmod rewrite headers ssl && \
service apache2 restart

# RUN chmod 777 -R ./script.sh

#arquivo com os comandos automatizados
# CMD ["sh", "./script.sh"]

EXPOSE 80
