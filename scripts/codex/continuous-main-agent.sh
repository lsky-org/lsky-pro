#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

TASK_FILE="${TASK_FILE:-docs/tasks/ADVANCED_TASKS.md}"
PROMPT_TEMPLATE="${PROMPT_TEMPLATE:-prompts/codex/advanced/TEMPLATE.md}"
PROMPT_DIR="${PROMPT_DIR:-prompts/codex/advanced/generated}"
STATUS_FILE="${STATUS_FILE:-docs/runbook/STATUS.md}"
MAX_ROUNDS="${MAX_ROUNDS:-0}"   # 0 => run until no TODO
SLEEP_SECONDS="${SLEEP_SECONDS:-1}"
DRY_RUN="${DRY_RUN:-0}"         # 1 => simulate only, do not call codex exec
TASK_TIMEOUT_SECONDS="${TASK_TIMEOUT_SECONDS:-1800}"

mkdir -p "$PROMPT_DIR"
# Recover stale in-progress tasks from previous interrupted runs.
sed -i 's/^- \[-\] /- [ ] /' "$TASK_FILE"

pick_next_task() {
  awk '/^- \[ \] /{print NR ":" $0; exit}' "$TASK_FILE"
}

build_prompt() {
  local task_id="$1"
  local task_title="$2"
  local out="$3"
  cat > "$out" <<PROMPT
Read PLANS.md and execute one advanced iteration.

Task ID: ${task_id}
Task Title: ${task_title}
Requirements Source: docs/requirements/ADVANCED_REQUIREMENTS.md
Design Source: docs/design/ADVANCED_DESIGN.md
Task Board: docs/tasks/ADVANCED_TASKS.md
Status Log: docs/runbook/STATUS.md

Rules:
- Non-interactive mode only.
- Use multi-agents for feasibility/review when needed.
- Keep existing functionality unchanged unless task explicitly changes behavior.
- Default non-destructive operations.
- If task requires destructive steps, require ALLOW_DESTRUCTIVE=1 gate.

Deliverables:
1) Code changes for current task only.
2) Validation command outputs.
3) STATUS.md entry with risks and next-step trigger.
PROMPT
}

append_status_note() {
  local task_id="$1"
  local task_title="$2"
  local result="$3"
  cat >> "$STATUS_FILE" <<STATUS

## $(date -u +"%Y-%m-%d") Auto-Loop ${task_id}
- 状态: ${result}
- 任务: ${task_title}
- 说明: 由 scripts/codex/continuous-main-agent.sh 自动调度
STATUS
}

round=0
while true; do
  next_item="$(pick_next_task || true)"
  if [[ -z "${next_item}" ]]; then
    echo "[main-agent] no TODO task left, exiting."
    break
  fi

  line_no="${next_item%%:*}"
  next_line="${next_item#*:}"
  task_title="$(echo "$next_line" | sed -E 's/^- \[ \] //')"
  task_id="$(echo "$task_title" | awk '{print $1}')"

  echo "[main-agent] round=$round pick=$task_id"
  sed -i "${line_no}s/^- \\[ \\] /- [-] /" "$TASK_FILE"

  prompt_file="$PROMPT_DIR/${task_id}.md"
  build_prompt "$task_id" "$task_title" "$prompt_file"

  if [[ "$DRY_RUN" == "1" ]]; then
    echo "[main-agent] DRY_RUN=1 skip execution for $task_id"
    sed -i "${line_no}s/^- \\[-\\] /- [ ] /" "$TASK_FILE"
    append_status_note "$task_id" "$task_title" "DRY_RUN"
  elif timeout "$TASK_TIMEOUT_SECONDS" bash scripts/codex/noninteractive-exec.sh "$prompt_file"; then
    sed -i "${line_no}s/^- \\[-\\] /- [x] /" "$TASK_FILE"
    append_status_note "$task_id" "$task_title" "DONE"
  else
    sed -i "${line_no}s/^- \\[-\\] /- [ ] /" "$TASK_FILE"
    append_status_note "$task_id" "$task_title" "FAILED"
  fi

  round=$((round + 1))
  if [[ "$MAX_ROUNDS" -gt 0 && "$round" -ge "$MAX_ROUNDS" ]]; then
    echo "[main-agent] reached MAX_ROUNDS=$MAX_ROUNDS, exiting."
    break
  fi

  sleep "$SLEEP_SECONDS"
done
