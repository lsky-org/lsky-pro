<x-app-layout>
    @section('title', 'AI检索')

    <x-advanced-shell page="ai-search" title="AI 检索">
        <section class="adv-toolbar">
            <div class="adv-toolbar-head">
                <div>
                    <div class="adv-toolbar-title">检索条件</div>
                    <div class="adv-toolbar-sub">支持按名称、OCR、标签匹配，使用 `/advanced-api/images/ai-search`。</div>
                </div>
            </div>
            <div class="adv-grid">
                <label class="adv-field adv-span-2">
                    <span>搜索词</span>
                    <input id="s-q" class="adv-input" placeholder="例如：蓝天 海报 产品" />
                </label>
            </div>
            <div class="adv-actions">
                <button class="adv-btn primary" id="s-run"><i class="fas fa-search"></i>开始检索</button>
                <button class="adv-btn" id="s-clear"><i class="fas fa-undo"></i>清空结果</button>
            </div>
        </section>

        <div id="s-error" class="adv-alert"></div>
        <div id="s-loading" class="adv-loading"><i class="fas fa-spinner fa-spin"></i><span>检索中，请稍候...</span></div>

        <section class="adv-result">
            <div class="adv-result-head">
                <div class="adv-result-title">检索结果</div>
                <div class="adv-toolbar-sub" id="s-summary">尚未检索</div>
            </div>
            <div class="adv-result-body">
                <div class="adv-table-wrap" id="s-table-wrap">
                    <table class="adv-table">
                        <thead>
                            <tr>
                                <th>缩略图</th>
                                <th>Key</th>
                                <th>名称</th>
                                <th>大小</th>
                                <th>分辨率</th>
                                <th>时间</th>
                                <th>标签</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody id="s-body">
                            <tr>
                                <td colspan="8" class="adv-toolbar-sub" style="text-align:center;">输入搜索词后点击“开始检索”</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="adv-empty" id="s-empty" style="display:none;">暂无结果</div>
            </div>
        </section>

        @push('scripts')
            <script src="{{ asset('static/js/media-carousel-shared.js') }}?v={{ filemtime(public_path('static/js/media-carousel-shared.js')) }}"></script>
            <script>
                (() => {
                    const els = {
                        q: document.getElementById('s-q'),
                        run: document.getElementById('s-run'),
                        clear: document.getElementById('s-clear'),
                        error: document.getElementById('s-error'),
                        loading: document.getElementById('s-loading'),
                        summary: document.getElementById('s-summary'),
                        tableWrap: document.getElementById('s-table-wrap'),
                        body: document.getElementById('s-body'),
                        empty: document.getElementById('s-empty')
                    };

                    const { escapeHtml, copyText } = window.LskyMediaCarousel;

                    const formatBytes = (bytes) => {
                        const n = Number(bytes) || 0;
                        if (!n) return '-';
                        if (n < 1024) return n.toFixed(0) + ' B';
                        if (n < 1024 * 1024) return (n / 1024).toFixed(1) + ' KB';
                        if (n < 1024 * 1024 * 1024) return (n / (1024 * 1024)).toFixed(1) + ' MB';
                        return (n / (1024 * 1024 * 1024)).toFixed(2) + ' GB';
                    };

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

                    const showEmpty = (message) => {
                        els.empty.style.display = 'flex';
                        els.empty.textContent = message || '暂无结果';
                        els.tableWrap.style.display = 'none';
                    };

                    const showTable = () => {
                        els.empty.style.display = 'none';
                        els.tableWrap.style.display = 'block';
                    };

                    const renderRows = (items) => {
                        if (!Array.isArray(items) || !items.length) {
                            showEmpty('没有匹配到图片，请更换关键词重试');
                            return;
                        }

                        showTable();

                        els.body.innerHTML = items.map((item) => {
                            const url = item?.links?.url || '';
                            const thumb = item?.links?.thumbnail_url || url || '';
                            const tags = Array.isArray(item?.tags)
                                ? item.tags.map((tag) => tag?.name).filter(Boolean).join(', ')
                                : '';

                            const key = item?.key || '-';
                            const name = item?.origin_name || item?.name || '-';
                            const size = formatBytes(item?.size);
                            const resolution = item?.width && item?.height
                                ? `${item.width} x ${item.height}`
                                : '-';
                            const createdAt = item?.date || item?.human_date || '-';

                            return `
                                <tr>
                                    <td>${thumb ? `<img class="adv-thumb" src="${escapeHtml(thumb)}" alt="thumb" loading="lazy" />` : '<span class="adv-chip muted">无</span>'}</td>
                                    <td class="adv-mono">${escapeHtml(key)}</td>
                                    <td title="${escapeHtml(name)}">${escapeHtml(name)}</td>
                                    <td>${escapeHtml(size)}</td>
                                    <td>${escapeHtml(resolution)}</td>
                                    <td>${escapeHtml(createdAt)}</td>
                                    <td title="${escapeHtml(tags || '-')}">${escapeHtml(tags || '-')}</td>
                                    <td>
                                        <button class="adv-btn" data-copy-url="${escapeHtml(url)}" ${url ? '' : 'disabled'}>
                                            <i class="fas fa-copy"></i>${url ? '复制 URL' : '无 URL'}
                                        </button>
                                    </td>
                                </tr>
                            `;
                        }).join('');
                    };

                    const runSearch = async () => {
                        const q = (els.q.value || '').trim();
                        if (!q) {
                            showError('请输入搜索词');
                            return;
                        }

                        showError('');
                        setLoading(true);

                        try {
                            const response = await axios.get('/advanced-api/images/ai-search', { params: { q } });
                            const payload = response?.data || {};

                            if (!payload.status) {
                                throw new Error(payload.message || '检索失败');
                            }

                            const pageData = payload.data || {};
                            const items = Array.isArray(pageData.data) ? pageData.data : [];
                            const total = Number(pageData.total || items.length || 0);
                            const currentPage = Number(pageData.current_page || 1);
                            const lastPage = Number(pageData.last_page || 1);

                            els.summary.textContent = `共 ${total} 条，当前第 ${currentPage}/${lastPage} 页`;
                            renderRows(items);
                        } catch (error) {
                            const message = error?.response?.data?.message || error?.message || '请求失败';
                            showError(message);
                            els.summary.textContent = '检索失败';
                            showEmpty('检索失败，请检查关键词或稍后重试');
                        } finally {
                            setLoading(false);
                        }
                    };

                    const resetResult = () => {
                        showError('');
                        els.summary.textContent = '尚未检索';
                        showTable();
                        els.body.innerHTML = '<tr><td colspan="8" class="adv-toolbar-sub" style="text-align:center;">输入搜索词后点击“开始检索”</td></tr>';
                    };

                    els.run.addEventListener('click', runSearch);
                    els.clear.addEventListener('click', () => {
                        els.q.value = '';
                        resetResult();
                    });
                    els.q.addEventListener('keydown', (event) => {
                        if (event.key === 'Enter') {
                            event.preventDefault();
                            runSearch();
                        }
                    });

                    els.body.addEventListener('click', async (event) => {
                        const button = event.target.closest('[data-copy-url]');
                        if (!button) return;

                        const text = button.getAttribute('data-copy-url') || '';
                        const ok = await copyText(text);
                        const original = button.innerHTML;
                        button.innerHTML = ok ? '<i class="fas fa-check"></i>已复制' : '<i class="fas fa-times"></i>复制失败';
                        window.setTimeout(() => {
                            button.innerHTML = original;
                        }, 1200);
                    });
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
