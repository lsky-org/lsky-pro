<x-app-layout>
    @section('title', '图片编辑')

    <x-advanced-shell page="image-process" title="图片编辑">
        <style>
            .adv-process-preview-wrap {
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background: #f8fafc;
                min-height: 220px;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                padding: 10px;
            }

            .adv-process-preview {
                max-width: 100%;
                max-height: 420px;
                object-fit: contain;
                border-radius: 8px;
                border: 1px solid #e2e8f0;
                background: #fff;
            }

            .adv-process-op-table {
                width: 100%;
                border-collapse: collapse;
                font-size: 12px;
            }

            .adv-process-op-table td {
                border-bottom: 1px solid #e5e7eb;
                padding: 7px 8px;
                vertical-align: top;
            }

            .adv-process-op-key {
                width: 140px;
                color: #64748b;
                font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            }

            .adv-process-op-val {
                color: #0f172a;
                word-break: break-word;
            }
        </style>

        <section class="adv-toolbar">
            <div class="adv-toolbar-head">
                <div>
                    <div class="adv-toolbar-title">处理参数</div>
                    <div class="adv-toolbar-sub">调用 `/advanced-api/images/{key}/process`，支持 crop / transform / resize / filters / watermark。</div>
                </div>
            </div>

            <div class="adv-grid adv-grid-3">
                <label class="adv-field adv-span-3">
                    <span>图片 Key</span>
                    <input id="p-key" class="adv-input" placeholder="请输入要处理的图片 key" />
                </label>

                <label class="adv-field">
                    <span>Resize 宽度</span>
                    <input id="p-resize-width" class="adv-input" type="number" min="1" max="10000" placeholder="例如 1200" />
                </label>
                <label class="adv-field">
                    <span>Resize 高度</span>
                    <input id="p-resize-height" class="adv-input" type="number" min="1" max="10000" placeholder="例如 800" />
                </label>
                <label class="adv-field">
                    <span>Resize 模式</span>
                    <select id="p-resize-fit" class="adv-select">
                        <option value="contain">contain</option>
                        <option value="cover">cover</option>
                        <option value="fill">fill</option>
                        <option value="inside">inside</option>
                        <option value="outside">outside</option>
                    </select>
                </label>
                <label class="adv-field">
                    <span>Rotate 角度</span>
                    <select id="p-transform-rotate" class="adv-select">
                        <option value="">不旋转</option>
                        <option value="-90">-90</option>
                        <option value="90">90</option>
                        <option value="180">180</option>
                        <option value="270">270</option>
                    </select>
                </label>
                <label class="adv-field">
                    <span>Flip 镜像</span>
                    <select id="p-transform-flip" class="adv-select">
                        <option value="">不镜像</option>
                        <option value="horizontal">horizontal</option>
                        <option value="vertical">vertical</option>
                        <option value="both">both</option>
                    </select>
                </label>

                <label class="adv-field">
                    <span>Blur（0-50）</span>
                    <input id="p-filter-blur" class="adv-input" type="number" min="0" max="50" step="0.1" placeholder="例如 1.5" />
                </label>
                <label class="adv-field">
                    <span>Sharpen（0-10）</span>
                    <input id="p-filter-sharpen" class="adv-input" type="number" min="0" max="10" step="0.1" placeholder="例如 1" />
                </label>
                <label class="adv-field">
                    <span>Contrast（-100~100）</span>
                    <input id="p-filter-contrast" class="adv-input" type="number" min="-100" max="100" step="0.1" placeholder="例如 10" />
                </label>

                <label class="adv-field adv-span-3">
                    <span style="margin-bottom:4px;">滤镜开关</span>
                    <label class="adv-check"><input type="checkbox" id="p-filter-gray" /> 开启灰度（grayscale）</label>
                </label>

                <label class="adv-field adv-span-3">
                    <span>Watermark 文本</span>
                    <input id="p-watermark-text" class="adv-input" placeholder="例如 © Lsky Pro" />
                </label>
                <label class="adv-field">
                    <span>Watermark 位置</span>
                    <select id="p-watermark-pos" class="adv-select">
                        <option value="bottom-right">bottom-right</option>
                        <option value="bottom">bottom</option>
                        <option value="bottom-left">bottom-left</option>
                        <option value="center">center</option>
                        <option value="top-right">top-right</option>
                        <option value="top">top</option>
                        <option value="top-left">top-left</option>
                        <option value="left">left</option>
                        <option value="right">right</option>
                    </select>
                </label>
                <label class="adv-field">
                    <span>Watermark 大小</span>
                    <input id="p-watermark-size" class="adv-input" type="number" min="8" max="200" value="24" />
                </label>
                <label class="adv-field">
                    <span>Watermark 颜色</span>
                    <input id="p-watermark-color" class="adv-input adv-mono" value="#FFFFFFCC" placeholder="#RRGGBBAA" />
                </label>
            </div>

            <div class="adv-actions">
                <button class="adv-btn primary" id="p-run"><i class="fas fa-play"></i>执行处理</button>
                <button class="adv-btn" id="p-reset"><i class="fas fa-undo"></i>重置参数</button>
            </div>
        </section>

        <div id="p-error" class="adv-alert"></div>
        <div id="p-loading" class="adv-loading"><i class="fas fa-spinner fa-spin"></i><span>处理中，请稍候...</span></div>

        <section class="adv-result">
            <div class="adv-result-head">
                <div class="adv-result-title">处理结果</div>
                <div class="adv-actions" style="margin-top:0;">
                    <button class="adv-btn" id="p-copy-url" disabled><i class="fas fa-copy"></i>复制 URL</button>
                    <button class="adv-btn" id="p-download" disabled><i class="fas fa-download"></i>下载结果</button>
                </div>
            </div>
            <div class="adv-result-body">
                <div class="adv-empty" id="p-empty">执行处理后将在此显示关键字段和预览。</div>

                <div id="p-content" style="display:none;">
                    <div class="adv-kv" style="margin-bottom:10px;">
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">driver</div>
                            <div class="adv-kv-value adv-mono" id="p-driver">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">url</div>
                            <div class="adv-kv-value"><a id="p-url" class="adv-mono" href="#" target="_blank" rel="noopener noreferrer">-</a></div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">width / height</div>
                            <div class="adv-kv-value" id="p-dimension">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">size</div>
                            <div class="adv-kv-value" id="p-size">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">key</div>
                            <div class="adv-kv-value adv-mono" id="p-key-result">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">mimetype</div>
                            <div class="adv-kv-value adv-mono" id="p-mimetype">-</div>
                        </div>
                    </div>

                    <section class="adv-panel" style="margin-bottom:10px;">
                        <div class="adv-panel-head">
                            <div class="adv-panel-title">处理参数回显</div>
                        </div>
                        <div class="adv-panel-body">
                            <div class="adv-table-wrap">
                                <table class="adv-process-op-table">
                                    <tbody id="p-op-body"></tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <section class="adv-panel">
                        <div class="adv-panel-head">
                            <div class="adv-panel-title">处理后预览</div>
                        </div>
                        <div class="adv-panel-body">
                            <div class="adv-process-preview-wrap">
                                <img id="p-preview" class="adv-process-preview" src="" alt="processed preview" loading="lazy" />
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        @push('scripts')
        <script src="{{ asset('static/js/media-carousel-shared.js') }}?v={{ filemtime(public_path('static/js/media-carousel-shared.js')) }}"></script>
        <script>
            (() => {
                const els = {
                        key: document.getElementById('p-key'),
                        resizeWidth: document.getElementById('p-resize-width'),
                        resizeHeight: document.getElementById('p-resize-height'),
                        resizeFit: document.getElementById('p-resize-fit'),
                        rotate: document.getElementById('p-transform-rotate'),
                        flip: document.getElementById('p-transform-flip'),
                        gray: document.getElementById('p-filter-gray'),
                        blur: document.getElementById('p-filter-blur'),
                        sharpen: document.getElementById('p-filter-sharpen'),
                        contrast: document.getElementById('p-filter-contrast'),
                        watermarkText: document.getElementById('p-watermark-text'),
                        watermarkPos: document.getElementById('p-watermark-pos'),
                        watermarkSize: document.getElementById('p-watermark-size'),
                        watermarkColor: document.getElementById('p-watermark-color'),
                        run: document.getElementById('p-run'),
                        reset: document.getElementById('p-reset'),
                        copyUrl: document.getElementById('p-copy-url'),
                        download: document.getElementById('p-download'),
                        error: document.getElementById('p-error'),
                        loading: document.getElementById('p-loading'),
                        empty: document.getElementById('p-empty'),
                        content: document.getElementById('p-content'),
                        driver: document.getElementById('p-driver'),
                        url: document.getElementById('p-url'),
                        dimension: document.getElementById('p-dimension'),
                        size: document.getElementById('p-size'),
                        keyResult: document.getElementById('p-key-result'),
                        mimetype: document.getElementById('p-mimetype'),
                        opBody: document.getElementById('p-op-body'),
                        preview: document.getElementById('p-preview')
                    };

                    let latestObjectUrl = '';
                    let latestFileName = 'processed-image';
                    const { escapeHtml, copyText } = window.LskyMediaCarousel;

                    const showError = (message) => {
                        if (!message) {
                            els.error.classList.remove('show');
                            els.error.textContent = '';
                            return;
                        }
                        els.error.textContent = message;
                        els.error.classList.add('show');
                    };

                    const setLoading = (loading) => {
                        els.loading.classList.toggle('show', loading);
                        els.run.disabled = loading;
                    };

                    const revokeObjectUrl = () => {
                        if (latestObjectUrl) {
                            URL.revokeObjectURL(latestObjectUrl);
                            latestObjectUrl = '';
                        }
                    };

                    const showEmpty = () => {
                        els.empty.style.display = 'flex';
                        els.content.style.display = 'none';
                        els.copyUrl.disabled = true;
                        els.download.disabled = true;
                        els.url.textContent = '-';
                        els.url.removeAttribute('href');
                        els.preview.removeAttribute('src');
                    };

                    const showContent = () => {
                        els.empty.style.display = 'none';
                        els.content.style.display = 'block';
                    };

                    const formatBytes = (bytes) => {
                        const n = Number(bytes) || 0;
                        if (!n) return '-';
                        if (n < 1024) return n.toFixed(0) + ' B';
                        if (n < 1024 * 1024) return (n / 1024).toFixed(1) + ' KB';
                        if (n < 1024 * 1024 * 1024) return (n / (1024 * 1024)).toFixed(1) + ' MB';
                        return (n / (1024 * 1024 * 1024)).toFixed(2) + ' GB';
                    };

                    const toNumber = (value) => {
                        const n = Number(value);
                        return Number.isFinite(n) ? n : null;
                    };

                    const buildPayload = () => {
                        const resizeWidth = toNumber(els.resizeWidth.value);
                        const resizeHeight = toNumber(els.resizeHeight.value);
                        const rotate = toNumber(els.rotate.value);
                        const flip = (els.flip.value || '').trim();
                        const blur = toNumber(els.blur.value);
                        const sharpen = toNumber(els.sharpen.value);
                        const contrast = toNumber(els.contrast.value);
                        const wmSize = toNumber(els.watermarkSize.value);
                        const wmText = (els.watermarkText.value || '').trim();
                        const wmColor = (els.watermarkColor.value || '').trim();

                        const payload = {};

                        if (resizeWidth || resizeHeight) {
                            payload.resize = {
                                fit: els.resizeFit.value || 'contain'
                            };
                            if (resizeWidth) payload.resize.width = resizeWidth;
                            if (resizeHeight) payload.resize.height = resizeHeight;
                        }

                        if (rotate !== null || flip) {
                            payload.transform = {};
                            if (rotate !== null) payload.transform.rotate = rotate;
                            if (flip) payload.transform.flip = flip;
                        }

                        const filters = {};
                        if (els.gray.checked) filters.grayscale = true;
                        if (blur !== null && blur !== 0) filters.blur = blur;
                        if (sharpen !== null && sharpen !== 0) filters.sharpen = sharpen;
                        if (contrast !== null && contrast !== 0) filters.contrast = contrast;
                        if (Object.keys(filters).length) payload.filters = filters;

                        if (wmText) {
                            payload.watermark = {
                                text: wmText,
                                position: els.watermarkPos.value || 'bottom-right',
                                size: wmSize || 24,
                                color: wmColor || '#FFFFFFCC'
                            };
                        }

                        return payload;
                    };

                    const base64ToBlob = (base64, mimetype) => {
                        const binary = atob(base64 || '');
                        const len = binary.length;
                        const bytes = new Uint8Array(len);
                        for (let i = 0; i < len; i++) {
                            bytes[i] = binary.charCodeAt(i);
                        }
                        return new Blob([bytes], { type: mimetype || 'application/octet-stream' });
                    };

                    const renderOperations = (operations) => {
                        const rows = Object.entries(operations || {});
                        if (!rows.length) {
                            els.opBody.innerHTML = '<tr><td class="adv-process-op-key">-</td><td class="adv-process-op-val">无附加参数</td></tr>';
                            return;
                        }

                        els.opBody.innerHTML = rows.map(([name, value]) => {
                            const text = typeof value === 'object' ? JSON.stringify(value) : String(value);
                            return `<tr><td class="adv-process-op-key">${escapeHtml(name)}</td><td class="adv-process-op-val adv-mono">${escapeHtml(text)}</td></tr>`;
                        }).join('');
                    };

                    const renderResult = (data) => {
                        revokeObjectUrl();

                        const mimetype = data?.mimetype || 'application/octet-stream';
                        const base64 = data?.content_base64 || '';
                        if (!base64) {
                            throw new Error('接口未返回可预览内容');
                        }

                        const blob = base64ToBlob(base64, mimetype);
                        latestObjectUrl = URL.createObjectURL(blob);

                        const width = Number(data?.width || 0);
                        const height = Number(data?.height || 0);

                        els.driver.textContent = data?.driver || '-';
                        els.dimension.textContent = width && height ? `${width} x ${height}` : '-';
                        els.size.textContent = formatBytes(blob.size);
                        els.keyResult.textContent = data?.key || '-';
                        els.mimetype.textContent = mimetype;

                        els.url.textContent = latestObjectUrl;
                        els.url.href = latestObjectUrl;

                        els.preview.src = latestObjectUrl;
                        els.copyUrl.disabled = false;
                        els.download.disabled = false;

                        const safeBaseName = String(data?.key || 'processed-image').replace(/[^a-zA-Z0-9._-]/g, '_');
                        const safeExt = String(mimetype.split('/')[1] || 'bin').replace(/[^a-zA-Z0-9]/g, '') || 'bin';
                        latestFileName = `${safeBaseName}.${safeExt}`;
                        renderOperations(data?.operations || {});
                        showContent();
                    };

                    const runProcess = async () => {
                        const key = (els.key.value || '').trim();
                        if (!key) {
                            showError('请输入图片 Key');
                            return;
                        }

                        const payload = buildPayload();

                        showError('');
                        setLoading(true);

                        try {
                            const response = await axios.post(`/advanced-api/images/${encodeURIComponent(key)}/process`, payload);
                            const body = response?.data || {};
                            if (!body.status) {
                                throw new Error(body.message || '处理失败');
                            }

                            renderResult(body.data || {});
                        } catch (error) {
                            const message = error?.response?.data?.message || error?.message || '请求失败';
                            showError(message);
                            showEmpty();
                        } finally {
                            setLoading(false);
                        }
                    };

                    els.run.addEventListener('click', runProcess);

                    els.reset.addEventListener('click', () => {
                        els.key.value = '';
                        els.resizeWidth.value = '';
                        els.resizeHeight.value = '';
                        els.resizeFit.value = 'contain';
                        els.rotate.value = '';
                        els.flip.value = '';
                        els.gray.checked = false;
                        els.blur.value = '';
                        els.sharpen.value = '';
                        els.contrast.value = '';
                        els.watermarkText.value = '';
                        els.watermarkPos.value = 'bottom-right';
                        els.watermarkSize.value = '24';
                        els.watermarkColor.value = '#FFFFFFCC';
                        showError('');
                        showEmpty();
                        revokeObjectUrl();
                    });

                    els.copyUrl.addEventListener('click', async () => {
                        if (!latestObjectUrl) return;
                        const ok = await copyText(latestObjectUrl);
                        const original = els.copyUrl.innerHTML;
                        els.copyUrl.innerHTML = ok ? '<i class="fas fa-check"></i>已复制' : '<i class="fas fa-times"></i>复制失败';
                        window.setTimeout(() => {
                            els.copyUrl.innerHTML = original;
                        }, 1200);
                    });

                    els.download.addEventListener('click', () => {
                        if (!latestObjectUrl) return;
                        const link = document.createElement('a');
                        link.href = latestObjectUrl;
                        link.download = latestFileName;
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    });

                    window.addEventListener('beforeunload', revokeObjectUrl);
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
