<x-app-layout>
    @section('title', '审核中心')
    <x-advanced-shell page="reviews" title="审核中心">
        <style>
            .r-state { margin-top: 10px; border-radius: 8px; padding: 8px 10px; font-size: 12px; border: 1px solid #dbe2ea; background: #f8fafc; color: #334155; }
            .r-state.error { border-color: #fecaca; background: #fef2f2; color: #b91c1c; }
            .r-state.success { border-color: #bbf7d0; background: #f0fdf4; color: #166534; }
            .r-pagination { margin-top: 10px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
            .r-page-meta { font-size: 12px; color: #64748b; }
            .r-thumb-wrap { width: 72px; height: 72px; border: 1px solid #e2e8f0; border-radius: 8px; background: #f8fafc; overflow: hidden; display: inline-flex; align-items: center; justify-content: center; }
            .r-thumb { width: 100%; height: 100%; object-fit: cover; display: block; }
            .r-thumb-fallback { font-size: 11px; color: #94a3b8; }
            .r-key { max-width: 180px; word-break: break-all; }
            .r-actions { display: flex; align-items: center; gap: 6px; flex-wrap: wrap; }
            .r-reason-input { min-width: 180px; max-width: 260px; }
            .r-badge { display: inline-flex; align-items: center; border-radius: 999px; padding: 2px 8px; font-size: 11px; border: 1px solid transparent; }
            .r-badge.pending { background: #fff7ed; color: #9a3412; border-color: #fed7aa; }
            .r-badge.approved { background: #dcfce7; color: #166534; border-color: #86efac; }
            .r-badge.rejected { background: #fef2f2; color: #991b1b; border-color: #fecaca; }
        </style>

        <div class="adv-grid" style="grid-template-columns: repeat(4, minmax(0, 1fr));">
            <label class="adv-field">
                <span>审核状态</span>
                <select id="r-status" class="adv-select">
                    <option value="review_pending">review_pending</option>
                    <option value="review_approved">review_approved</option>
                    <option value="review_rejected">review_rejected</option>
                </select>
            </label>
            <label class="adv-field">
                <span>每页</span>
                <select id="r-per-page" class="adv-select">
                    <option value="20">20</option>
                    <option value="40" selected>40</option>
                    <option value="100">100</option>
                </select>
            </label>
            <label class="adv-field">
                <span>页码</span>
                <input id="r-page-input" class="adv-input" type="number" min="1" value="1" />
            </label>
            <div class="adv-field">
                <span>操作</span>
                <div class="adv-actions" style="margin-top:0;">
                    <button class="adv-btn primary" id="r-list">刷新列表</button>
                </div>
            </div>
        </div>

        <div class="r-pagination">
            <button class="adv-btn" id="r-prev">上一页</button>
            <button class="adv-btn" id="r-next">下一页</button>
            <span class="r-page-meta" id="r-page-meta">等待请求 /advanced-api/admin/reviews</span>
        </div>

        <table class="adv-table" aria-label="审核列表">
            <thead>
            <tr>
                <th style="width: 90px;">图片</th>
                <th style="width: 220px;">Key / 文件</th>
                <th style="width: 150px;">上传用户</th>
                <th style="width: 140px;">大小 / 类型</th>
                <th style="width: 140px;">上传时间</th>
                <th style="width: 150px;">审核状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody id="r-table-body">
            <tr><td colspan="7">等待请求 /advanced-api/admin/reviews</td></tr>
            </tbody>
        </table>

        <div class="r-state" id="r-state">等待请求 /advanced-api/admin/reviews</div>

        @push('scripts')
            <script>
                (() => {
                    if (!window.axios) {
                        return;
                    }

                    const endpoint = '/advanced-api/admin/reviews';
                    const state = {
                        page: 1,
                        lastPage: 1,
                        loading: false,
                    };

                    const statusNode = document.getElementById('r-status');
                    const perPageNode = document.getElementById('r-per-page');
                    const pageInputNode = document.getElementById('r-page-input');
                    const listBtn = document.getElementById('r-list');
                    const prevBtn = document.getElementById('r-prev');
                    const nextBtn = document.getElementById('r-next');
                    const pageMetaNode = document.getElementById('r-page-meta');
                    const tableBody = document.getElementById('r-table-body');
                    const stateNode = document.getElementById('r-state');

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

                    const formatBytes = (bytes) => {
                        const size = Number(bytes || 0);
                        if (!Number.isFinite(size) || size <= 0) return '-';
                        if (size < 1024) return size + 'B';
                        if (size < 1024 * 1024) return (size / 1024).toFixed(1) + 'KB';
                        return (size / (1024 * 1024)).toFixed(1) + 'MB';
                    };

                    const reviewStatusBadge = (status) => {
                        const value = String(status || '');
                        if (value === 'review_pending') return '<span class="r-badge pending">待审核</span>';
                        if (value === 'review_approved') return '<span class="r-badge approved">已通过</span>';
                        if (value === 'review_rejected') return '<span class="r-badge rejected">已驳回</span>';
                        return escapeHtml(value || '-');
                    };

                    const buildImageUrl = (item) => {
                        const key = String(item?.key || '').trim();
                        const ext = String(item?.extension || '').trim();
                        if (!key || !ext) return '';
                        return '/' + encodeURIComponent(key) + '.' + encodeURIComponent(ext);
                    };

                    const setState = (message, type) => {
                        stateNode.textContent = message;
                        stateNode.classList.remove('error', 'success');
                        if (type === 'error') stateNode.classList.add('error');
                        if (type === 'success') stateNode.classList.add('success');
                    };

                    const setLoading = () => {
                        state.loading = true;
                        listBtn.disabled = true;
                        prevBtn.disabled = true;
                        nextBtn.disabled = true;
                        tableBody.innerHTML = '<tr><td colspan="7">加载中...</td></tr>';
                        setState('请求中: ' + endpoint, '');
                    };

                    const updatePagination = (page, lastPage, total, count) => {
                        state.page = page;
                        state.lastPage = lastPage;
                        pageInputNode.value = String(page);
                        prevBtn.disabled = state.loading || page <= 1;
                        nextBtn.disabled = state.loading || page >= lastPage;
                        pageMetaNode.textContent = '第 ' + page + ' / ' + lastPage + ' 页，共 ' + total + ' 条，当前 ' + count + ' 条';
                    };

                    const renderRows = (items, currentStatus) => {
                        if (!Array.isArray(items) || !items.length) {
                            tableBody.innerHTML = '<tr><td colspan="7">暂无数据</td></tr>';
                            return;
                        }

                        tableBody.innerHTML = items.map((item) => {
                            const imageUrl = buildImageUrl(item);
                            const key = String(item?.key || '');
                            const originName = String(item?.origin_name || item?.alias_name || '-');
                            const userName = String(item?.user?.name || '-');
                            const userEmail = String(item?.user?.email || '-');
                            const isPending = String(item?.review_status || '') === 'review_pending' && currentStatus === 'review_pending';
                            const reason = String(item?.review_reason || '').trim();
                            return '<tr data-key="' + escapeHtml(key) + '">' +
                                '<td>' +
                                    (imageUrl
                                        ? '<a href="' + escapeHtml(imageUrl) + '" target="_blank" rel="noopener"><span class="r-thumb-wrap"><img class="r-thumb" src="' + escapeHtml(imageUrl) + '" alt="preview" loading="lazy"/></span></a>'
                                        : '<span class="r-thumb-wrap"><span class="r-thumb-fallback">无预览</span></span>') +
                                '</td>' +
                                '<td><div class="r-key">' + escapeHtml(key || '-') + '</div><div style="font-size:11px;color:#64748b;margin-top:4px;">' + escapeHtml(originName) + '</div></td>' +
                                '<td>' + escapeHtml(userName) + '<div style="font-size:11px;color:#64748b;">' + escapeHtml(userEmail) + '</div></td>' +
                                '<td>' + escapeHtml(formatBytes(item?.size)) + '<div style="font-size:11px;color:#64748b;">' + escapeHtml(item?.mimetype || '-') + '</div></td>' +
                                '<td>' + escapeHtml(item?.created_at || '-') + '</td>' +
                                '<td>' + reviewStatusBadge(item?.review_status) + (reason ? '<div style="margin-top:4px;font-size:11px;color:#991b1b;">原因: ' + escapeHtml(reason) + '</div>' : '') + '</td>' +
                                '<td>' +
                                    (isPending
                                        ? '<div class="r-actions">' +
                                            '<button type="button" class="adv-btn js-approve" data-key="' + escapeHtml(key) + '">通过</button>' +
                                            '<input type="text" class="adv-input r-reason-input js-reason" data-key="' + escapeHtml(key) + '" placeholder="驳回原因（必填）" />' +
                                            '<button type="button" class="adv-btn js-reject" data-key="' + escapeHtml(key) + '">驳回</button>' +
                                          '</div>'
                                        : '<span style="font-size:12px;color:#64748b;">当前状态不可操作</span>') +
                                '</td>' +
                            '</tr>';
                        }).join('');
                    };

                    const loadList = async (targetPage) => {
                        const nextPage = Math.max(1, Number(targetPage || 1));
                        const status = String(statusNode.value || 'review_pending');
                        const perPage = Number(perPageNode.value || 40);

                        setLoading();
                        try {
                            const { data } = await axios.get(endpoint, {
                                params: {
                                    status,
                                    per_page: perPage,
                                    page: nextPage,
                                }
                            });

                            if (!data?.status) {
                                const message = data?.message || '审核列表加载失败';
                                tableBody.innerHTML = '<tr><td colspan="7">' + escapeHtml(message) + '</td></tr>';
                                updatePagination(nextPage, 1, 0, 0);
                                setState(message, 'error');
                                toast('error', message);
                                return;
                            }

                            const payload = data?.data || {};
                            const items = Array.isArray(payload?.data) ? payload.data : [];
                            const currentPage = Number(payload?.current_page || nextPage);
                            const lastPage = Math.max(1, Number(payload?.last_page || 1));
                            const total = Number(payload?.total || items.length || 0);

                            renderRows(items, status);
                            updatePagination(currentPage, lastPage, total, items.length);
                            setState('列表刷新成功（' + new Date().toLocaleString() + '）', 'success');
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '审核列表请求失败';
                            tableBody.innerHTML = '<tr><td colspan="7">' + escapeHtml(message) + '</td></tr>';
                            updatePagination(nextPage, 1, 0, 0);
                            setState(message, 'error');
                            toast('error', message);
                        } finally {
                            state.loading = false;
                            listBtn.disabled = false;
                            prevBtn.disabled = state.page <= 1;
                            nextBtn.disabled = state.page >= state.lastPage;
                        }
                    };

                    const runAction = async (action, key, reason) => {
                        if (!key) {
                            setState('缺少图片 key', 'error');
                            toast('error', '缺少图片 key');
                            return;
                        }

                        if (action === 'reject' && !String(reason || '').trim()) {
                            setState('驳回必须填写原因', 'error');
                            toast('warning', '驳回必须填写原因');
                            return;
                        }

                        setState((action === 'approve' ? '通过中' : '驳回中') + ': ' + key, '');
                        try {
                            let response;
                            if (action === 'approve') {
                                response = await axios.post('/advanced-api/admin/reviews/' + encodeURIComponent(key) + '/approve');
                            } else {
                                response = await axios.post('/advanced-api/admin/reviews/' + encodeURIComponent(key) + '/reject', {
                                    review_reason: String(reason || '').trim(),
                                });
                            }

                            const data = response?.data || {};
                            if (!data?.status) {
                                const message = data?.message || '操作失败';
                                setState(message, 'error');
                                toast('error', message);
                                return;
                            }

                            const okText = data?.message || (action === 'approve' ? '审核通过' : '审核驳回');
                            setState(okText, 'success');
                            toast('success', okText);
                            await loadList(state.page);
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '操作请求失败';
                            setState(message, 'error');
                            toast('error', message);
                        }
                    };

                    listBtn.addEventListener('click', () => loadList(Number(pageInputNode.value || 1)));
                    prevBtn.addEventListener('click', () => {
                        if (state.page > 1) {
                            loadList(state.page - 1);
                        }
                    });
                    nextBtn.addEventListener('click', () => {
                        if (state.page < state.lastPage) {
                            loadList(state.page + 1);
                        }
                    });

                    statusNode.addEventListener('change', () => loadList(1));
                    perPageNode.addEventListener('change', () => loadList(1));
                    pageInputNode.addEventListener('keydown', (event) => {
                        if (event.key === 'Enter') {
                            loadList(Number(pageInputNode.value || 1));
                        }
                    });

                    tableBody.addEventListener('click', (event) => {
                        const approveBtn = event.target.closest('.js-approve');
                        if (approveBtn) {
                            const key = String(approveBtn.dataset.key || '').trim();
                            runAction('approve', key, '');
                            return;
                        }

                        const rejectBtn = event.target.closest('.js-reject');
                        if (rejectBtn) {
                            const key = String(rejectBtn.dataset.key || '').trim();
                            const row = rejectBtn.closest('tr');
                            const reasonInput = row ? row.querySelector('.js-reason') : null;
                            const reason = reasonInput ? String(reasonInput.value || '').trim() : '';
                            runAction('reject', key, reason);
                        }
                    });

                    loadList(1);
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
