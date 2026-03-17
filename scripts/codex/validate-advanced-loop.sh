#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

required=(
  "docs/requirements/ADVANCED_REQUIREMENTS.md"
  "docs/design/ADVANCED_DESIGN.md"
  "docs/tasks/ADVANCED_TASKS.md"
  "scripts/codex/continuous-main-agent.sh"
  "prompts/codex/advanced/TEMPLATE.md"
)

for f in "${required[@]}"; do
  [[ -f "$f" ]] || { echo "missing: $f"; exit 1; }
done

bash -n scripts/codex/continuous-main-agent.sh
bash -n scripts/codex/validate-advanced-loop.sh

echo "advanced loop validation passed"
