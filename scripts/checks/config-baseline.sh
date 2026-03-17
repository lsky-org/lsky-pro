#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

ENV_FILE="${ENV_FILE:-.env}"
if [ ! -f "$ENV_FILE" ]; then
  echo "[FAIL] env file not found: $ENV_FILE"
  exit 1
fi

get_env() {
  local key="$1"
  local value
  value="$(grep -E "^${key}=" "$ENV_FILE" | tail -n1 | cut -d'=' -f2- || true)"
  value="${value%\"}"
  value="${value#\"}"
  echo "$value"
}

fail=0

APP_ENV="$(get_env APP_ENV)"
APP_DEBUG="$(get_env APP_DEBUG)"
LOG_LEVEL="$(get_env LOG_LEVEL)"
QUEUE_CONNECTION="$(get_env QUEUE_CONNECTION)"
IMAGE_DELETE_ASYNC="$(get_env IMAGE_DELETE_ASYNC)"
IMAGE_DELETE_QUEUE_CONNECTION="$(get_env IMAGE_DELETE_QUEUE_CONNECTION)"

if [ "$APP_ENV" = "prod" ] && [ "$APP_DEBUG" != "false" ]; then
  echo "[FAIL] APP_DEBUG must be false in prod"
  fail=1
else
  echo "[OK] APP_DEBUG baseline"
fi

if [ "$APP_ENV" = "prod" ] && [ "$LOG_LEVEL" = "debug" ]; then
  echo "[WARN] LOG_LEVEL=debug in prod, consider info/warning"
else
  echo "[OK] LOG_LEVEL baseline"
fi

if [ "$IMAGE_DELETE_ASYNC" = "true" ]; then
  if [ "$QUEUE_CONNECTION" = "sync" ]; then
    echo "[FAIL] IMAGE_DELETE_ASYNC=true requires QUEUE_CONNECTION != sync"
    fail=1
  else
    echo "[OK] async delete queue enabled"
  fi

  if [ -z "$IMAGE_DELETE_QUEUE_CONNECTION" ]; then
    echo "[WARN] IMAGE_DELETE_QUEUE_CONNECTION not set, fallback to default queue connection"
  else
    echo "[OK] IMAGE_DELETE_QUEUE_CONNECTION set: $IMAGE_DELETE_QUEUE_CONNECTION"
  fi
fi

if ! grep -q '^APP_KEY=' "$ENV_FILE"; then
  echo "[FAIL] APP_KEY missing"
  fail=1
fi

if [ "$fail" -ne 0 ]; then
  exit 1
fi

echo "config baseline check passed"
