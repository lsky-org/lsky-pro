#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

PROMPT_FILE="${1:-}"
if [ -z "$PROMPT_FILE" ]; then
  echo "usage: $0 <prompt-file>"
  exit 1
fi

if [ ! -f "$PROMPT_FILE" ]; then
  echo "prompt file not found: $PROMPT_FILE"
  exit 1
fi

if ! command -v codex >/dev/null 2>&1; then
  echo "codex CLI not found in PATH"
  exit 1
fi

LOG_DIR="$ROOT_DIR/storage/logs/codex"
mkdir -p "$LOG_DIR"
UTC_TS="$(date -u +%Y%m%dT%H%M%SZ)"
AUDIT_FILE="$LOG_DIR/codex-${UTC_TS}.txt"

# Non-interactive mode with UTC-timestamped audit output.
codex exec \
  --full-auto \
  --skip-git-repo-check \
  --model gpt-5 \
  --output-last-message "$AUDIT_FILE" \
  "$(cat "$PROMPT_FILE")"

echo "saved: $AUDIT_FILE"
