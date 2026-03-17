.images-loading {
    display: none;
    padding: 0;
}

.images-loading.show {
    display: block;
    overflow: hidden;
}

.images-loading-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 10px;
    padding: 10px;
}

.images-loading-list {
    display: none;
    gap: 8px;
    padding: 10px;
}

.images-loading.is-list .images-loading-grid {
    display: none;
}

.images-loading.is-list .images-loading-list {
    display: grid;
}

.images-loading-card {
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 1px 2px rgba(15, 23, 42, .04);
}

.images-loading-media,
.images-loading-line {
    background: linear-gradient(90deg, #f8fafc 0%, #e2e8f0 45%, #f8fafc 100%);
    background-size: 200% 100%;
    animation: images-loading-pulse 1.2s linear infinite;
}

.images-loading-media {
    aspect-ratio: 16 / 10;
}

.images-loading-meta {
    padding: 10px;
    display: grid;
    gap: 8px;
}

.images-loading-line {
    height: 10px;
    border-radius: 999px;
}

.images-loading-line.is-wide {
    width: 72%;
}

.images-loading-line.is-mid {
    width: 44%;
}

.images-loading-list-row {
    display: grid;
    grid-template-columns: 82px 72px minmax(180px, 1fr) 92px 72px 132px 220px;
    gap: 8px;
    align-items: center;
    padding: 8px 10px;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    background: #ffffff;
    box-shadow: 0 1px 2px rgba(15, 23, 42, .04);
}

.images-loading-list-thumb {
    width: 72px;
    height: 48px;
    border-radius: 8px;
    background: linear-gradient(90deg, #f8fafc 0%, #e2e8f0 45%, #f8fafc 100%);
    background-size: 200% 100%;
    animation: images-loading-pulse 1.2s linear infinite;
}

.images-loading-list-cell {
    height: 12px;
    border-radius: 999px;
    background: linear-gradient(90deg, #f8fafc 0%, #e2e8f0 45%, #f8fafc 100%);
    background-size: 200% 100%;
    animation: images-loading-pulse 1.2s linear infinite;
}

.images-loading-list-cell.is-xs { width: 56px; }
.images-loading-list-cell.is-sm { width: 86px; }
.images-loading-list-cell.is-md { width: 132px; }
.images-loading-list-cell.is-lg { width: 72%; }
.images-loading-list-cell.is-actions { width: 220px; justify-self: end; }

@keyframes images-loading-pulse {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
