#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

require_file() {
  local path="$1"
  if [ ! -f "$path" ]; then
    echo "missing required file: $path"
    exit 1
  fi
}

require_executable() {
  local path="$1"
  if [ ! -x "$path" ]; then
    echo "file is not executable: $path"
    exit 1
  fi
}

check_bash_syntax() {
  local path="$1"
  if ! bash -n "$path"; then
    echo "bash syntax check failed: $path"
    exit 1
  fi
}

require_file "PLANS.md"
if [ -f "STATUS.md" ]; then
  require_file "STATUS.md"
else
  require_file "docs/runbook/STATUS.md"
fi
require_file "scripts/run-all.sh"
require_file "scripts/codex/noninteractive-exec.sh"
require_file "scripts/codex/validate.sh"

require_executable "scripts/run-all.sh"
require_executable "scripts/codex/noninteractive-exec.sh"
require_executable "scripts/codex/validate.sh"

check_bash_syntax "scripts/run-all.sh"
check_bash_syntax "scripts/codex/noninteractive-exec.sh"
check_bash_syntax "scripts/codex/validate.sh"

echo "codex workflow validation passed"
