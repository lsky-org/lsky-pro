#!/usr/bin/env bash
set -euo pipefail
trap 'echo "[FAIL] command: $BASH_COMMAND" >&2' ERR

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

COMPOSE_FILE="${COMPOSE_FILE:-deploy/e2e/docker-compose.bootstrap.yml}"
PROJECT_NAME="${PROJECT_NAME:-lsky-e2e-auth-$(date +%s)-$$}"
BASE_URL="${BASE_URL:-http://127.0.0.1:18081}"
ADMIN_EMAIL="${ADMIN_EMAIL:-admin@example.com}"
ADMIN_PASSWORD="${ADMIN_PASSWORD:-Admin#123456}"
COOKIE_JAR="$(mktemp)"
HEADERS_FILE="$(mktemp)"
BODY_FILE="$(mktemp)"
LOGIN_HTML="$(mktemp)"
REGISTER_HTML="$(mktemp)"
SETTINGS_HTML="$(mktemp)"
ADVANCED_HTML="$(mktemp)"
STATUS_JSON="$(mktemp)"
UNLINK_JSON="$(mktemp)"
STATUS_AFTER_JSON="$(mktemp)"
GOOGLE_HEADERS="$(mktemp)"

cleanup() {
  docker compose -p "$PROJECT_NAME" -f "$COMPOSE_FILE" down -v --remove-orphans >/dev/null 2>&1 || true
  rm -f "$COOKIE_JAR" "$HEADERS_FILE" "$BODY_FILE" "$LOGIN_HTML" "$REGISTER_HTML" "$SETTINGS_HTML" "$ADVANCED_HTML" "$STATUS_JSON" "$UNLINK_JSON" "$STATUS_AFTER_JSON" "$GOOGLE_HEADERS"
}

on_error() {
  local exit_code=$?
  echo "[FAIL] auth/settings/advanced e2e failed"
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

json_assert() {
  local file="$1"
  local expr="$2"
  python3 - "$file" "$expr" <<'PY'
import json
import sys

path = sys.argv[1]
expr = sys.argv[2]
data = json.load(open(path, "r", encoding="utf-8"))
if not eval(expr, {"__builtins__": {}}, {"data": data}):
    raise SystemExit(f"json assertion failed: {expr}")
PY
}

trap cleanup EXIT
trap on_error ERR

compose down -v --remove-orphans >/dev/null 2>&1 || true
compose up --build -d

wait_for_page "$BASE_URL/login" '登录账号' "$LOGIN_HTML"
curl -fsS "$BASE_URL/register" >"$REGISTER_HTML"
grep -q '创建账号' "$REGISTER_HTML"
grep -q 'Passkey 状态' "$REGISTER_HTML"

compose exec -T app sh -lc "sed -i '/^GOOGLE_CLIENT_ID=/d;/^GOOGLE_CLIENT_SECRET=/d;/^GOOGLE_REDIRECT_URI=/d;/^GITHUB_CLIENT_ID=/d;/^GITHUB_CLIENT_SECRET=/d;/^GITHUB_REDIRECT_URI=/d' /var/www/html/.env && printf '\nGOOGLE_CLIENT_ID=e2e-google-client\nGOOGLE_CLIENT_SECRET=e2e-google-secret\nGOOGLE_REDIRECT_URI=$BASE_URL/auth/google/callback\nGITHUB_CLIENT_ID=e2e-github-client\nGITHUB_CLIENT_SECRET=e2e-github-secret\nGITHUB_REDIRECT_URI=$BASE_URL/auth/github/callback\n' >> /var/www/html/.env && php artisan optimize:clear >/dev/null"

compose exec -T app php artisan tinker --execute="\$user = \App\Models\User::query()->where('email', '$ADMIN_EMAIL')->firstOrFail(); \$user->provider = 'google'; \$user->provider_id = 'google-admin-e2e'; \$user->provider_avatar = 'https://example.test/avatar-admin.png'; \$user->save(); \App\Models\AuthIdentity::query()->updateOrCreate(['user_id' => \$user->id, 'provider' => 'google'], ['provider_subject' => 'google-admin-e2e', 'provider_email' => \$user->email, 'avatar_url' => 'https://example.test/avatar-admin.png', 'meta' => ['source' => 'qa-script'], 'last_used_at' => now()]); \App\Models\WebauthnCredential::query()->updateOrCreate(['credential_id' => 'cred-admin-e2e'], ['user_id' => \$user->id, 'label' => 'QA Passkey', 'public_key' => 'qa-public-key', 'transports' => ['internal'], 'sign_count' => 0, 'type' => 'public-key', 'last_used_at' => now(), 'meta' => ['source' => 'qa-script']]); echo json_encode(['user_id' => \$user->id]);"

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

curl -fsS -b "$COOKIE_JAR" "$BASE_URL/settings" >"$SETTINGS_HTML"
grep -q '账户设置工作台' "$SETTINGS_HTML"
grep -q '账户安全入口' "$SETTINGS_HTML"
grep -q 'identity-google-action' "$SETTINGS_HTML"
grep -q 'identity-github-action' "$SETTINGS_HTML"

curl -fsS -b "$COOKIE_JAR" "$BASE_URL/advanced" >"$ADVANCED_HTML"
grep -q '高阶工具总览' "$ADVANCED_HTML"
grep -q 'AI检索' "$ADVANCED_HTML"
grep -q '系统性能' "$ADVANCED_HTML"

curl -fsS -b "$COOKIE_JAR" "$BASE_URL/auth/passkeys/status" >"$STATUS_JSON"
json_assert "$STATUS_JSON" "data['status'] is True"
json_assert "$STATUS_JSON" "data['data']['identity_matrix']['google']['linked'] is True"
json_assert "$STATUS_JSON" "data['data']['identity_matrix']['google']['can_disconnect'] is True"
json_assert "$STATUS_JSON" "data['data']['identity_matrix']['github']['linked'] is False"
json_assert "$STATUS_JSON" "data['data']['passkeys']['credential_count'] == 1"

DELETE_XSRF_TOKEN="$(extract_cookie_token "$COOKIE_JAR")"
if [[ -z "$DELETE_XSRF_TOKEN" ]]; then
  echo "[FAIL] delete XSRF token missing"
  exit 1
fi

curl -fsS \
  -X DELETE \
  -b "$COOKIE_JAR" \
  -c "$COOKIE_JAR" \
  -H "X-Requested-With: XMLHttpRequest" \
  -H "Accept: application/json" \
  -H "X-XSRF-TOKEN: $DELETE_XSRF_TOKEN" \
  "$BASE_URL/auth/identities/google" >"$UNLINK_JSON"

json_assert "$UNLINK_JSON" "data['status'] is True"
json_assert "$UNLINK_JSON" "data['data']['provider'] == 'google'"

curl -fsS -b "$COOKIE_JAR" "$BASE_URL/auth/passkeys/status" >"$STATUS_AFTER_JSON"
json_assert "$STATUS_AFTER_JSON" "data['data']['identity_matrix']['google']['linked'] is False"
json_assert "$STATUS_AFTER_JSON" "data['data']['identity_matrix']['google']['connect_route'].endswith('/auth/google/link/redirect')"
json_assert "$STATUS_AFTER_JSON" "data['data']['passkeys']['credential_count'] == 1"

curl -fsS \
  -D "$GOOGLE_HEADERS" \
  -o /dev/null \
  -b "$COOKIE_JAR" \
  -c "$COOKIE_JAR" \
  "$BASE_URL/auth/google/link/redirect"

grep -iE '^location: https://accounts\.google\.com/' "$GOOGLE_HEADERS"

echo "[PASS] auth/settings/advanced e2e passed"
