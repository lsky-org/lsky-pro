#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

if [[ ! -f .env ]]; then
  cp .env.example .env
  echo "Created .env from .env.example"
fi

if ! command -v composer >/dev/null 2>&1; then
  echo "composer not found."
  exit 1
fi

if ! command -v php >/dev/null 2>&1; then
  echo "php not found."
  exit 1
fi

composer install

php artisan key:generate --force
php artisan lsky:bootstrap

if command -v npm >/dev/null 2>&1; then
  npm ci
  npm run dev
else
  echo "npm not found, skip frontend build."
fi

echo "Starting Laravel dev server at http://127.0.0.1:8000"
php artisan serve --host=127.0.0.1 --port=8000
