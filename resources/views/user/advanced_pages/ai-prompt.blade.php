<x-app-layout>
    @section('title', 'AI提示词')

    <x-advanced-shell page="ai-prompt" title="AI 提示词">
        <style>
            .adv-prompt-title {
                margin-bottom: 10px;
                font-size: 15px;
                font-weight: 700;
                color: #0f172a;
            }

            .adv-prompt-block {
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background: #f8fafc;
                padding: 10px;
            }

            .adv-prompt-body {
                margin: 0;
                white-space: pre-wrap;
                word-break: break-word;
                font-size: 12px;
                line-height: 1.8;
                color: #0f172a;
            }

            .adv-meta-table {
                width: 100%;
                border-collapse: collapse;
                font-size: 12px;
            }

            .adv-meta-table td {
                border-bottom: 1px solid #e5e7eb;
                padding: 7px 8px;
                vertical-align: top;
            }

            .adv-meta-key {
                width: 180px;
                color: #64748b;
                font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            }

            .adv-meta-value {
                color: #0f172a;
                word-break: break-word;
            }
        </style>

        <section class="adv-toolbar">
            <div class="adv-toolbar-head">
                <div>
                    <div class="adv-toolbar-title">生成参数</div>
                    <div class="adv-toolbar-sub">请求 `/advanced-api/ai/prompt-tasks` 后台生成，输出结构化提示词。</div>
                </div>
            </div>
            <div class="adv-grid">
                <label class="adv-field">
                    <span>图片 Key</span>
                    <input id="a-key" class="adv-input" placeholder="请输入图片 key" />
                </label>
                <label class="adv-field">
                    <span>语言</span>
                    <input id="a-lang" class="adv-input" value="zh-CN" />
                </label>
                <label class="adv-field adv-span-2">
                    <span>意图</span>
                    <textarea id="a-intent" class="adv-textarea" placeholder="例如：用于电商详情页的主图描述，强调材质与光感"></textarea>
                </label>
                <label class="adv-field adv-span-2">
                    <span>模板</span>
                    <textarea id="a-template" class="adv-textarea" placeholder="可留空，使用系统默认模板"></textarea>
                </label>
                <label class="adv-field adv-span-2">
                    <span>风格</span>
                    <input id="a-style" class="adv-input" value="专业、简洁、可执行" />
                </label>
            </div>
            <div class="adv-actions">
                <button class="adv-btn primary" id="a-run"><i class="fas fa-magic"></i>生成提示词</button>
                <button class="adv-btn" id="a-reset"><i class="fas fa-undo"></i>重置</button>
            </div>
        </section>

        <div id="a-error" class="adv-alert"></div>
        <div id="a-loading" class="adv-loading"><i class="fas fa-spinner fa-spin"></i><span>生成中，请稍候...</span></div>

        <section class="adv-result">
            <div class="adv-result-head">
                <div class="adv-result-title">结构化结果</div>
                <div class="adv-actions" style="margin-top:0;">
                    <button class="adv-btn" id="a-copy" disabled><i class="fas fa-copy"></i>复制 Prompt</button>
                </div>
            </div>
            <div class="adv-result-body">
                <div id="a-empty" class="adv-empty">提交参数后将在此展示标题、Prompt 正文与元数据。</div>

                <div id="a-content" style="display:none;">
                    <div class="adv-prompt-title" id="a-title">-</div>

                    <section class="adv-panel" style="margin-bottom:10px;">
                        <div class="adv-panel-head">
                            <div class="adv-panel-title">Prompt 正文</div>
                        </div>
                        <div class="adv-panel-body">
                            <div class="adv-prompt-block">
                                <pre class="adv-prompt-body" id="a-prompt">-</pre>
                            </div>
                        </div>
                    </section>

                    <div class="adv-kv" style="margin-bottom:10px;">
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">模板</div>
                            <div class="adv-kv-value" id="a-template-used">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">提供商</div>
                            <div class="adv-kv-value" id="a-provider-used">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">模型</div>
                            <div class="adv-kv-value adv-mono" id="a-model-used">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">语言</div>
                            <div class="adv-kv-value" id="a-lang-used">-</div>
                        </div>
                        <div class="adv-kv-item">
                            <div class="adv-kv-key">Key</div>
                            <div class="adv-kv-value adv-mono" id="a-key-used">-</div>
                        </div>
                    </div>

                    <section class="adv-panel">
                        <div class="adv-panel-head">
                            <div class="adv-panel-title">Metadata</div>
                        </div>
                        <div class="adv-panel-body">
                            <div class="adv-table-wrap">
                                <table class="adv-meta-table">
                                    <tbody id="a-meta-body"></tbody>
                                </table>
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
                        key: document.getElementById('a-key'),
                        intent: document.getElementById('a-intent'),
                        template: document.getElementById('a-template'),
                        lang: document.getElementById('a-lang'),
                        style: document.getElementById('a-style'),
                        run: document.getElementById('a-run'),
                        reset: document.getElementById('a-reset'),
                        copy: document.getElementById('a-copy'),
                        error: document.getElementById('a-error'),
                        loading: document.getElementById('a-loading'),
                        empty: document.getElementById('a-empty'),
                        content: document.getElementById('a-content'),
                        title: document.getElementById('a-title'),
                        prompt: document.getElementById('a-prompt'),
                        templateUsed: document.getElementById('a-template-used'),
                        providerUsed: document.getElementById('a-provider-used'),
                        modelUsed: document.getElementById('a-model-used'),
                        langUsed: document.getElementById('a-lang-used'),
                        keyUsed: document.getElementById('a-key-used'),
                        metaBody: document.getElementById('a-meta-body')
                    };

                    let latestPrompt = '';
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
                    const sleep = (ms) => new Promise(resolve => window.setTimeout(resolve, ms));
                    const pollTask = async (taskId, timeoutMs = 90000, intervalMs = 1000) => {
                        const begin = Date.now();
                        while (Date.now() - begin < timeoutMs) {
                            const response = await axios.get(`/advanced-api/ai/prompt-tasks/${encodeURIComponent(taskId)}`);
                            const body = response?.data || {};
                            if (!body.status) {
                                throw new Error(body.message || '任务查询失败');
                            }
                            const payload = body.data || {};
                            const task = payload.task || payload || {};
                            const status = String(task.status || '').toLowerCase();
                            if (status === 'success') {
                                return task;
                            }
                            if (status === 'failed') {
                                throw new Error(task.error_message || '任务执行失败');
                            }
                            await sleep(intervalMs);
                        }

                        throw new Error('任务超时，请稍后重试');
                    };

                    const showEmpty = () => {
                        els.empty.style.display = 'flex';
                        els.content.style.display = 'none';
                        latestPrompt = '';
                        els.copy.disabled = true;
                    };

                    const showContent = () => {
                        els.empty.style.display = 'none';
                        els.content.style.display = 'block';
                    };

                    const renderMetadata = (metadata) => {
                        const entries = Object.entries(metadata || {});
                        if (!entries.length) {
                            els.metaBody.innerHTML = '<tr><td class="adv-meta-key">-</td><td class="adv-meta-value">无元数据</td></tr>';
                            return;
                        }

                        els.metaBody.innerHTML = entries.map(([key, value]) => {
                            let text = value;
                            if (Array.isArray(text)) {
                                text = text.join(', ');
                            } else if (text && typeof text === 'object') {
                                text = JSON.stringify(text);
                            }

                            return `
                                <tr>
                                    <td class="adv-meta-key">${escapeHtml(String(key))}</td>
                                    <td class="adv-meta-value">${escapeHtml(String(text ?? '-'))}</td>
                                </tr>
                            `;
                        }).join('');
                    };

                    const runGenerate = async () => {
                        const payload = {
                            key: (els.key.value || '').trim(),
                            intent: (els.intent.value || '').trim(),
                            template: (els.template.value || '').trim(),
                            language: (els.lang.value || '').trim(),
                            style: (els.style.value || '').trim()
                        };

                        if (!payload.key) {
                            showError('请输入图片 Key');
                            return;
                        }
                        if (!payload.intent) {
                            showError('请输入意图');
                            return;
                        }

                        showError('');
                        setLoading(true);

                        try {
                            const response = await axios.post('/advanced-api/ai/prompt-tasks', payload);
                            const body = response?.data || {};
                            if (!body.status) {
                                throw new Error(body.message || '任务提交失败');
                            }

                            const createPayload = body.data || {};
                            const taskId = String(createPayload.task_id || createPayload?.task?.task_id || '').trim();
                            if (!taskId) {
                                throw new Error('任务ID缺失');
                            }

                            const task = await pollTask(taskId);
                            const data = task.result || {};
                            const metadata = data.metadata || {};
                            const provider = data.provider || {};
                            const prompt = String(data.prompt || '').trim();
                            const filename = metadata.filename || metadata.origin_name || metadata.key || payload.key;

                            latestPrompt = prompt;
                            els.copy.disabled = !latestPrompt;

                            els.title.textContent = `提示词：${filename}`;
                            els.prompt.textContent = prompt || '-';
                            els.templateUsed.textContent = data.template_used || '系统默认';
                            els.providerUsed.textContent = provider.label || provider.provider || '-';
                            els.modelUsed.textContent = provider.model || '-';
                            els.langUsed.textContent = payload.language || 'zh-CN';
                            els.keyUsed.textContent = metadata.key || payload.key;

                            renderMetadata(metadata);
                            showContent();
                        } catch (error) {
                            const message = error?.response?.data?.message || error?.message || '请求失败';
                            showError(message);
                            showEmpty();
                        } finally {
                            setLoading(false);
                        }
                    };

                    els.run.addEventListener('click', runGenerate);

                    els.reset.addEventListener('click', () => {
                        els.key.value = '';
                        els.intent.value = '';
                        els.template.value = '';
                        els.lang.value = 'zh-CN';
                        els.style.value = '专业、简洁、可执行';
                        els.providerUsed.textContent = '-';
                        els.modelUsed.textContent = '-';
                        showError('');
                        showEmpty();
                    });

                    els.copy.addEventListener('click', async () => {
                        if (!latestPrompt) return;
                        const ok = await copyText(latestPrompt);
                        const origin = els.copy.innerHTML;
                        els.copy.innerHTML = ok ? '<i class="fas fa-check"></i>已复制' : '<i class="fas fa-times"></i>复制失败';
                        window.setTimeout(() => {
                            els.copy.innerHTML = origin;
                        }, 1200);
                    });
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
