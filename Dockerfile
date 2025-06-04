FROM php:8-fpm

RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libssl-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libzip-dev \
    build-essential \
    git

RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd \
    && curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@11.4.1

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build:ssr

RUN chown -R www-data:www-data /var/www

EXPOSE 9000

CMD ["php-fpm"]
