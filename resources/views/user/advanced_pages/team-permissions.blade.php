<x-app-layout>
    @section('title', '团队权限')
    <x-advanced-shell page="team-permissions" title="团队权限">
        <style>
            .m-state { margin-top: 10px; border-radius: 8px; padding: 8px 10px; font-size: 12px; border: 1px solid #dbe2ea; background: #f8fafc; color: #334155; }
            .m-state.error { border-color: #fecaca; background: #fef2f2; color: #b91c1c; }
            .m-state.success { border-color: #bbf7d0; background: #f0fdf4; color: #166534; }
            .m-summary { margin-top: 10px; display: grid; gap: 10px; grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .m-card { border: 1px solid #e2e8f0; border-radius: 10px; background: #f8fafc; padding: 10px; }
            .m-card-label { font-size: 12px; color: #64748b; margin-bottom: 6px; }
            .m-card-value { font-size: 14px; font-weight: 700; color: #0f172a; word-break: break-word; }
            .m-role { display: inline-flex; align-items: center; border-radius: 999px; padding: 2px 8px; font-size: 11px; border: 1px solid transparent; }
            .m-role.owner { background: #fffbeb; color: #92400e; border-color: #fde68a; }
            .m-role.admin { background: #eff6ff; color: #1d4ed8; border-color: #bfdbfe; }
            .m-role.member { background: #ecfeff; color: #0f766e; border-color: #99f6e4; }
            .m-perm-tags { display: flex; gap: 4px; flex-wrap: wrap; max-width: 400px; }
            .m-perm-tag { display: inline-flex; align-items: center; border: 1px solid #dbe2ea; border-radius: 999px; padding: 2px 8px; font-size: 11px; color: #334155; background: #fff; }
            .m-actions-inline { display: flex; align-items: center; gap: 6px; }
            @media (max-width: 960px) {
                .m-summary { grid-template-columns: 1fr; }
            }
        </style>

        <div class="adv-grid" style="grid-template-columns: minmax(0, 2fr) minmax(0, 1fr);">
            <label class="adv-field">
                <span>空间列表（先加载）</span>
                <select id="m-space" class="adv-select">
                    <option value="">请选择空间</option>
                </select>
            </label>
            <div class="adv-field">
                <span>操作</span>
                <div class="adv-actions" style="margin-top:0;">
                    <button class="adv-btn" id="m-load-spaces">刷新空间</button>
                    <button class="adv-btn primary" id="m-load-members">加载成员</button>
                </div>
            </div>
        </div>

        <div class="m-summary">
            <div class="m-card">
                <div class="m-card-label">当前空间</div>
                <div class="m-card-value" id="m-space-name">--</div>
            </div>
            <div class="m-card">
                <div class="m-card-label">我的角色</div>
                <div class="m-card-value" id="m-operator-role">--</div>
            </div>
            <div class="m-card">
                <div class="m-card-label">成员数量</div>
                <div class="m-card-value" id="m-count">0</div>
            </div>
        </div>

        <table class="adv-table" aria-label="空间成员权限表">
            <thead>
            <tr>
                <th style="width: 90px;">用户ID</th>
                <th style="width: 180px;">成员</th>
                <th style="width: 100px;">角色</th>
                <th>权限标签</th>
                <th style="width: 220px;">修改角色</th>
            </tr>
            </thead>
            <tbody id="m-table-body">
            <tr><td colspan="5">请先加载空间列表，再加载成员数据</td></tr>
            </tbody>
        </table>

        <div class="m-state" id="m-state">等待请求 /advanced-api/spaces</div>

        @push('scripts')
            <script>
                (() => {
                    if (!window.axios) {
                        return;
                    }

                    const spacesEndpoint = '/advanced-api/spaces';
                    const membersEndpoint = '/advanced-api/spaces/{id}/members';
                    const roleEndpoint = '/advanced-api/spaces/{id}/members/{userId}/role';

                    const spaceNode = document.getElementById('m-space');
                    const loadSpacesBtn = document.getElementById('m-load-spaces');
                    const loadMembersBtn = document.getElementById('m-load-members');
                    const tableBody = document.getElementById('m-table-body');
                    const stateNode = document.getElementById('m-state');
                    const spaceNameNode = document.getElementById('m-space-name');
                    const operatorRoleNode = document.getElementById('m-operator-role');
                    const countNode = document.getElementById('m-count');

                    const pageState = {
                        loadingSpaces: false,
                        loadingMembers: false,
                        spaces: [],
                        currentSpaceId: 0,
                    };

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

                    const setState = (message, type) => {
                        stateNode.textContent = message;
                        stateNode.classList.remove('error', 'success');
                        if (type === 'error') stateNode.classList.add('error');
                        if (type === 'success') stateNode.classList.add('success');
                    };

                    const roleBadge = (role) => {
                        const value = String(role || '');
                        if (value === 'owner') return '<span class="m-role owner">owner</span>';
                        if (value === 'admin') return '<span class="m-role admin">admin</span>';
                        return '<span class="m-role member">member</span>';
                    };

                    const renderPermissions = (permissions) => {
                        if (!Array.isArray(permissions) || !permissions.length) {
                            return '<span style="font-size:12px;color:#94a3b8;">无</span>';
                        }
                        return '<div class="m-perm-tags">' + permissions.map((item) => '<span class="m-perm-tag">' + escapeHtml(item) + '</span>').join('') + '</div>';
                    };

                    const setHeader = (payload) => {
                        const spaceName = payload?.data?.space?.name || '--';
                        const operatorRole = payload?.data?.operator?.role || '--';
                        const memberCount = Array.isArray(payload?.data?.members) ? payload.data.members.length : 0;
                        spaceNameNode.textContent = String(spaceName);
                        operatorRoleNode.textContent = String(operatorRole);
                        countNode.textContent = String(memberCount);
                    };

                    const setTableLoading = (text) => {
                        tableBody.innerHTML = '<tr><td colspan="5">' + escapeHtml(text) + '</td></tr>';
                    };

                    const renderMembers = (payload, spaceId) => {
                        const members = Array.isArray(payload?.data?.members) ? payload.data.members : [];
                        if (!members.length) {
                            tableBody.innerHTML = '<tr><td colspan="5">当前空间没有成员</td></tr>';
                            return;
                        }

                        tableBody.innerHTML = members.map((member) => {
                            const userId = Number(member?.user_id || 0);
                            const role = String(member?.role || 'member');
                            const isOwner = role === 'owner';
                            const isSelf = Boolean(member?.is_self);
                            const name = String(member?.name || '-');
                            const email = String(member?.email || '-');
                            return '<tr>' +
                                '<td>' + userId + '</td>' +
                                '<td>' + escapeHtml(name) + (isSelf ? '（我）' : '') + '<div style="font-size:11px;color:#64748b;">' + escapeHtml(email) + '</div></td>' +
                                '<td>' + roleBadge(role) + '</td>' +
                                '<td>' + renderPermissions(member?.permissions) + '</td>' +
                                '<td>' +
                                    (isOwner
                                        ? '<span style="font-size:12px;color:#64748b;">owner 不可修改</span>'
                                        : '<div class="m-actions-inline">' +
                                            '<select class="adv-select js-role" data-user-id="' + userId + '" style="min-height:32px;min-width:110px;">' +
                                                '<option value="admin" ' + (role === 'admin' ? 'selected' : '') + '>admin</option>' +
                                                '<option value="member" ' + (role === 'member' ? 'selected' : '') + '>member</option>' +
                                            '</select>' +
                                            '<button type="button" class="adv-btn js-update-role" data-space-id="' + spaceId + '" data-user-id="' + userId + '">保存</button>' +
                                          '</div>') +
                                '</td>' +
                            '</tr>';
                        }).join('');
                    };

                    const selectedSpaceId = () => Number(spaceNode.value || 0);

                    const renderSpaces = (spaces, currentSpaceId) => {
                        if (!Array.isArray(spaces) || !spaces.length) {
                            spaceNode.innerHTML = '<option value="">暂无可用空间</option>';
                            pageState.currentSpaceId = 0;
                            return;
                        }

                        pageState.spaces = spaces;
                        const preferred = currentSpaceId > 0
                            ? currentSpaceId
                            : Number(spaces.find((item) => item?.is_current)?.id || spaces[0]?.id || 0);
                        pageState.currentSpaceId = preferred;

                        spaceNode.innerHTML = spaces.map((item) => {
                            const id = Number(item?.id || 0);
                            const name = String(item?.name || '未命名空间');
                            const role = String(item?.role || '-');
                            const suffix = item?.is_personal ? '（个人）' : '（团队）';
                            const currentText = item?.is_current ? ' [当前]' : '';
                            return '<option value="' + id + '" ' + (id === preferred ? 'selected' : '') + '>' +
                                escapeHtml(name + suffix + ' · role:' + role + currentText) +
                            '</option>';
                        }).join('');
                    };

                    const loadMembers = async (spaceId) => {
                        const id = Number(spaceId || 0);
                        if (!id) {
                            setState('请先选择空间', 'error');
                            toast('warning', '请先选择空间');
                            return;
                        }

                        pageState.loadingMembers = true;
                        loadMembersBtn.disabled = true;
                        setTableLoading('加载中: ' + membersEndpoint.replace('{id}', String(id)));
                        setState('请求中: ' + membersEndpoint.replace('{id}', String(id)), '');

                        try {
                            const { data } = await axios.get('/advanced-api/spaces/' + encodeURIComponent(id) + '/members');
                            if (!data?.status) {
                                const message = data?.message || '成员加载失败';
                                setTableLoading(message);
                                setState(message, 'error');
                                toast('error', message);
                                return;
                            }

                            renderMembers(data, id);
                            setHeader(data);
                            setState('成员加载成功（' + new Date().toLocaleString() + '）', 'success');
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '成员请求失败';
                            setTableLoading(message);
                            setState(message, 'error');
                            toast('error', message);
                        } finally {
                            pageState.loadingMembers = false;
                            loadMembersBtn.disabled = false;
                        }
                    };

                    const loadSpaces = async (autoLoadMembers) => {
                        pageState.loadingSpaces = true;
                        loadSpacesBtn.disabled = true;
                        loadMembersBtn.disabled = true;
                        setState('请求中: ' + spacesEndpoint, '');

                        try {
                            const { data } = await axios.get(spacesEndpoint);
                            if (!data?.status) {
                                const message = data?.message || '空间列表加载失败';
                                renderSpaces([], 0);
                                setTableLoading(message);
                                setState(message, 'error');
                                toast('error', message);
                                return;
                            }

                            const spaces = Array.isArray(data?.data?.spaces) ? data.data.spaces : [];
                            const currentSpaceId = Number(data?.data?.current_space_id || 0);
                            renderSpaces(spaces, currentSpaceId);

                            if (!spaces.length) {
                                setTableLoading('暂无空间可操作');
                                setHeader({ data: { space: { name: '--' }, operator: { role: '--' }, members: [] } });
                                setState('空间列表为空', 'error');
                                return;
                            }

                            setState('空间列表刷新成功', 'success');
                            if (autoLoadMembers) {
                                await loadMembers(selectedSpaceId());
                            }
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '空间列表请求失败';
                            renderSpaces([], 0);
                            setTableLoading(message);
                            setState(message, 'error');
                            toast('error', message);
                        } finally {
                            pageState.loadingSpaces = false;
                            loadSpacesBtn.disabled = false;
                            loadMembersBtn.disabled = false;
                        }
                    };

                    const updateRole = async (spaceId, userId, role) => {
                        if (!spaceId || !userId || !role) {
                            setState('参数缺失，无法更新角色', 'error');
                            return;
                        }

                        setState('请求中: ' + roleEndpoint.replace('{id}', String(spaceId)).replace('{userId}', String(userId)), '');
                        try {
                            const { data } = await axios.put(
                                '/advanced-api/spaces/' + encodeURIComponent(spaceId) + '/members/' + encodeURIComponent(userId) + '/role',
                                { role }
                            );

                            if (!data?.status) {
                                const message = data?.message || '角色更新失败';
                                setState(message, 'error');
                                toast('error', message);
                                return;
                            }

                            setState(data?.message || '角色更新成功', 'success');
                            toast('success', data?.message || '角色更新成功');
                            await loadMembers(spaceId);
                        } catch (error) {
                            const parsed = parseError(error);
                            const message = parsed?.message || '角色更新请求失败';
                            setState(message, 'error');
                            toast('error', message);
                        }
                    };

                    loadSpacesBtn.addEventListener('click', () => loadSpaces(false));
                    loadMembersBtn.addEventListener('click', () => loadMembers(selectedSpaceId()));
                    spaceNode.addEventListener('change', () => loadMembers(selectedSpaceId()));

                    tableBody.addEventListener('click', (event) => {
                        const updateBtn = event.target.closest('.js-update-role');
                        if (!updateBtn) return;

                        const spaceId = Number(updateBtn.dataset.spaceId || selectedSpaceId() || 0);
                        const userId = Number(updateBtn.dataset.userId || 0);
                        const select = tableBody.querySelector('.js-role[data-user-id="' + userId + '"]');
                        const role = select ? String(select.value || '').trim() : '';
                        updateRole(spaceId, userId, role);
                    });

                    loadSpaces(true);
                })();
            </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
