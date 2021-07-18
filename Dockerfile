export DOCKER_CLIENT_TIMEOUT=120
export COMPOSE_HTTP_TIMEOUT=120


FROM php:7.3-fpm
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl git zip unzip nano npm
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install mcrypt-1.0.3
RUN docker-php-ext-enable mcrypt
RUN docker-php-ext-install pdo  mbstring pdo_mysql mysqli
WORKDIR /toktaon
COPY . /toktaon
RUN chmod -R 755 storage
RUN composer install
RUN chmod -R 755 .env
CMD php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:clear
RUN php artisan storage:link
RUN mv "./php.ini-production.txt" "$PHP_INI_DIR/php.ini"
CMD php artisan serve --host 0.0.0.0 --port 8888
EXPOSE 8888
