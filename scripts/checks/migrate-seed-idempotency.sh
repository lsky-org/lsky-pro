#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

PHP_BIN="${PHP_BIN:-php}"
DB_FILE="${DB_FILE:-$ROOT_DIR/database/smoke-idempotency.sqlite}"
LOCK_FILE="$ROOT_DIR/installed.lock"
LOCK_BAK="$ROOT_DIR/installed.lock.bak"
mkdir -p "$(dirname "$DB_FILE")"
touch "$DB_FILE"

run_env() {
  APP_ENV=testing \
  DB_CONNECTION=sqlite \
  DB_DATABASE="$DB_FILE" \
  CACHE_DRIVER=array \
  SESSION_DRIVER=array \
  QUEUE_CONNECTION=sync \
  "$@"
}

suspend_lock() {
  if [ -f "$LOCK_FILE" ]; then
    mv "$LOCK_FILE" "$LOCK_BAK"
  fi
}

restore_lock() {
  if [ -f "$LOCK_BAK" ]; then
    mv "$LOCK_BAK" "$LOCK_FILE"
  fi
}

trap restore_lock EXIT
suspend_lock

count_snapshot() {
  run_env "$PHP_BIN" -r '
require "vendor/autoload.php";
$app = require "bootstrap/app.php";
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$tables = ["configs", "groups", "strategies", "users"];
$out = [];
foreach ($tables as $table) { $out[] = $table.":".Illuminate\Support\Facades\DB::table($table)->count(); }
echo implode(",", $out);
'
}

run_cycle() {
  run_env "$PHP_BIN" artisan migrate:fresh --force --no-interaction >/dev/null
  run_env "$PHP_BIN" artisan db:seed --class=InstallSeeder --force --no-interaction >/dev/null
  count_snapshot
}

echo "[INFO] cycle #1"
SNAP1="$(run_cycle)"
echo "[INFO] snapshot #1 => $SNAP1"

echo "[INFO] cycle #2"
SNAP2="$(run_cycle)"
echo "[INFO] snapshot #2 => $SNAP2"

if [ "$SNAP1" != "$SNAP2" ]; then
  echo "[FAIL] migrate+seed is not idempotent across cycles"
  exit 1
fi

echo "migrate+seed idempotency check passed"
