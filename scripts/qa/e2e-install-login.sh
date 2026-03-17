#!/usr/bin/env bash
set -euo pipefail
trap 'echo "[FAIL] command: $BASH_COMMAND" >&2' ERR

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE="${COMPOSE_FILE:-deploy/e2e/docker-compose.install.yml}"
PROJECT_NAME="${PROJECT_NAME:-lsky-e2e-install-$(date +%s)-$$}"
BASE_URL="${BASE_URL:-http://127.0.0.1:18080}"
ADMIN_EMAIL="${ADMIN_EMAIL:-admin@example.com}"
ADMIN_PASSWORD="${ADMIN_PASSWORD:-Admin#123456}"
COOKIE_JAR="$(mktemp)"
LOGIN_COOKIE_JAR="$(mktemp)"
HEADERS_FILE="$(mktemp)"
BODY_FILE="$(mktemp)"
INSTALL_HTML="$(mktemp)"
LOGIN_HTML="$(mktemp)"

cleanup() {
  docker compose -p "$PROJECT_NAME" -f "$COMPOSE_FILE" down -v --remove-orphans >/dev/null 2>&1 || true
  rm -f "$COOKIE_JAR" "$LOGIN_COOKIE_JAR" "$HEADERS_FILE" "$BODY_FILE" "$INSTALL_HTML" "$LOGIN_HTML"
}

on_error() {
  local exit_code=$?
  echo "[FAIL] web install -> login e2e failed"
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

wait_for_page() {
  local url="$1"
  local expected="$2"
  local output="$3"

  for _ in $(seq 1 90); do
    if curl -fsS -c "$COOKIE_JAR" "$url" >"$output" 2>/dev/null && grep -q "$expected" "$output"; then
      return 0
    fi
    sleep 2
  done

  echo "[FAIL] timed out waiting for $url"
  return 1
}

trap cleanup EXIT
trap on_error ERR

compose down -v --remove-orphans >/dev/null 2>&1 || true
compose up --build -d

wait_for_page "$BASE_URL/install" 'Install Lsky Pro' "$INSTALL_HTML"

XSRF_TOKEN="$(extract_cookie_token "$COOKIE_JAR")"
if [[ -z "$XSRF_TOKEN" ]]; then
  echo "[FAIL] install XSRF token missing"
  exit 1
fi

INSTALL_RESPONSE="$(
  curl -fsS \
    -b "$COOKIE_JAR" \
    -c "$COOKIE_JAR" \
    -H "X-Requested-With: XMLHttpRequest" \
    -H "X-XSRF-TOKEN: $XSRF_TOKEN" \
    -H "Accept: application/json, text/plain, */*" \
    -H "Content-Type: application/x-www-form-urlencoded; charset=UTF-8" \
    --data-urlencode "connection=mysql" \
    --data-urlencode "host=db" \
    --data-urlencode "port=3306" \
    --data-urlencode "database=${E2E_DB_DATABASE:-lsky_e2e_install}" \
    --data-urlencode "username=${E2E_DB_USERNAME:-lsky}" \
    --data-urlencode "password=${E2E_DB_PASSWORD:-lsky_pass}" \
    --data-urlencode "account[email]=$ADMIN_EMAIL" \
    --data-urlencode "account[password]=$ADMIN_PASSWORD" \
    "$BASE_URL/install"
)"

echo "$INSTALL_RESPONSE" | grep -q '"status":true'

compose exec -T app sh -lc "test -f /var/www/html/installed.lock && php artisan tinker --execute='echo json_encode([\"users\" => \App\Models\User::count(), \"admin_exists\" => \App\Models\User::where(\"email\", \"$ADMIN_EMAIL\")->exists()]);'"

curl -fsSI "$BASE_URL/" | grep -iE '^location: .*/login'

curl -fsS -c "$LOGIN_COOKIE_JAR" "$BASE_URL/login" >"$LOGIN_HTML"
grep -q '登录账号' "$LOGIN_HTML"

LOGIN_XSRF_TOKEN="$(extract_cookie_token "$LOGIN_COOKIE_JAR")"
if [[ -z "$LOGIN_XSRF_TOKEN" ]]; then
  echo "[FAIL] login XSRF token missing"
  exit 1
fi

curl -fsS \
  -D "$HEADERS_FILE" \
  -o "$BODY_FILE" \
  -b "$LOGIN_COOKIE_JAR" \
  -c "$LOGIN_COOKIE_JAR" \
  -H "X-XSRF-TOKEN: $LOGIN_XSRF_TOKEN" \
  -H "Content-Type: application/x-www-form-urlencoded" \
  --data-urlencode "email=$ADMIN_EMAIL" \
  --data-urlencode "password=$ADMIN_PASSWORD" \
  "$BASE_URL/login"

grep -iE '^location: .*/dashboard' "$HEADERS_FILE"
curl -fsS -b "$LOGIN_COOKIE_JAR" "$BASE_URL/dashboard" >"$BODY_FILE"
grep -Eq 'dashboard-v4|header-left-tabs|快捷入口' "$BODY_FILE"

echo "[PASS] web install -> login e2e passed"
