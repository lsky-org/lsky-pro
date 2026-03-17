Read PLANS.md and execute one advanced iteration.

Task ID: {{TASK_ID}}
Task Title: {{TASK_TITLE}}
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
