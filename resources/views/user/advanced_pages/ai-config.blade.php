<x-app-layout>
    @section('title', 'AI 配置')

    <x-advanced-shell page="ai-config" title="AI 配置">
        <style>
            .ai-config-wrapper { display: grid; gap: 12px; max-width: 720px; }
            .ai-config-selector-row { display: grid; gap: 12px; grid-template-columns: 1fr 1fr; }
            .ai-config-panel { border: 1px solid #e2e8f0; border-radius: 12px; background: #fff; overflow: hidden; }
            .ai-config-panel-head { padding: 12px 14px; border-bottom: 1px solid #e2e8f0; background: #f8fafc; display: flex; align-items: center; justify-content: space-between; gap: 8px; }
            .ai-config-panel-title { font-size: 14px; font-weight: 700; color: #0f172a; }
            .ai-config-panel-sub { font-size: 12px; color: #64748b; }
            .ai-config-panel-body { padding: 14px; display: grid; gap: 12px; }
            .ai-config-grid { display: grid; gap: 12px; grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .ai-config-span-2 { grid-column: 1 / -1; }
            .ai-config-status { margin-top: 10px; min-height: 36px; border: 1px solid #dbe2ea; border-radius: 10px; background: #f8fafc; padding: 8px 12px; font-size: 12px; color: #334155; display: flex; align-items: center; }
            .ai-config-status.success { border-color: #bbf7d0; background: #f0fdf4; color: #166534; }
            .ai-config-status.error { border-color: #fecaca; background: #fff1f2; color: #b91c1c; }
            .ai-config-remote-panel { border: 1px dashed #cbd5e1; border-radius: 12px; background: #f8fafc; padding: 12px; display: grid; gap: 10px; }
            .ai-config-remote-head { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
            .ai-config-remote-list { display: flex; flex-wrap: wrap; gap: 8px; }
            .ai-config-remote-item {
                min-height: 32px; padding: 0 12px; border-radius: 999px;
                border: 1px solid #cbd5e1; background: #fff; color: #334155;
                font-size: 12px; display: inline-flex; align-items: center; gap: 6px; cursor: pointer;
            }
            .ai-config-remote-item.active { border-color: #93c5fd; background: #dbeafe; color: #1d4ed8; }
            .ai-config-remote-item.is-default { border-color: #fbbf24; background: #fef3c7; color: #92400e; }
            .ai-config-actions { display: flex; gap: 8px; flex-wrap: wrap; }
            @media (max-width: 640px) {
                .ai-config-selector-row { grid-template-columns: 1fr; }
                .ai-config-grid { grid-template-columns: 1fr; }
                .ai-config-span-2 { grid-column: auto; }
            }
        </style>

        <section class="ai-config-wrapper" id="ai-config-app">
            <div class="ai-config-selector-row">
                <label class="adv-field">
                    <span>编辑提供商</span>
                    <select id="ai-provider-select" class="adv-select"></select>
                </label>
                <label class="adv-field">
                    <span>当前启用提供商</span>
                    <select id="ai-active-provider" class="adv-select"></select>
                </label>
            </div>

            <section class="ai-config-panel">
                <div class="ai-config-panel-head">
                    <div>
                        <div class="ai-config-panel-title" id="ai-panel-title">等待加载</div>
                        <div class="ai-config-panel-sub" id="ai-panel-sub">从 API 加载配置</div>
                    </div>
                    <span class="adv-chip muted" id="ai-active-chip">未启用</span>
                </div>
                <div class="ai-config-panel-body">
                    <div class="ai-config-grid">
                        <label class="adv-field ai-config-span-2">
                            <span>API Key</span>
                            <input id="ai-api-key" class="adv-input adv-mono" placeholder="请输入当前提供商的 API Key" />
                        </label>
                        <label class="adv-field ai-config-span-2">
                            <span>Base URL</span>
                            <input id="ai-base-url" class="adv-input adv-mono" placeholder="请输入 API Base URL" />
                        </label>
                    </div>
                    <div class="ai-config-remote-panel">
                        <div class="ai-config-remote-head">
                            <div>
                                <div class="ai-config-panel-title" style="font-size:13px;">模型目录</div>
                                <div class="ai-config-panel-sub" id="ai-remote-status">单击切换选中，双击设为默认模型。</div>
                            </div>
                            <div class="ai-config-actions">
                                <button type="button" class="adv-btn" id="ai-models-fetch"><i class="fas fa-cloud-download-alt"></i>从 API 获取</button>
                                <button type="button" class="adv-btn" id="ai-models-reset"><i class="fas fa-undo"></i>恢复默认</button>
                                <span class="adv-chip muted" id="ai-remote-count">0 个模型</span>
                            </div>
                        </div>
                        <div class="ai-config-remote-list" id="ai-remote-models"></div>
                    </div>
                    <div class="ai-config-actions">
                        <button type="button" class="adv-btn primary" id="ai-config-save"><i class="fas fa-save"></i>保存此提供商配置</button>
                        <button type="button" class="adv-btn" id="ai-config-reload"><i class="fas fa-sync"></i>重新加载</button>
                    </div>
                    <div class="ai-config-status" id="ai-config-status">等待加载 AI 配置</div>
                </div>
            </section>
        </section>

        @push('scripts')
            <script>
                (() => {
                    const endpoint = '/advanced-api/ai/config';
                    const els = {
                        providerSelect: document.getElementById('ai-provider-select'),
                        panelTitle: document.getElementById('ai-panel-title'),
                        panelSub: document.getElementById('ai-panel-sub'),
                        activeChip: document.getElementById('ai-active-chip'),
                        activeProvider: document.getElementById('ai-active-provider'),
                        apiKey: document.getElementById('ai-api-key'),
                        baseUrl: document.getElementById('ai-base-url'),
                        modelsFetch: document.getElementById('ai-models-fetch'),
                        modelsReset: document.getElementById('ai-models-reset'),
                        remoteStatus: document.getElementById('ai-remote-status'),
                        remoteCount: document.getElementById('ai-remote-count'),
                        remoteModels: document.getElementById('ai-remote-models'),
                        save: document.getElementById('ai-config-save'),
                        reload: document.getElementById('ai-config-reload'),
                        status: document.getElementById('ai-config-status'),
                    };

                    const defaultModels = {
                        gpt: ['gpt-4.1-mini', 'gpt-4.1', 'gpt-4o-mini'],
                        deepseek: ['deepseek-chat', 'deepseek-reasoner'],
                        qwen: ['qwen-vl-max', 'qwen-vl-plus', 'qwen2.5-vl-72b-instruct'],
                        gemini: ['gemini-2.0-flash', 'gemini-2.5-flash', 'gemini-2.5-pro'],
                    };

                    const state = { editingProvider: 'gpt', activeProvider: 'gpt', providers: {}, loading: false };

                    const setStatus = (msg, type) => {
                        els.status.textContent = msg || '';
                        els.status.classList.remove('success', 'error');
                        if (type) els.status.classList.add(type);
                    };

                    const normModels = (v) => {
                        const rows = Array.isArray(v) ? v : String(v || '').split(/\n+/g);
                        return [...new Set(rows.map(s => String(s || '').trim()).filter(Boolean))];
                    };

                    const cur = () => state.providers[state.editingProvider] || null;

                    const setLoading = (on) => {
                        state.loading = on;
                        [els.providerSelect, els.activeProvider, els.apiKey, els.baseUrl, els.modelsFetch, els.modelsReset, els.save, els.reload].forEach(el => { if (el) el.disabled = on; });
                        els.remoteModels.style.pointerEvents = on ? 'none' : 'auto';
                        els.remoteModels.style.opacity = on ? '.65' : '1';
                    };

                    const syncDropdowns = () => {
                        els.providerSelect.textContent = '';
                        Object.entries(state.providers).forEach(([p, item]) => {
                            const opt = document.createElement('option');
                            opt.value = p;
                            opt.textContent = (item.label || p) + (item.ready ? ' \u2713' : '');
                            opt.selected = (p === state.editingProvider);
                            els.providerSelect.appendChild(opt);
                        });
                        els.activeProvider.textContent = '';
                        Object.entries(state.providers).forEach(([p, item]) => {
                            const opt = document.createElement('option');
                            opt.value = p;
                            opt.textContent = item.label || p;
                            opt.selected = (p === state.activeProvider);
                            els.activeProvider.appendChild(opt);
                        });
                    };

                    const syncRemote = () => {
                        const item = cur();
                        if (!item) return;
                        const selected = normModels(item.models);
                        const remote = normModels(item.remote_models && item.remote_models.length ? item.remote_models : item.models);
                        els.remoteCount.textContent = remote.length + ' 个模型';
                        els.remoteStatus.textContent = remote.length ? '单击切换选中，双击设为默认模型。' : '当前还没有模型目录，可先点击"从 API 获取"。';
                        els.remoteModels.textContent = '';
                        if (remote.length) {
                            remote.forEach(m => {
                                const isSelected = selected.includes(m);
                                const isDefault = m === item.default_model;
                                const btn = document.createElement('button');
                                btn.type = 'button';
                                btn.className = 'ai-config-remote-item' + (isDefault ? ' is-default' : isSelected ? ' active' : '');
                                btn.setAttribute('data-remote-model', m);
                                const icon = document.createElement('i');
                                icon.className = 'fas ' + (isDefault ? 'fa-star' : isSelected ? 'fa-check-circle' : 'fa-circle');
                                const label = document.createElement('span');
                                label.textContent = m;
                                btn.appendChild(icon);
                                btn.appendChild(label);
                                els.remoteModels.appendChild(btn);
                            });
                        } else {
                            const empty = document.createElement('span');
                            empty.className = 'ai-config-panel-sub';
                            empty.textContent = '暂无模型目录';
                            els.remoteModels.appendChild(empty);
                        }
                    };

                    const syncForm = () => {
                        const item = cur();
                        if (!item) return;
                        const models = normModels(item.models);
                        item.models = models;
                        if (!models.includes(item.default_model)) item.default_model = models[0] || '';
                        els.panelTitle.textContent = (item.label || state.editingProvider) + ' 配置';
                        els.panelSub.textContent = (item.transport === 'gemini' ? 'Gemini 原生接口' : 'OpenAI Compatible');
                        const isActive = state.editingProvider === state.activeProvider;
                        els.activeChip.textContent = isActive ? '启用中' : '未启用';
                        els.activeChip.className = 'adv-chip ' + (isActive && item.ready ? 'success' : 'warn');
                        els.apiKey.value = item.api_key || '';
                        els.baseUrl.value = item.base_url || '';
                        syncRemote();
                    };

                    const collectForm = () => {
                        const item = cur();
                        if (!item) return;
                        item.api_key = String(els.apiKey.value || '').trim();
                        item.base_url = String(els.baseUrl.value || '').trim();
                        item.ready = item.api_key !== '' && (item.default_model || '') !== '';
                    };

                    const syncAll = () => { syncDropdowns(); syncForm(); };

                    const load = async () => {
                        setLoading(true);
                        setStatus('正在加载 AI 配置');
                        try {
                            const { data } = await axios.get(endpoint);
                            if (!data?.status) throw new Error(data?.message || '加载失败');
                            state.activeProvider = String(data?.data?.active_provider || 'gpt');
                            state.providers = data?.data?.providers || {};
                            if (!state.providers[state.editingProvider]) state.editingProvider = Object.keys(state.providers)[0] || 'gpt';
                            syncAll();
                            setStatus('AI 配置已加载', 'success');
                        } catch (err) {
                            setStatus(err?.response?.data?.message || err?.message || '加载失败', 'error');
                            if (window.toastr) window.toastr.error(err?.response?.data?.message || err?.message);
                        } finally { setLoading(false); }
                    };

                    els.providerSelect.addEventListener('change', () => {
                        collectForm();
                        state.editingProvider = String(els.providerSelect.value || 'gpt');
                        syncAll();
                    });

                    els.activeProvider.addEventListener('change', async () => {
                        const newActive = String(els.activeProvider.value || 'gpt');
                        setLoading(true);
                        setStatus('正在切换启用提供商');
                        try {
                            const { data } = await axios.put(endpoint + '/active', { active_provider: newActive });
                            if (!data?.status) throw new Error(data?.message || '切换失败');
                            state.activeProvider = String(data?.data?.active_provider || newActive);
                            state.providers = data?.data?.providers || state.providers;
                            syncAll();
                            setStatus('已切换启用提供商为 ' + (state.providers[state.activeProvider]?.label || state.activeProvider), 'success');
                            if (window.toastr) window.toastr.success('启用提供商已切换');
                        } catch (err) {
                            setStatus(err?.response?.data?.message || err?.message || '切换失败', 'error');
                            if (window.toastr) window.toastr.error(err?.response?.data?.message || err?.message);
                        } finally { setLoading(false); }
                    });

                    els.apiKey.addEventListener('input', () => {
                        const item = cur();
                        if (!item) return;
                        item.api_key = String(els.apiKey.value || '').trim();
                        item.ready = item.api_key !== '' && (item.default_model || '') !== '';
                    });

                    els.baseUrl.addEventListener('input', () => {
                        const item = cur();
                        if (!item) return;
                        item.base_url = String(els.baseUrl.value || '').trim();
                    });

                    els.modelsReset.addEventListener('click', () => {
                        const item = cur();
                        if (!item) return;
                        item.models = [...(defaultModels[state.editingProvider] || [])];
                        item.remote_models = [...item.models];
                        item.default_model = item.models[0] || '';
                        syncForm();
                    });

                    // Single click: toggle selection
                    els.remoteModels.addEventListener('click', (e) => {
                        const btn = e.target.closest('[data-remote-model]');
                        if (!btn) return;
                        const item = cur();
                        if (!item) return;
                        const model = String(btn.getAttribute('data-remote-model') || '').trim();
                        if (!model) return;
                        const selected = normModels(item.models);
                        item.models = selected.includes(model) ? selected.filter(m => m !== model) : [...selected, model];
                        if (!item.models.includes(item.default_model)) item.default_model = item.models[0] || '';
                        item.ready = (item.api_key || '') !== '' && (item.default_model || '') !== '';
                        syncForm();
                    });

                    // Double click: set as default model
                    els.remoteModels.addEventListener('dblclick', (e) => {
                        const btn = e.target.closest('[data-remote-model]');
                        if (!btn) return;
                        const item = cur();
                        if (!item) return;
                        const model = String(btn.getAttribute('data-remote-model') || '').trim();
                        if (!model) return;
                        const selected = normModels(item.models);
                        if (!selected.includes(model)) {
                            item.models = [...selected, model];
                        }
                        item.default_model = model;
                        item.ready = (item.api_key || '') !== '' && model !== '';
                        syncForm();
                        if (window.toastr) window.toastr.info('已将 ' + model + ' 设为默认模型');
                    });

                    els.modelsFetch.addEventListener('click', async () => {
                        const provider = state.editingProvider;
                        if (!provider) return;
                        collectForm();
                        setLoading(true);
                        setStatus('正在从 ' + provider + ' 获取模型列表');
                        try {
                            const { data } = await axios.post('/advanced-api/ai/config/providers/' + encodeURIComponent(provider) + '/models:fetch', {
                                api_key: String(els.apiKey.value || '').trim(),
                                base_url: String(els.baseUrl.value || '').trim(),
                            });
                            if (!data?.status) throw new Error(data?.message || '模型列表获取失败');
                            const payload = data.data || {};
                            const item = cur();
                            if (!item) throw new Error('当前提供商不存在');
                            item.remote_models = normModels(payload.models);
                            item.models = normModels(payload.selected_models);
                            item.default_model = String(payload.default_model || item.models[0] || '').trim();
                            item.ready = (item.api_key || '') !== '' && (item.default_model || '') !== '';
                            syncAll();
                            setStatus('已获取 ' + (payload.count || 0) + ' 个模型', 'success');
                            if (window.toastr) window.toastr.success('远端模型列表已同步');
                        } catch (err) {
                            setStatus(err?.response?.data?.message || err?.message || '模型列表获取失败', 'error');
                            if (window.toastr) window.toastr.error(err?.response?.data?.message || err?.message);
                        } finally { setLoading(false); }
                    });

                    els.reload.addEventListener('click', load);

                    els.save.addEventListener('click', async () => {
                        try {
                            collectForm();
                            const item = cur();
                            if (!item) throw new Error('未找到当前提供商');
                            setLoading(true);
                            setStatus('正在保存 ' + (item.label || state.editingProvider) + ' 配置');
                            const { data } = await axios.put(endpoint, {
                                provider: state.editingProvider,
                                api_key: item.api_key || '',
                                base_url: item.base_url || '',
                                default_model: item.default_model || '',
                                models: normModels(item.models),
                            });
                            if (!data?.status) throw new Error(data?.message || '保存失败');
                            state.activeProvider = String(data?.data?.active_provider || state.activeProvider);
                            state.providers = data?.data?.providers || state.providers;
                            syncAll();
                            setStatus((item.label || state.editingProvider) + ' 配置已保存', 'success');
                            if (window.toastr) window.toastr.success('配置已保存');
                        } catch (err) {
                            setStatus(err?.response?.data?.message || err?.message || '保存失败', 'error');
                            if (window.toastr) window.toastr.error(err?.response?.data?.message || err?.message);
                        } finally { setLoading(false); }
                    });

                    load();
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>