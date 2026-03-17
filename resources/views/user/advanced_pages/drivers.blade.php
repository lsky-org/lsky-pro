<x-app-layout>
    @section('title', '处理驱动')
    <x-advanced-shell page="drivers" title="处理驱动">
        <style>
            .d-cards { display: grid; gap: 10px; grid-template-columns: repeat(3, minmax(0, 1fr)); margin-top: 10px; }
            .d-card { border: 1px solid #e2e8f0; border-radius: 10px; background: #f8fafc; padding: 12px; }
            .d-card-label { font-size: 12px; color: #64748b; margin-bottom: 6px; }
            .d-card-value { font-size: 16px; font-weight: 700; color: #0f172a; }
            .d-card-note { margin-top: 4px; font-size: 12px; color: #475569; }
            .d-state { margin-top: 10px; border-radius: 8px; padding: 8px 10px; font-size: 12px; border: 1px solid #dbe2ea; background: #f8fafc; color: #334155; }
            .d-state.error { border-color: #fecaca; background: #fef2f2; color: #b91c1c; }
            .d-state.success { border-color: #bbf7d0; background: #f0fdf4; color: #166534; }
            .d-enterprise { margin-top: 10px; border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; }
            .d-enterprise-head { background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 10px; font-size: 13px; font-weight: 600; color: #0f172a; }
            .d-enterprise-body { padding: 10px; }
            .d-enterprise-empty { font-size: 12px; color: #64748b; }
            .d-pill { display: inline-flex; align-items: center; border-radius: 999px; padding: 2px 8px; font-size: 11px; border: 1px solid transparent; }
            .d-pill.ok { background: #dcfce7; color: #166534; border-color: #86efac; }
            .d-pill.fail { background: #fef2f2; color: #991b1b; border-color: #fecaca; }
            .d-pill.warn { background: #fff7ed; color: #9a3412; border-color: #fed7aa; }
            .d-pill.info { background: #eff6ff; color: #1d4ed8; border-color: #bfdbfe; }
            @media (max-width: 960px) {
                .d-cards { grid-template-columns: 1fr; }
            }
        </style>

        <div class="adv-actions">
            <button class="adv-btn primary" id="d-run">刷新驱动状态</button>
        </div>

        <div class="d-cards">
            <div class="d-card">
                <div class="d-card-label">当前驱动</div>
                <div class="d-card-value" id="d-current-driver">--</div>
                <div class="d-card-note" id="d-current-note">等待加载</div>
            </div>
            <div class="d-card">
                <div class="d-card-label">可用驱动</div>
                <div class="d-card-value" id="d-available-count">0 / 0</div>
                <div class="d-card-note" id="d-strict-note">strict: --</div>
            </div>
            <div class="d-card">
                <div class="d-card-label">企业处理状态</div>
                <div class="d-card-value" id="d-enterprise-status">--</div>
                <div class="d-card-note" id="d-enterprise-note">等待加载</div>
            </div>
        </div>

        <table class="adv-table" aria-label="驱动明细">
            <thead>
            <tr>
                <th style="width: 25%;">驱动</th>
                <th style="width: 15%;">可用性</th>
                <th>说明</th>
            </tr>
            </thead>
            <tbody id="d-table-body">
            <tr><td colspan="3">等待请求 /advanced-api/processing/drivers/status</td></tr>
            </tbody>
        </table>

        <section class="d-enterprise">
            <div class="d-enterprise-head">企业处理明细</div>
            <div class="d-enterprise-body" id="d-enterprise-body">
                <div class="d-enterprise-empty">等待加载企业处理状态</div>
            </div>
        </section>

        <div class="d-state" id="d-state">等待请求 /advanced-api/processing/drivers/status</div>

        @push('scripts')
            <script>
                (() => {
                    if (!window.axios) {
                        return;
                    }

                    const endpoint = '/advanced-api/processing/drivers/status';
                    const refreshBtn = document.getElementById('d-run');
                    const tableBody = document.getElementById('d-table-body');
                    const stateNode = document.getElementById('d-state');
                    const currentDriverNode = document.getElementById('d-current-driver');
                    const currentNoteNode = document.getElementById('d-current-note');
                    const availableCountNode = document.getElementById('d-available-count');
                    const strictNoteNode = document.getElementById('d-strict-note');
                    const enterpriseStatusNode = document.getElementById('d-enterprise-status');
                    const enterpriseNoteNode = document.getElementById('d-enterprise-note');
                    const enterpriseBodyNode = document.getElementById('d-enterprise-body');

                    const toast = (type, message) => {
                        if (window.toastr && typeof window.toastr[type] === 'function') {
                            window.toastr[type](message);
                        }
                    };

                    const escapeHtml = (value) => String(value ?? '')
                        .replace(/&/g, '&amp;')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;')
                        .replace(/"/g, '&quot;')
                        .replace(/'/g, '&#39;');

                    const parseError = (error) => error?.response?.data || { status: false, message: error?.message || '请求失败' };

                    const setState = (text, type) => {
                        stateNode.textContent = text;
                        stateNode.classList.remove('error', 'success');
                        if (type === 'error') stateNode.classList.add('error');
                        if (type === 'success') stateNode.classList.add('success');
                    };

                    const setLoadingView = () => {
                        refreshBtn.disabled = true;
                        currentDriverNode.textContent = '--';
                        currentNoteNode.textContent = '正在加载';
                        availableCountNode.textContent = '-- / --';
                        strictNoteNode.textContent = 'strict: --';
                        enterpriseStatusNode.textContent = '--';
                        enterpriseNoteNode.textContent = '正在加载';
                        tableBody.innerHTML = '<tr><td colspan="3">加载中...</td></tr>';
                        enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">加载中...</div>';
                        setState('请求中: ' + endpoint, '');
                    };

                    const renderEnterpriseDetails = (enterprise) => {
                        if (enterprise === null || enterprise === undefined) {
                            enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">接口未返回 enterprise 字段，当前仅展示驱动检查结果。</div>';
                            return;
                        }

                        if (typeof enterprise !== 'object') {
                            enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">' + escapeHtml(String(enterprise)) + '</div>';
                            return;
                        }

                        const entries = Object.entries(enterprise);
                        if (!entries.length) {
                            enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">enterprise 对象为空</div>';
                            return;
                        }

                        enterpriseBodyNode.innerHTML = '<table class="adv-table" style="margin-top:0;"><thead><tr><th style="width:35%;">字段</th><th>值</th></tr></thead><tbody>' + entries.map(([key, value]) => {
                            let rendered = '';
                            if (typeof value === 'boolean') {
                                rendered = value ? '<span class="d-pill ok">true</span>' : '<span class="d-pill fail">false</span>';
                            } else if (Array.isArray(value) || (value && typeof value === 'object')) {
                                rendered = '<code>' + escapeHtml(JSON.stringify(value)) + '</code>';
                            } else {
                                rendered = escapeHtml(String(value));
                            }
                            return '<tr><td>' + escapeHtml(key) + '</td><td>' + rendered + '</td></tr>';
                        }).join('') + '</tbody></table>';
                    };

                    const renderDrivers = (drivers, configured, strict, enterprise) => {
                        const driverNames = Object.keys(drivers || {});
                        const availableCount = driverNames.filter((name) => Boolean(drivers?.[name]?.available)).length;
                        const totalCount = driverNames.length;

                        const currentDriver = configured || '--';
                        currentDriverNode.textContent = currentDriver;

                        const currentDriverData = configured ? drivers?.[configured] : null;
                        const currentAvailable = Boolean(currentDriverData?.available);
                        if (configured && currentDriverData) {
                            currentNoteNode.innerHTML = currentAvailable
                                ? '<span class="d-pill ok">当前驱动可用</span>'
                                : '<span class="d-pill fail">当前驱动不可用</span>';
                        } else {
                            currentNoteNode.innerHTML = '<span class="d-pill warn">配置驱动未在列表中出现</span>';
                        }

                        availableCountNode.textContent = availableCount + ' / ' + totalCount;
                        strictNoteNode.textContent = 'strict: ' + (strict ? 'true' : 'false');

                        const enterpriseData = enterprise ?? null;
                        if (enterpriseData === null) {
                            enterpriseStatusNode.innerHTML = '<span class="d-pill warn">未返回</span>';
                            enterpriseNoteNode.textContent = '接口未返回 enterprise 字段';
                        } else if (typeof enterpriseData === 'object') {
                            const enabled = enterpriseData.enabled;
                            if (typeof enabled === 'boolean') {
                                enterpriseStatusNode.innerHTML = enabled
                                    ? '<span class="d-pill ok">已启用</span>'
                                    : '<span class="d-pill fail">未启用</span>';
                                enterpriseNoteNode.textContent = enabled ? '企业处理可用' : '企业处理未启用';
                            } else {
                                enterpriseStatusNode.innerHTML = '<span class="d-pill info">已返回</span>';
                                enterpriseNoteNode.textContent = '请查看下方 enterprise 明细';
                            }
                        } else {
                            enterpriseStatusNode.innerHTML = '<span class="d-pill info">已返回</span>';
                            enterpriseNoteNode.textContent = String(enterpriseData);
                        }

                        if (!driverNames.length) {
                            tableBody.innerHTML = '<tr><td colspan="3">暂无驱动数据</td></tr>';
                        } else {
                            tableBody.innerHTML = driverNames.map((name) => {
                                const item = drivers[name] || {};
                                const available = Boolean(item.available);
                                const reason = item.reason ? String(item.reason) : (available ? '可用' : '未知原因');
                                return '<tr>' +
                                    '<td>' + escapeHtml(name) + (name === configured ? ' <span class="d-pill info">当前</span>' : '') + '</td>' +
                                    '<td>' + (available ? '<span class="d-pill ok">可用</span>' : '<span class="d-pill fail">不可用</span>') + '</td>' +
                                    '<td>' + escapeHtml(reason) + '</td>' +
                                '</tr>';
                            }).join('');
                        }

                        renderEnterpriseDetails(enterpriseData);
                    };

                    const loadDrivers = async () => {
                        setLoadingView();
                        try {
                            const { data } = await axios.get(endpoint);
                            if (!data?.status) {
                                const message = data?.message || '驱动状态加载失败';
                                setState(message, 'error');
                                tableBody.innerHTML = '<tr><td colspan="3">' + escapeHtml(message) + '</td></tr>';
                                enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">加载失败</div>';
                                toast('error', message);
                                return;
                            }

                            const payload = data?.data || {};
                            renderDrivers(payload.drivers || {}, String(payload.configured || ''), Boolean(payload.strict), payload.enterprise);
                            setState('刷新成功（' + new Date().toLocaleString() + '）', 'success');
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '驱动状态请求失败';
                            setState(message, 'error');
                            tableBody.innerHTML = '<tr><td colspan="3">' + escapeHtml(message) + '</td></tr>';
                            enterpriseBodyNode.innerHTML = '<div class="d-enterprise-empty">加载失败</div>';
                            toast('error', message);
                        } finally {
                            refreshBtn.disabled = false;
                        }
                    };

                    refreshBtn.addEventListener('click', loadDrivers);
                    loadDrivers();
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
