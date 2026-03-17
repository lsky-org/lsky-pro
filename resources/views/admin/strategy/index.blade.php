@push('styles')
<style>
.si-wrap{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif}
.si-header{background:#fff;border:1px solid #e2e8f0;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.04);padding:12px 16px;margin-bottom:12px;display:flex;align-items:center;justify-content:space-between;gap:12px}
.si-header-left{display:flex;align-items:center;gap:10px;min-width:0}
.si-header-icon{width:32px;height:32px;border-radius:8px;background:#eff6ff;display:flex;align-items:center;justify-content:center;color:#3b82f6;font-size:14px;flex-shrink:0}
.si-header-text{min-width:0}
.si-header-title{font-size:16px;font-weight:700;color:#0f172a;line-height:1.3}
.si-header-sub{font-size:12px;color:#64748b;line-height:1.3}
.si-header-right{display:flex;align-items:center;gap:8px;flex-shrink:0}
.si-search{position:relative}
.si-search input{width:180px;height:32px;border:1px solid #e2e8f0;border-radius:8px;padding:0 10px 0 30px;font-size:12px;color:#334155;background:#f8fafc;outline:none;transition:border-color .15s,box-shadow .15s}
.si-search input:focus{border-color:#93c5fd;box-shadow:0 0 0 3px rgba(59,130,246,.08);background:#fff}
.si-search input::placeholder{color:#94a3b8}
.si-search-icon{position:absolute;left:9px;top:50%;transform:translateY(-50%);color:#94a3b8;font-size:12px;pointer-events:none}
.si-btn-create{height:32px;padding:0 14px;background:#2563eb;color:#fff;border:none;border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:background .15s,box-shadow .15s;text-decoration:none;white-space:nowrap}
.si-btn-create:hover{background:#1d4ed8;box-shadow:0 2px 6px rgba(37,99,235,.25);color:#fff;text-decoration:none}
.si-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
.si-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.04);padding:14px;position:relative;overflow:hidden;transition:transform .15s,box-shadow .15s}
.si-card:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.07)}
.si-card::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;border-radius:12px 0 0 12px}
.si-card-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px}
.si-card-top-left{display:flex;align-items:center;gap:8px;min-width:0}
.si-avatar{width:34px;height:34px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.si-card-info{min-width:0}
.si-name{font-size:14px;font-weight:700;color:#0f172a;line-height:1.3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.si-id{font-size:11px;color:#94a3b8;line-height:1.3}
.si-badge{font-size:11px;font-weight:600;padding:2px 8px;border-radius:99px;white-space:nowrap;flex-shrink:0}
.si-stats{display:flex;gap:8px;margin-bottom:10px}
.si-stat{flex:1;display:flex;align-items:center;gap:6px;background:#f8fafc;border-radius:8px;padding:6px 10px}
.si-stat-icon{width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:10px;flex-shrink:0}
.si-stat-text{min-width:0}
.si-stat-val{font-size:14px;font-weight:700;color:#0f172a;line-height:1.3}
.si-stat-label{font-size:10px;color:#94a3b8;line-height:1.3}
.si-actions{border-top:1px solid #f1f5f9;padding-top:10px;display:flex;gap:6px}
.si-btn{height:28px;padding:0 12px;border-radius:99px;font-size:11px;font-weight:600;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:4px;transition:background .15s,box-shadow .15s;text-decoration:none}
.si-btn-edit{background:#eff6ff;color:#2563eb}
.si-btn-edit:hover{background:#dbeafe;box-shadow:0 1px 4px rgba(37,99,235,.12);color:#2563eb;text-decoration:none}
.si-btn-delete{background:#fef2f2;color:#dc2626}
.si-btn-delete:hover{background:#fecaca;box-shadow:0 1px 4px rgba(220,38,38,.12)}
.si-empty{text-align:center;padding:48px 20px}
.si-empty-icon{width:48px;height:48px;border-radius:12px;background:#f1f5f9;display:inline-flex;align-items:center;justify-content:center;color:#94a3b8;font-size:20px;margin-bottom:10px}
.si-empty-title{font-size:14px;font-weight:600;color:#475569;margin-bottom:4px}
.si-empty-sub{font-size:12px;color:#94a3b8}
.si-pagination{margin-top:16px;display:flex;justify-content:center}
.si-pagination .pagination{margin:0}
/* Driver color variants */
.si-driver-emerald .si-avatar{background:#ecfdf5;color:#059669}
.si-driver-emerald .si-badge{background:#ecfdf5;color:#059669}
.si-driver-emerald .si-stat-icon{background:#d1fae5;color:#059669}
.si-driver-emerald::before{background:#059669}
.si-driver-orange .si-avatar{background:#fff7ed;color:#ea580c}
.si-driver-orange .si-badge{background:#fff7ed;color:#ea580c}
.si-driver-orange .si-stat-icon{background:#fed7aa;color:#ea580c}
.si-driver-orange::before{background:#ea580c}
.si-driver-blue .si-avatar{background:#eff6ff;color:#2563eb}
.si-driver-blue .si-badge{background:#eff6ff;color:#2563eb}
.si-driver-blue .si-stat-icon{background:#bfdbfe;color:#2563eb}
.si-driver-blue::before{background:#2563eb}
.si-driver-indigo .si-avatar{background:#eef2ff;color:#4f46e5}
.si-driver-indigo .si-badge{background:#eef2ff;color:#4f46e5}
.si-driver-indigo .si-stat-icon{background:#c7d2fe;color:#4f46e5}
.si-driver-indigo::before{background:#4f46e5}
.si-driver-pink .si-avatar{background:#fdf2f8;color:#db2777}
.si-driver-pink .si-badge{background:#fdf2f8;color:#db2777}
.si-driver-pink .si-stat-icon{background:#fbcfe8;color:#db2777}
.si-driver-pink::before{background:#db2777}
.si-driver-teal .si-avatar{background:#f0fdfa;color:#0d9488}
.si-driver-teal .si-badge{background:#f0fdfa;color:#0d9488}
.si-driver-teal .si-stat-icon{background:#99f6e4;color:#0d9488}
.si-driver-teal::before{background:#0d9488}
.si-driver-amber .si-avatar{background:#fffbeb;color:#d97706}
.si-driver-amber .si-badge{background:#fffbeb;color:#d97706}
.si-driver-amber .si-stat-icon{background:#fde68a;color:#d97706}
.si-driver-amber::before{background:#d97706}
.si-driver-slate .si-avatar{background:#f8fafc;color:#475569}
.si-driver-slate .si-badge{background:#f8fafc;color:#475569}
.si-driver-slate .si-stat-icon{background:#e2e8f0;color:#475569}
.si-driver-slate::before{background:#475569}
.si-driver-violet .si-avatar{background:#f5f3ff;color:#7c3aed}
.si-driver-violet .si-badge{background:#f5f3ff;color:#7c3aed}
.si-driver-violet .si-stat-icon{background:#ddd6fe;color:#7c3aed}
.si-driver-violet::before{background:#7c3aed}
.si-driver-red .si-avatar{background:#fef2f2;color:#dc2626}
.si-driver-red .si-badge{background:#fef2f2;color:#dc2626}
.si-driver-red .si-stat-icon{background:#fecaca;color:#dc2626}
.si-driver-red::before{background:#dc2626}
@media(max-width:768px){
    .si-header{flex-direction:column;align-items:flex-start}
    .si-header-right{width:100%}
    .si-search{flex:1}
    .si-search input{width:100%}
    .si-grid{grid-template-columns:1fr}
}
</style>
@endpush

<x-app-layout>
@php
$driverColors = [
    \App\Enums\StrategyKey::Local => 'emerald',
    \App\Enums\StrategyKey::S3 => 'orange',
    \App\Enums\StrategyKey::Oss => 'blue',
    \App\Enums\StrategyKey::Cos => 'indigo',
    \App\Enums\StrategyKey::Kodo => 'pink',
    \App\Enums\StrategyKey::Uss => 'teal',
    \App\Enums\StrategyKey::Sftp => 'amber',
    \App\Enums\StrategyKey::Ftp => 'slate',
    \App\Enums\StrategyKey::Webdav => 'violet',
    \App\Enums\StrategyKey::Minio => 'red',
];
$driverIcons = [
    \App\Enums\StrategyKey::Local => 'fas fa-server',
    \App\Enums\StrategyKey::S3 => 'fab fa-aws',
    \App\Enums\StrategyKey::Oss => 'fas fa-cloud',
    \App\Enums\StrategyKey::Cos => 'fas fa-cloud-upload-alt',
    \App\Enums\StrategyKey::Kodo => 'fas fa-database',
    \App\Enums\StrategyKey::Uss => 'fas fa-upload',
    \App\Enums\StrategyKey::Sftp => 'fas fa-terminal',
    \App\Enums\StrategyKey::Ftp => 'fas fa-file-upload',
    \App\Enums\StrategyKey::Webdav => 'fas fa-network-wired',
    \App\Enums\StrategyKey::Minio => 'fas fa-cubes',
];
@endphp

<div class="si-wrap">
    {{-- Header --}}
    <div class="si-header">
        <div class="si-header-left">
            <div class="si-header-icon"><i class="fas fa-layer-group"></i></div>
            <div class="si-header-text">
                <div class="si-header-title">储存策略管理</div>
                <div class="si-header-sub">管理图片存储驱动和策略配置</div>
            </div>
        </div>
        <div class="si-header-right">
            <form action="{{ route('admin.strategies') }}" method="GET" class="si-search">
                <i class="fas fa-search si-search-icon"></i>
                <input type="text" name="keywords" value="{{ request('keywords') }}" placeholder="搜索策略...">
            </form>
            <a href="{{ route('admin.strategy.create') }}" class="si-btn-create"><i class="fas fa-plus"></i> 新建策略</a>
        </div>
    </div>

    {{-- Grid --}}
    @if($strategies->isNotEmpty())
    <div class="si-grid">
        @foreach($strategies as $strategy)
        @php
            $color = $driverColors[$strategy->key] ?? 'blue';
            $icon = $driverIcons[$strategy->key] ?? 'fas fa-cloud';
            $driverName = \App\Models\Strategy::DRIVERS[$strategy->key] ?? $strategy->key;
        @endphp
        <div class="si-card si-driver-{{ $color }}" data-id="{{ $strategy->id }}">
            <div class="si-card-top">
                <div class="si-card-top-left">
                    <div class="si-avatar"><i class="{{ $icon }}"></i></div>
                    <div class="si-card-info">
                        <div class="si-name">{{ $strategy->name }}</div>
                        <div class="si-id">ID: {{ $strategy->id }}</div>
                    </div>
                </div>
                <span class="si-badge">{{ $driverName }}</span>
            </div>
            <div class="si-stats">
                <div class="si-stat">
                    <div class="si-stat-icon"><i class="fas fa-image"></i></div>
                    <div class="si-stat-text">
                        <div class="si-stat-val">{{ number_format($strategy->images_count) }}</div>
                        <div class="si-stat-label">图片数量</div>
                    </div>
                </div>
                <div class="si-stat">
                    <div class="si-stat-icon"><i class="fas fa-hdd"></i></div>
                    <div class="si-stat-text">
                        <div class="si-stat-val">{{ \App\Utils::formatSize($strategy->images_sum_size * 1024) }}</div>
                        <div class="si-stat-label">占用空间</div>
                    </div>
                </div>
            </div>
            <div class="si-actions">
                <a href="{{ route('admin.strategy.edit', ['id' => $strategy->id]) }}" class="si-btn si-btn-edit"><i class="fas fa-pen"></i> 编辑</a>
                <button type="button" class="si-btn si-btn-delete" data-operate="delete"><i class="fas fa-trash-alt"></i> 删除</button>
            </div>
        </div>
        @endforeach
    </div>

    <div class="si-pagination">{{ $strategies->links() }}</div>
    @else
    <div class="si-empty">
        <div class="si-empty-icon"><i class="fas fa-inbox"></i></div>
        <div class="si-empty-title">暂无储存策略</div>
        <div class="si-empty-sub">点击右上角按钮创建第一个储存策略</div>
    </div>
    @endif
</div>
</x-app-layout>

@push('scripts')
<script>
$(function () {
    $('[data-operate="delete"]').click(function () {
        var $card = $(this).closest('.si-card');
        var name = $card.find('.si-name').text();
        var id = $card.data('id');
        Swal.fire({
            title: '\u786e\u8ba4\u5220\u9664\u50a8\u5b58\u7b56\u7565\u3010' + name + '\u3011\u5417?',
            text: "\u5982\u679c\u67d0\u4e2a\u7ec4\u4e0b\u9762\u6ca1\u6709\u50a8\u5b58\u7b56\u7565\uff0c\u8be5\u7ec4\u4e0b\u9762\u7684\u7528\u6237\u5c06\u65e0\u6cd5\u4e0a\u4f20\u56fe\u7247\uff0c\u540c\u65f6\u5df2\u4e0a\u4f20\u81f3\u8be5\u50a8\u5b58\u7684\u56fe\u7247\u5c06\u65e0\u6cd5\u5728\u7cfb\u7edf\u4e2d\u9884\u89c8\u3002",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '\u786e\u8ba4\u5220\u9664',
        }).then(function (result) {
            if (result.isConfirmed) {
                axios.delete('/admin/strategies/' + id).then(function (response) {
                    if (response.data.status) {
                        history.go(0);
                    } else {
                        toastr.error(response.data.message);
                    }
                });
            }
        });
    });
});
</script>
@endpush
