#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

if [ "${1:-}" = "apache2-foreground" ]; then
    mkdir -p \
        /data \
        bootstrap/cache \
        storage/app/uploads \
        storage/framework/cache \
        storage/framework/sessions \
        storage/framework/testing \
        storage/framework/views \
        storage/logs

    touch /data/database.sqlite
    chown -R www-data:www-data /data bootstrap/cache storage

    if [ ! -f .env ]; then
        cp .env.example .env
    fi

    if [ ! -L public/i ] && [ ! -e public/i ]; then
        ln -s /var/www/html/storage/app/uploads public/i
    fi

    php artisan lsky:docker-init --no-interaction

    chown -R www-data:www-data /data bootstrap/cache storage
    chown www-data:www-data .env

    if [ -f installed.lock ]; then
        chown www-data:www-data installed.lock
    fi
fi

exec "$@"
