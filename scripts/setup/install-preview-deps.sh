#!/usr/bin/env bash
set -euo pipefail

MODE="host"
CONTAINER_NAME=""

usage() {
  cat <<'EOF'
Usage:
  bash scripts/setup/install-preview-deps.sh --host
  bash scripts/setup/install-preview-deps.sh --container <container_name>

Install runtime dependencies required by preview pipeline:
  - LibreOffice (doc/docx/xls/xlsx -> pdf)
  - Ghostscript (pdf -> png)
  - p7zip / unzip / unrar-free (zip/rar listing)
EOF
}

while [[ $# -gt 0 ]]; do
  case "$1" in
    --host)
      MODE="host"
      shift
      ;;
    --container)
      MODE="container"
      CONTAINER_NAME="${2:-}"
      if [[ -z "$CONTAINER_NAME" ]]; then
        echo "Missing container name."
        usage
        exit 1
      fi
      shift 2
      ;;
    -h|--help)
      usage
      exit 0
      ;;
    *)
      echo "Unknown arg: $1"
      usage
      exit 1
      ;;
  esac
done

PKGS="libreoffice ghostscript p7zip-full unzip unrar-free poppler-utils"

install_on_host() {
  if ! command -v apt-get >/dev/null 2>&1; then
    echo "Only apt-based host is supported by this script."
    exit 1
  fi
  sudo apt-get update
  sudo DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends $PKGS
}

install_in_container() {
  if ! command -v docker >/dev/null 2>&1; then
    echo "docker command not found."
    exit 1
  fi
  docker exec "$CONTAINER_NAME" sh -lc \
    "apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends $PKGS"
}

check_cmds_host() {
  echo "Host dependency check:"
  for c in soffice gs 7z unzip; do
    if command -v "$c" >/dev/null 2>&1; then
      echo "  [ok] $c -> $(command -v "$c")"
    else
      echo "  [missing] $c"
    fi
  done
}

check_cmds_container() {
  echo "Container dependency check ($CONTAINER_NAME):"
  docker exec "$CONTAINER_NAME" sh -lc '
    for c in soffice gs 7z unzip; do
      if command -v "$c" >/dev/null 2>&1; then
        echo "  [ok] $c -> $(command -v "$c")"
      else
        echo "  [missing] $c"
      fi
    done
  '
}

if [[ "$MODE" == "host" ]]; then
  install_on_host
  check_cmds_host
else
  install_in_container
  check_cmds_container
fi

echo "Done."

