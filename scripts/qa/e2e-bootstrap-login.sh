#!/usr/bin/env bash
set -euo pipefail
trap 'echo "[FAIL] command: $BASH_COMMAND" >&2' ERR

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE="${COMPOSE_FILE:-deploy/e2e/docker-compose.bootstrap.yml}"
PROJECT_NAME="${PROJECT_NAME:-lsky-e2e-bootstrap-$(date +%s)-$$}"
BASE_URL="${BASE_URL:-http://127.0.0.1:18081}"
ADMIN_EMAIL="${ADMIN_EMAIL:-admin@example.com}"
ADMIN_PASSWORD="${ADMIN_PASSWORD:-Admin#123456}"
COOKIE_JAR="$(mktemp)"
HEADERS_FILE="$(mktemp)"
BODY_FILE="$(mktemp)"
LOGIN_HTML="$(mktemp)"

cleanup() {
  docker compose -p "$PROJECT_NAME" -f "$COMPOSE_FILE" down -v --remove-orphans >/dev/null 2>&1 || true
  rm -f "$COOKIE_JAR" "$HEADERS_FILE" "$BODY_FILE" "$LOGIN_HTML"
}

on_error() {
  local exit_code=$?
  echo "[FAIL] bootstrap -> login e2e failed"
  compose ps || true
  compose logs --no-color --tail=200 app db || true
  exit "$exit_code"
}

compose() {
  docker compose -p "$PROJECT_NAME" -f "$COMPOSE_FILE" "$@"
}

extract_cookie_token() {
  local token
  token="$(awk '$6=="XSRF-TOKEN"{print $7}' "$1" | tail -n 1)"
  token="${token//+/ }"
  printf '%b' "${token//%/\\x}"
}

wait_for_login() {
  for _ in $(seq 1 90); do
    if curl -fsS -c "$COOKIE_JAR" "$BASE_URL/login" >"$LOGIN_HTML" 2>/dev/null && grep -q '登录账号' "$LOGIN_HTML"; then
      return 0
    fi
    sleep 2
  done

  echo "[FAIL] timed out waiting for $BASE_URL/login"
  return 1
}

trap cleanup EXIT
trap on_error ERR

compose down -v --remove-orphans >/dev/null 2>&1 || true
compose up --build -d

wait_for_login

compose exec -T app sh -lc "test -f /var/www/html/installed.lock && php artisan tinker --execute='echo json_encode([\"users\" => \App\Models\User::count(), \"admin_exists\" => \App\Models\User::where(\"email\", \"$ADMIN_EMAIL\")->exists()]);'"

INSTALL_STATUS="$(curl -sS -o /dev/null -w '%{http_code}' "$BASE_URL/install")"
test "$INSTALL_STATUS" = "404"

LOGIN_XSRF_TOKEN="$(extract_cookie_token "$COOKIE_JAR")"
if [[ -z "$LOGIN_XSRF_TOKEN" ]]; then
  echo "[FAIL] login XSRF token missing"
  exit 1
fi

curl -fsS \
  -D "$HEADERS_FILE" \
  -o "$BODY_FILE" \
  -b "$COOKIE_JAR" \
  -c "$COOKIE_JAR" \
  -H "X-XSRF-TOKEN: $LOGIN_XSRF_TOKEN" \
  -H "Content-Type: application/x-www-form-urlencoded" \
  --data-urlencode "email=$ADMIN_EMAIL" \
  --data-urlencode "password=$ADMIN_PASSWORD" \
  "$BASE_URL/login"

grep -iE '^location: .*/dashboard' "$HEADERS_FILE"
curl -fsS -b "$COOKIE_JAR" "$BASE_URL/dashboard" >"$BODY_FILE"
grep -Eq 'dashboard-v4|header-left-tabs|快捷入口' "$BODY_FILE"

echo "[PASS] bootstrap -> login e2e passed"
