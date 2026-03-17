# 1Panel PHP 8.3 Runtime Example

This directory contains a 1Panel-oriented Compose example for switching Lsky Pro
from the current remote image runtime to a custom PHP 8.3 image built from this
repository.

## Current Runtime

The current online container was confirmed as:

- image: `halcyonazure/lsky-pro-docker:latest`

As long as 1Panel keeps using that image, the PHP runtime version is controlled
by the upstream image, not by this repository.

## What To Import Into 1Panel

- Compose file: `deploy/1panel/docker-compose.php83.yml`
- Build Dockerfile: `deploy/php83/Dockerfile`

## Volume Notes

The Compose example keeps runtime-mutable directories on host volumes:

- `storage`
- `bootstrap/cache`
- `public/uploads`
- `.env`

Adjust the host paths to match your 1Panel app workspace before importing.

## Bootstrap Behavior

`INIT_AUTO_BOOTSTRAP=false` by default.

Set it to `true` only for first-run initialization in a brand new environment.
Do not enable it in an already running production database unless you explicitly
want bootstrap logic to run again.

Destructive artisan commands are blocked by default. Set `ALLOW_DESTRUCTIVE=1`
only when you intentionally need commands such as `migrate:fresh` or `db:wipe`.
