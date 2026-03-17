#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

cat > /usr/local/etc/php/conf.d/zz-runtime-overrides.ini <<EOF
memory_limit=${PHP_MEMORY_LIMIT:-512M}
post_max_size=${PHP_POST_MAX_SIZE:-128M}
upload_max_filesize=${PHP_UPLOAD_MAX_FILESIZE:-128M}
max_execution_time=${PHP_MAX_EXECUTION_TIME:-120}
EOF

mkdir -p \
  storage/app/public \
  storage/framework/cache/data \
  storage/framework/sessions \
  storage/framework/testing \
  storage/framework/views \
  storage/logs \
  bootstrap/cache \
  public/uploads
chown -R www-data:www-data storage bootstrap/cache public/uploads || true

# Deployment switches or host bind changes can leave stale Laravel manifests
# behind. Clear them before bootstrapping package discovery.
rm -f bootstrap/cache/*.php || true

if [ -f artisan ]; then
  if [ ! -f .env ] && [ -f .env.example ]; then
    cp .env.example .env
  fi
  if [ -f .env ] && ! grep -Eq '^APP_KEY=base64:[A-Za-z0-9+/=]+' .env; then
    php artisan key:generate --force --no-interaction >/dev/null 2>&1 || true
  fi
  php artisan package:discover --ansi >/dev/null 2>&1 || true
  php artisan storage:link >/dev/null 2>&1 || true
  if [ "${INIT_AUTO_BOOTSTRAP:-false}" = "true" ]; then
    php artisan lsky:bootstrap
  fi
fi

if [ -f .env ] && [ -w .env ]; then
  chown www-data:www-data .env || true
  chmod 664 .env || true
fi

if [ -f installed.lock ] && [ -w installed.lock ]; then
  chown www-data:www-data installed.lock || true
  chmod 664 installed.lock || true
fi

chown -R www-data:www-data storage bootstrap/cache public/uploads || true

exec "$@"
