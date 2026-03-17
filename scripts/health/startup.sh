#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

PHP_BIN="${PHP_BIN:-php}"
REQUIRED_PHP="8.0.2"

version_ge() {
  [ "$1" = "$(printf '%s\n%s\n' "$1" "$2" | sort -V | tail -n1)" ]
}

if ! command -v "$PHP_BIN" >/dev/null 2>&1; then
  echo "[FAIL] php binary not found: $PHP_BIN"
  exit 1
fi

PHP_VERSION="$($PHP_BIN -r 'echo PHP_VERSION;' 2>/dev/null || true)"
if [[ -z "$PHP_VERSION" ]]; then
  echo "[FAIL] cannot read PHP version"
  exit 1
fi

if ! version_ge "$PHP_VERSION" "$REQUIRED_PHP"; then
  echo "[FAIL] PHP >= $REQUIRED_PHP required, current: $PHP_VERSION"
  exit 1
fi

echo "[OK] PHP version: $PHP_VERSION"

required_ext=(bcmath ctype dom fileinfo json mbstring openssl pdo tokenizer xml)
missing=()
for ext in "${required_ext[@]}"; do
  if ! "$PHP_BIN" -m | awk '{print tolower($0)}' | grep -qx "$ext"; then
    missing+=("$ext")
  fi
done

if [ ${#missing[@]} -gt 0 ]; then
  echo "[FAIL] missing PHP extensions: ${missing[*]}"
  exit 1
fi

echo "[OK] required PHP extensions present"

for path in storage bootstrap/cache; do
  if [ ! -d "$path" ]; then
    echo "[FAIL] missing directory: $path"
    exit 1
  fi
  if [ ! -w "$path" ]; then
    echo "[FAIL] directory not writable: $path"
    exit 1
  fi
  echo "[OK] writable directory: $path"
done

if [ ! -f .env ]; then
  echo "[WARN] .env not found, creating from .env.example"
  cp .env.example .env
fi

"$PHP_BIN" artisan --version >/dev/null
echo "[OK] artisan bootstrap successful"

AUTO_BOOTSTRAP="${INIT_AUTO_BOOTSTRAP:-false}"
if [[ "$AUTO_BOOTSTRAP" == "true" ]]; then
  echo "[INFO] auto bootstrap is handled by entrypoint; health check remains read-only"
fi

echo "startup health check passed"
