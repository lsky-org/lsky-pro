@section('title', '角色组管理')

@push('styles')
    <style>
        /* ===== Root Shell ===== */
        .group-index {
            display: flex;
            flex-direction: column;
            gap: 0;
            color: #0f172a;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* ===== Header Bar ===== */
        .group-index-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 24px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            margin-bottom: 16px;
        }

        .group-index-header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .group-index-header-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            flex-shrink: 0;
        }

        .group-index-header-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.2;
        }

        .group-index-header-sub {
            font-size: 13px;
            color: #64748b;
            margin-top: 2px;
        }

        .group-index-header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* ===== Search Bar ===== */
        .group-index-search {
            position: relative;
            display: flex;
            align-items: center;
        }

        .group-index-search-icon {
            position: absolute;
            left: 12px;
            color: #94a3b8;
            font-size: 13px;
            pointer-events: none;
        }

        .group-index-search input {
            padding: 9px 14px 9px 36px;
            font-size: 13px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #f8fafc;
            color: #0f172a;
            outline: none;
            width: 220px;
            transition: all .2s ease;
        }

        .group-index-search input::placeholder {
            color: #94a3b8;
        }

        .group-index-search input:focus {
            border-color: #93c5fd;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, .1);
        }

        /* ===== Create Button ===== */
        .group-index-btn-create {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 20px;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all .2s ease;
            text-decoration: none;
            white-space: nowrap;
        }

        .group-index-btn-create:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 14px rgba(29, 78, 216, .35);
        }

        .group-index-btn-create:active {
            transform: translateY(0);
        }

        /* ===== Cards Grid ===== */
        .group-index-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        @media (max-width: 768px) {
            .group-index-grid {
                grid-template-columns: 1fr;
            }

            .group-index-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
            }

            .group-index-header-right {
                width: 100%;
                flex-wrap: wrap;
            }

            .group-index-search input {
                width: 100%;
            }
        }

        /* ===== Group Card ===== */
        .group-index-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            transition: all .2s ease;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .group-index-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 8px 24px rgba(15, 23, 42, .08);
            transform: translateY(-2px);
        }

        /* -- Card Header -- */
        .group-index-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .group-index-card-title-area {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .group-index-card-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #64748b;
            flex-shrink: 0;
        }

        .group-index-card-name {
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .group-index-card-id {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 600;
            margin-top: 1px;
        }

        /* -- Badges -- */
        .group-index-badges {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
            flex-shrink: 0;
        }

        .group-index-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .02em;
        }

        .group-index-badge.default {
            background: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
        }

        .group-index-badge.guest {
            background: #fefce8;
            color: #a16207;
            border: 1px solid #fde68a;
        }

        /* -- Stats Row -- */
        .group-index-stats {
            display: flex;
            gap: 16px;
        }

        .group-index-stat {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            background: #f8fafc;
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            flex: 1;
        }

        .group-index-stat-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #64748b;
            flex-shrink: 0;
        }

        .group-index-stat-value {
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1;
        }

        .group-index-stat-label {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 600;
            margin-top: 2px;
        }

        /* -- Feature Chips -- */
        .group-index-features {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .group-index-chip {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 600;
            border: 1px solid transparent;
            transition: all .15s ease;
        }

        .group-index-chip.on {
            background: #f0fdf4;
            color: #16a34a;
            border-color: #bbf7d0;
        }

        .group-index-chip.off {
            background: #fef2f2;
            color: #dc2626;
            border-color: #fecaca;
        }

        .group-index-chip-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .group-index-chip.on .group-index-chip-dot {
            background: #22c55e;
        }

        .group-index-chip.off .group-index-chip-dot {
            background: #ef4444;
        }

        /* ===== Detail Info ===== */
        .group-index-details {
            display: flex;
            flex-direction: column;
            gap: 0;
            background: #f8fafc;
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            overflow: hidden;
        }

        .group-index-detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 14px;
            border-bottom: 1px solid #f1f5f9;
        }

        .group-index-detail-row:last-child {
            border-bottom: none;
        }

        .group-index-detail-label {
            font-size: 12px;
            color: #94a3b8;
            font-weight: 600;
        }

        .group-index-detail-value {
            font-size: 12px;
            color: #0f172a;
            font-weight: 600;
        }


        /* -- Card Footer / Actions -- */
        .group-index-card-footer {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
            margin-top: auto;
        }

        .group-index-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 16px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            transition: all .18s ease;
            text-decoration: none;
            border: 1px solid transparent;
        }

        .group-index-btn-edit {
            color: #1d4ed8;
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .group-index-btn-edit:hover {
            background: #dbeafe;
            color: #1e40af;
        }

        .group-index-btn-delete {
            color: #dc2626;
            background: #fef2f2;
            border-color: #fecaca;
        }

        .group-index-btn-delete:hover {
            background: #fee2e2;
            color: #b91c1c;
        }

        /* ===== Empty State ===== */
        .group-index-empty {
            padding: 48px 24px;
            text-align: center;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
        }

        /* ===== Pagination ===== */
        .group-index-pagination {
            margin-top: 20px;
        }
    </style>
@endpush

<x-app-layout>
    <div class="group-index">

        {{-- ===== Header Bar ===== --}}
        <div class="group-index-header">
            <div class="group-index-header-left">
                <div class="group-index-header-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div>
                    <div class="group-index-header-title">角色组管理</div>
                    <div class="group-index-header-sub">管理用户角色组的权限、配额和存储策略</div>
                </div>
            </div>
            <div class="group-index-header-right">
                <form action="{{ route('admin.groups') }}" method="get" class="group-index-search">
                    <i class="fas fa-search group-index-search-icon"></i>
                    <input type="text" name="keywords" placeholder="搜索角色组..." value="{{ request('keywords') }}" />
                </form>
                <a href="{{ route('admin.group.create') }}" class="group-index-btn-create">
                    <i class="fas fa-plus"></i>
                    创建角色组
                </a>
            </div>
        </div>

        {{-- ===== Cards Grid ===== --}}
        @if($groups->isNotEmpty())
            <div class="group-index-grid">
                @foreach($groups as $group)
                    <div class="group-index-card" data-id="{{ $group->id }}">

                        {{-- Card Header: Name + Badges --}}
                        <div class="group-index-card-header">
                            <div class="group-index-card-title-area">
                                <div class="group-index-card-avatar">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <div class="group-index-card-name name">{{ $group->name }}</div>
                                    <div class="group-index-card-id">ID: {{ $group->id }}</div>
                                </div>
                            </div>
                            <div class="group-index-badges">
                                @if($group->is_default)
                                    <span class="group-index-badge default">
                                        <i class="fas fa-star" style="font-size:10px"></i> 默认组
                                    </span>
                                @endif
                                @if($group->is_guest)
                                    <span class="group-index-badge guest">
                                        <i class="fas fa-user-secret" style="font-size:10px"></i> 游客组
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Stats Row --}}
                        <div class="group-index-stats">
                            <div class="group-index-stat">
                                <div class="group-index-stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <div class="group-index-stat-value">{{ $group->users_count }}</div>
                                    <div class="group-index-stat-label">用户数</div>
                                </div>
                            </div>
                            <div class="group-index-stat">
                                <div class="group-index-stat-icon">
                                    <i class="fas fa-hdd"></i>
                                </div>
                                <div>
                                    <div class="group-index-stat-value">{{ $group->strategies_count }}</div>
                                    <div class="group-index-stat-label">策略数</div>
                                </div>
                            </div>
                        </div>

                        {{-- Feature Chips --}}
                        <div class="group-index-features">
                            @php $scan = $group->configs->get('is_enable_scan'); @endphp
                            <span class="group-index-chip {{ $scan ? 'on' : 'off' }}">
                                <span class="group-index-chip-dot"></span>
                                审核
                            </span>

                            @php $origProt = $group->configs->get('is_enable_original_protection'); @endphp
                            <span class="group-index-chip {{ $origProt ? 'on' : 'off' }}">
                                <span class="group-index-chip-dot"></span>
                                原图保护
                            </span>

                            @php $watermark = $group->configs->get('is_enable_watermark'); @endphp
                            <span class="group-index-chip {{ $watermark ? 'on' : 'off' }}">
                                <span class="group-index-chip-dot"></span>
                                水印
                            </span>
                        </div>


                        {{-- Detail Info --}}
                        <div class="group-index-details">
                            <div class="group-index-detail-row">
                                <span class="group-index-detail-label">最大文件</span>
                                <span class="group-index-detail-value">{{ $group->configs->get('maximum_file_size') }} KB</span>
                            </div>
                            <div class="group-index-detail-row">
                                <span class="group-index-detail-label">并发上传</span>
                                <span class="group-index-detail-value">{{ $group->configs->get('concurrent_upload_num') }}</span>
                            </div>
                            <div class="group-index-detail-row">
                                <span class="group-index-detail-label">每天限制</span>
                                <span class="group-index-detail-value">{{ $group->configs->get('limit_per_day') ?: '不限' }}</span>
                            </div>
                            <div class="group-index-detail-row">
                                <span class="group-index-detail-label">路径规则</span>
                                <span class="group-index-detail-value" style="font-family:monospace;font-size:11px;">{{ $group->configs->get('path_naming_rule') ?: '-' }}</span>
                            </div>
                            <div class="group-index-detail-row">
                                <span class="group-index-detail-label">文件命名</span>
                                <span class="group-index-detail-value" style="font-family:monospace;font-size:11px;">{{ $group->configs->get('file_naming_rule') ?: '-' }}</span>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="group-index-card-footer">
                            <a href="{{ route('admin.group.edit', ['id' => $group->id]) }}" class="group-index-btn group-index-btn-edit">
                                <i class="fas fa-pen" style="font-size:11px"></i> 编辑
                            </a>
                            @if(! $group->is_default && ! $group->is_guest)
                                <a href="javascript:void(0)" data-operate="delete" class="group-index-btn group-index-btn-delete">
                                    <i class="fas fa-trash-alt" style="font-size:11px"></i> 删除
                                </a>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="group-index-pagination">
                {{ $groups->links() }}
            </div>
        @else
            <div class="group-index-empty">
                <x-no-data message="没有找到任何角色组"/>
            </div>
        @endif

    </div>

    @push('scripts')
        <script>
            $('[data-operate="delete"]').click(function () {
                Swal.fire({
                    title: `确认删除角色组【${$(this).closest('.group-index-card').find('.name').text()}】吗?`,
                    text: "注意，删除该角色组后，该角色组下属的用户会被重置为系统默认组。",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: '确认删除',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).closest('.group-index-card').data('id');
                        axios.delete(`/admin/groups/${id}`).then(response => {
                            if (response.data.status) {
                                history.go(0);
                            } else {
                                toastr.error(response.data.message);
                            }
                        });
                    }
                })
            });
        </script>
    @endpush

</x-app-layout>
