#!/bin/sh

set -e


# .env yoksa oluştur
if [ ! -f .env ]; then
    cp .env.example .env
fi

# App key yoksa üret
if ! php artisan key:generate --show >/dev/null 2>&1; then
    echo "🔑 APP_KEY oluşturuluyor"
    php artisan key:generate
fi

# Cache temizle
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Migration (prod için force)
echo "🗄️  Database migrate ediliyor"
php artisan migrate --force || true

# Storage link
php artisan storage:link || true

echo "✅ Laravel hazır"

# PHP-FPM başlat
exec php-fpm
