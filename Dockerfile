FROM public.ecr.aws/docker/library/php:8.0-fpm as builder

# Sistem bağımlılıkları
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && apt-get clean

# PHP extensionlar
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizini
WORKDIR /var/www

# GitHub’dan proje klonla
# PUBLIC repo için
RUN git clone https://github.com/JesTery58/myapp.git

# Laravel izinleri
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# Composer install
RUN composer install --no-dev --optimize-autoloader

COPY docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]
