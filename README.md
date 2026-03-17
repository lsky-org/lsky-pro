<img align="right" width="100" src="https://avatars.githubusercontent.com/u/100565733?s=200" alt="Lsky Pro Logo"/>

<h1 align="left">Lsky Pro - Enhanced Fork</h1>

☁ Your photo album on the cloud — with professional image support, document preview, AI intelligence, and more.

> Based on [lsky-org/lsky-pro](https://github.com/lsky-org/lsky-pro), this fork adds significant architecture upgrades and new features while maintaining full upstream compatibility.

---

## ✨ What's New in This Fork

### 🔒 Security Fixes
- axios 0.25 → 1.13.6, lodash → 4.17.21 (CVE fixes)
- league/commonmark 2.8.0 → 2.8.1 (CVE-2026-30838)

### ⚡ Architecture Upgrades
- **Redis integration** — cache/session/queue switched from file/sync to Redis
- **PostgreSQL optimization** — `pg_trgm` GIN indexes for LIKE query acceleration, composite indexes for performance
- **Docker network** — Redis connectivity built-in

### 📄 Document Online Preview
- PDF, Word, Excel, PPT, SVG inline viewer
- PDF.js + docx-preview + SheetJS integration
- Server-side DOC/PPT → PDF conversion via LibreOffice
- Gallery context menu "在线查看" entry

### 📸 Professional Image Format Support
- **New formats**: HEIC, AVIF, SVG, TIFF, CR2, NEF, ARW, DNG, RAF
- Imagick fallback for `getimagesize` (fixes PSD/RAW width/height=0)
- ghostscript (PDF/EPS rendering), dcraw + libraw (RAW decoding), exiftool (EXIF metadata)

### 🤖 AI Image Intelligence
- Multi-provider AI config (OpenAI, Google, etc.)
- Image intelligence analysis (tagging, OCR, content description)
- Batch processing & scheduled analysis jobs
- AI-powered search capabilities

### 🔑 Authentication Enhancements
- Two-factor authentication (2FA / TOTP)
- Passkey / WebAuthn support
- Google & GitHub OAuth login
- Auth identity governance & event tracking

### 🎨 UI/UX Improvements
- Redesigned login page
- Overhauled admin settings interface
- Enhanced image management with carousel viewer, sidebar, toolbar
- Gallery rebuild with lazy loading, skeleton screens, ETag/304 caching
- Improved role group & storage strategy management pages
- Responsive sidebar navigation

### 📁 Other Features
- Album sharing with permission control
- Album folder hierarchy (parent/child)
- Queue-based async image deletion
- Webhook event system
- System performance dashboard

---

## 🛠 Requirements

- PHP >= 8.1
- Redis (recommended for cache/session/queue)
- PostgreSQL / MySQL 5.7+ / SQLite 3.8.8+
- Imagick PHP extension
- Required PHP extensions: BCMath, Ctype, DOM, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML

### Docker Additional Tools (included in Docker image)
- LibreOffice, ghostscript, poppler-utils
- dcraw, libraw-bin, exiftool, libheif-examples
- fonts-noto-cjk (Chinese font support)

---

## 🚀 Quick Start

### Docker (1Panel recommended)

```bash
# Configure .env
cp .env.example .env
# Edit .env — set DB, Redis, and admin credentials

# Auto-bootstrap (migration + admin + default config)
php artisan lsky:bootstrap --force
```

### Key .env Variables

```env
DB_CONNECTION=pgsql
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
INIT_AUTO_BOOTSTRAP=true
INIT_ADMIN_EMAIL=admin@example.com
INIT_ADMIN_PASSWORD=YourSecurePassword
```

---

## 📦 Upstream

This fork is based on [lsky-org/lsky-pro](https://github.com/lsky-org/lsky-pro) (GPL-3.0).

All original features are preserved. See upstream README for the full feature list including multi-cloud storage, watermark, API upload, and more.

---

## 📃 License

[GPL 3.0](https://opensource.org/licenses/GPL-3.0)

Copyright (c) 2018-present Lsky Pro.
