#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

STAMP="$(date -u +%Y%m%dT%H%M%SZ)"
LOG_DIR="${ROOT_DIR}/storage/logs"
LOG_FILE="${LOG_DIR}/run-all-${STAMP}.log"
mkdir -p "$LOG_DIR"

APP_CONTAINER="${APP_CONTAINER:-lsky-pro}"
RUN_MODE="local"
APP_WORKDIR="${APP_WORKDIR:-/var/www/html}"
ALLOW_DESTRUCTIVE="${ALLOW_DESTRUCTIVE:-0}"

if command -v docker >/dev/null 2>&1 && docker ps --format '{{.Names}}' | grep -qx "$APP_CONTAINER"; then
  RUN_MODE="docker"
fi

run_cmd() {
  local cmd="$1"
  if [[ "$RUN_MODE" == "docker" ]]; then
    docker exec "$APP_CONTAINER" sh -lc "cd \"$APP_WORKDIR\" && $cmd"
  else
    sh -lc "$cmd"
  fi
}

step() {
  local id="$1"
  local title="$2"
  local cmd="$3"
  echo "[$id] $title"
  echo "CMD: $cmd"
  if run_cmd "$cmd"; then
    echo "[$id] PASS"
  else
    echo "[$id] FAIL"
    return 1
  fi
  echo
}

{
  echo "=== LSky P0 Verification Runner ==="
  echo "UTC Time: $(date -u '+%Y-%m-%d %H:%M:%S')"
  echo "Root: $ROOT_DIR"
  echo "Mode: $RUN_MODE"
  if [[ "$RUN_MODE" == "docker" ]]; then
    echo "Container: $APP_CONTAINER"
    echo "Workdir: $APP_WORKDIR"
  fi
  echo "ALLOW_DESTRUCTIVE: $ALLOW_DESTRUCTIVE"
  echo

  if [[ "$ALLOW_DESTRUCTIVE" != "1" ]]; then
    echo "[SAFE] Running isolated-db verification mode (non-production-destructive)."
    echo
  fi

  step "P0-T001" "Startup health check" "bash scripts/health/startup.sh"
  step "P0-T002" "Config baseline check" "bash scripts/checks/config-baseline.sh"
  step "P0-T003" "Migrate+seed idempotency check" "bash scripts/checks/migrate-seed-idempotency.sh"
  step "P0-T004" "Upload mainline acceptance" "bash scripts/acceptance/upload-mainline.sh"
  step "P0-T005" "API smoke acceptance" "bash scripts/acceptance/api-smoke.sh"
  step "P0-T006" "Minimal CI smoke chain" "bash scripts/ci/smoke.sh"

  echo "ALL P0 CHECKS PASSED"
} 2>&1 | tee "$LOG_FILE"

echo "Log written: $LOG_FILE"
