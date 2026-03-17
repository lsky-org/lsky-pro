<x-app-layout>

@section('title', '编辑储存策略')

@push('styles')
<style>
.se-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.04);overflow:hidden;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif}
.se-toolbar{position:sticky;top:0;z-index:40;background:rgba(255,255,255,.97);backdrop-filter:blur(10px);border-bottom:1px solid #f1f5f9;padding:8px 16px;display:flex;align-items:center;justify-content:flex-end}
.se-toolbar-group{display:inline-flex;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;background:#f8fafc}
.se-toolbar-group a,.se-toolbar-group button{height:30px;border:0;border-right:1px solid #e2e8f0;background:transparent;font-size:12px;padding:0 14px;color:#475569;cursor:pointer;display:inline-flex;align-items:center;gap:5px;text-decoration:none;font-family:inherit;line-height:1;white-space:nowrap}
.se-toolbar-group a:last-child,.se-toolbar-group button:last-child{border-right:0}
.se-toolbar-group a:hover,.se-toolbar-group button:hover{background:#eff6ff;color:#2563eb}
.se-section{border-bottom:1px solid #f1f5f9;padding:16px}
.se-section:last-child{border-bottom:0}
.se-section-title{display:flex;align-items:center;gap:8px;font-size:13px;font-weight:700;color:#1e293b;margin-bottom:14px}
.se-section-title::before{content:'';display:block;width:3px;height:14px;background:#3b82f6;border-radius:2px;flex-shrink:0}
.se-section-title i{font-size:12px;color:#3b82f6}
.se-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.se-field{display:flex;flex-direction:column;gap:3px}
.se-field.span-2{grid-column:span 2}
.se-label{font-size:12px;font-weight:600;color:#334155}
.se-help{font-size:11px;color:#94a3b8}
.se-help.warn{color:#b45309}
.se-driver-badge{display:inline-flex;align-items:center;gap:6px;background:#f1f5f9;border:1px solid #e2e8f0;border-radius:8px;padding:7px 12px;font-size:13px;color:#475569}
.se-driver-badge i{color:#94a3b8;font-size:11px}
.se-driver-help{font-size:11px;color:#94a3b8;margin-top:6px}
.se-driver-config{background:#fafbfc;border:1px solid #e8ecf0;border-radius:10px;padding:14px;margin-top:10px}
.se-driver-config-title{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:#475569;margin-bottom:12px}
.se-driver-config-title i{color:#64748b;font-size:11px}
.se-warn-note{background:#fffbeb;border:1px solid #fde68a;border-radius:8px;padding:8px 10px;font-size:11px;color:#92400e;line-height:1.5}
.se-switch-row{display:flex;align-items:center;justify-content:space-between;padding:4px 0}
.se-switch-label{font-size:12px;font-weight:600;color:#334155}
.se-ftp-warn{background:#fef2f2;border:1px solid #fecaca;border-radius:8px;padding:8px 10px;font-size:11px;color:#991b1b;margin-bottom:10px;display:flex;align-items:center;gap:6px}
.se-ftp-warn i{color:#dc2626;font-size:12px}
@media(max-width:768px){
.se-grid{grid-template-columns:1fr}
.se-field.span-2{grid-column:span 1}
}
</style>
@endpush

<div class="se-card">
    {{-- Sticky Toolbar --}}
    <div class="se-toolbar">
        <div class="se-toolbar-group">
            <a href="{{ route('admin.strategies') }}">
                <i class="fas fa-arrow-left"></i> 返回
            </a>
            <button type="submit" form="se-form">
                <i class="fas fa-check"></i> 确认保存
            </button>
        </div>
    </div>

    {{-- Form --}}
    <form id="se-form" action="{{ route('admin.strategy.update', ['id' => $strategy->id]) }}" method="POST">
        @csrf

        {{-- Section 1: 基础信息 --}}
        <div class="se-section">
            <div class="se-section-title">
                <i class="fas fa-info-circle"></i> 基础信息
            </div>
            <div class="se-grid">
                <div class="se-field">
                    <label class="se-label">策略名称 <span style="color:#ef4444">*</span></label>
                    <x-input type="text" name="name" value="{{ $strategy->name }}" required />
                </div>
                <div class="se-field">
                    <label class="se-label">简介</label>
                    <x-input type="text" name="intro" value="{{ $strategy->intro }}" />
                </div>
                <div class="se-field span-2">
                    <label class="se-label">选择角色组</label>
                    <x-select name="groups[]" multiple>
                        @foreach(\App\Models\Group::query()->get() as $group)
                            <option value="{{ $group->id }}" {{ $strategy->groups->where('id', $group->id)->isNotEmpty() ? 'selected' : '' }}>{{ $group->name }}</option>
                        @endforeach
                    </x-select>
                </div>
            </div>
        </div>

        {{-- Section 2: 储存配置 --}}
        <div class="se-section">
            <div class="se-section-title">
                <i class="fas fa-hdd"></i> 储存配置
            </div>

            {{-- Driver locked display --}}
            <div class="se-driver-badge">
                <i class="fas fa-lock"></i> {{ \App\Models\Strategy::DRIVERS[$strategy->key] }}
            </div>
            <input type="hidden" name="key" value="{{ $strategy->key }}">
            <div class="se-driver-help">已创建的策略无法更改储存方式</div>

            {{-- Local --}}
            @if($strategy->key === \App\Enums\StrategyKey::Local)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-folder"></i> 本地储存配置
                </div>
                <div class="se-grid">
                    <div class="se-field span-2">
                        <label class="se-label">访问网址 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                        <div class="se-warn-note">
                            <i class="fas fa-exclamation-triangle"></i> 请确保该网址指向储存路径的根目录，否则图片将无法正常访问
                        </div>
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                        <span class="se-help">URL 额外查询参数，例如 ?token=xxx</span>
                    </div>
                </div>
            </div>
            @endif

            {{-- S3 --}}
            @if($strategy->key === \App\Enums\StrategyKey::S3)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fab fa-aws"></i> S3 储存配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AccessKeyId <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[access_key_id]" value="{{ $strategy->configs->get('access_key_id') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">SecretAccessKey <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[secret_access_key]" value="{{ $strategy->configs->get('secret_access_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">连接地址</label>
                        <x-input type="url" name="configs[endpoint]" value="{{ $strategy->configs->get('endpoint') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">区域</label>
                        <x-input type="text" name="configs[region]" value="{{ $strategy->configs->get('region') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">储存桶名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[bucket]" value="{{ $strategy->configs->get('bucket') }}" required />
                    </div>
                </div>
            </div>
            @endif

            {{-- Oss --}}
            @if($strategy->key === \App\Enums\StrategyKey::Oss)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-cloud"></i> 阿里云 OSS 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AccessKeyId <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[access_key_id]" value="{{ $strategy->configs->get('access_key_id') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AccessKeySecret <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[access_key_secret]" value="{{ $strategy->configs->get('access_key_secret') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">地域节点 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[endpoint]" value="{{ $strategy->configs->get('endpoint') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">Bucket 名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[bucket]" value="{{ $strategy->configs->get('bucket') }}" required />
                    </div>
                </div>
            </div>
            @endif

            {{-- Cos --}}
            @if($strategy->key === \App\Enums\StrategyKey::Cos)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-cloud"></i> 腾讯云 COS 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AppId <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[app_id]" value="{{ $strategy->configs->get('app_id') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">SecretId <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[secret_id]" value="{{ $strategy->configs->get('secret_id') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">SecretKey <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[secret_key]" value="{{ $strategy->configs->get('secret_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">所属地域 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[region]" value="{{ $strategy->configs->get('region') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">储存桶名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[bucket]" value="{{ $strategy->configs->get('bucket') }}" required />
                        <span class="se-help">不需要包含 AppId 后缀</span>
                    </div>
                </div>
            </div>
            @endif

            {{-- Kodo --}}
            @if($strategy->key === \App\Enums\StrategyKey::Kodo)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-cloud"></i> 七牛云 Kodo 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AccessKey <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[access_key]" value="{{ $strategy->configs->get('access_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">SecretKey <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[secret_key]" value="{{ $strategy->configs->get('secret_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">Bucket <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[bucket]" value="{{ $strategy->configs->get('bucket') }}" required />
                    </div>
                </div>
            </div>
            @endif

            {{-- Uss --}}
            @if($strategy->key === \App\Enums\StrategyKey::Uss)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-cloud"></i> 又拍云 USS 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">服务名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[service]" value="{{ $strategy->configs->get('service') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">操作员名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[operator]" value="{{ $strategy->configs->get('operator') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">操作员密码 <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[password]" value="{{ $strategy->configs->get('password') }}" required />
                    </div>
                </div>
            </div>
            @endif

            {{-- Sftp --}}
            @if($strategy->key === \App\Enums\StrategyKey::Sftp)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-server"></i> SFTP 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">根目录 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[root]" value="{{ $strategy->configs->get('root') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">主机地址 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[host]" value="{{ $strategy->configs->get('host') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">连接端口 <span style="color:#ef4444">*</span></label>
                        <x-input type="number" name="configs[port]" value="{{ $strategy->configs->get('port') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">用户名 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[username]" value="{{ $strategy->configs->get('username') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">密码</label>
                        <x-input type="password" name="configs[password]" value="{{ $strategy->configs->get('password') }}" />
                    </div>
                    <div class="se-field span-2">
                        <label class="se-label">私钥</label>
                        <x-textarea name="configs[private_key]" rows="3">{{ $strategy->configs->get('private_key') }}</x-textarea>
                    </div>
                    <div class="se-field">
                        <label class="se-label">私钥口令</label>
                        <x-input type="password" name="configs[passphrase]" value="{{ $strategy->configs->get('passphrase') }}" />
                    </div>
                    <div class="se-field span-2">
                        <div class="se-switch-row">
                            <span class="se-switch-label">是否使用代理</span>
                            <x-switch name="configs[use_agent]" :checked="(bool)$strategy->configs->get('use_agent')" />
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- Ftp --}}
            @if($strategy->key === \App\Enums\StrategyKey::Ftp)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-network-wired"></i> FTP 配置
                </div>
                @if(! extension_loaded('ftp'))
                <div class="se-ftp-warn">
                    <i class="fas fa-exclamation-circle"></i> 未检测到 FTP 扩展，请先安装并启用 PHP FTP 扩展
                </div>
                @endif
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">根目录 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[root]" value="{{ $strategy->configs->get('root') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">主机地址 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[host]" value="{{ $strategy->configs->get('host') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">连接端口 <span style="color:#ef4444">*</span></label>
                        <x-input type="number" name="configs[port]" value="{{ $strategy->configs->get('port') }}" required />
                        <span class="se-help">默认为 21</span>
                    </div>
                    <div class="se-field">
                        <label class="se-label">用户名 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[username]" value="{{ $strategy->configs->get('username') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">密码 <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[password]" value="{{ $strategy->configs->get('password') }}" required />
                    </div>
                    <div class="se-field span-2">
                        <div class="se-switch-row">
                            <span class="se-switch-label">加密连接 (SSL)</span>
                            <x-switch name="configs[ssl]" :checked="(bool)$strategy->configs->get('ssl')" />
                        </div>
                    </div>
                    <div class="se-field span-2">
                        <div class="se-switch-row">
                            <span class="se-switch-label">被动模式</span>
                            <x-switch name="configs[passive]" :checked="(bool)$strategy->configs->get('passive')" />
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- Webdav --}}
            @if($strategy->key === \App\Enums\StrategyKey::Webdav)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-globe"></i> WebDAV 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">连接地址 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[baseUri]" value="{{ $strategy->configs->get('baseUri') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">认证方式 <span style="color:#ef4444">*</span></label>
                        <x-select name="configs[authType]">
                            @foreach(\App\Models\Strategy::WEBDAV_AUTH_TYPES as $value => $label)
                                <option value="{{ $value }}" {{ $strategy->configs->get('authType') == $value ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="se-field">
                        <label class="se-label">路径前缀</label>
                        <x-input type="text" name="configs[prefix]" value="{{ $strategy->configs->get('prefix') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">用户名</label>
                        <x-input type="text" name="configs[userName]" value="{{ $strategy->configs->get('userName') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">密码</label>
                        <x-input type="password" name="configs[password]" value="{{ $strategy->configs->get('password') }}" />
                    </div>
                </div>
            </div>
            @endif

            {{-- Minio --}}
            @if($strategy->key === \App\Enums\StrategyKey::Minio)
            <div class="se-driver-config">
                <div class="se-driver-config-title">
                    <i class="fas fa-database"></i> MinIO 配置
                </div>
                <div class="se-grid">
                    <div class="se-field">
                        <label class="se-label">访问域名 <span style="color:#ef4444">*</span></label>
                        <x-input type="url" name="configs[url]" value="{{ $strategy->configs->get('url') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">URL Queries</label>
                        <x-input type="text" name="configs[queries]" value="{{ $strategy->configs->get('queries') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">AccessKey <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[access_key]" value="{{ $strategy->configs->get('access_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">SecretKey <span style="color:#ef4444">*</span></label>
                        <x-input type="password" name="configs[secret_key]" value="{{ $strategy->configs->get('secret_key') }}" required />
                    </div>
                    <div class="se-field">
                        <label class="se-label">连接地址</label>
                        <x-input type="url" name="configs[endpoint]" value="{{ $strategy->configs->get('endpoint') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">区域</label>
                        <x-input type="text" name="configs[region]" value="{{ $strategy->configs->get('region') }}" />
                    </div>
                    <div class="se-field">
                        <label class="se-label">储存桶名称 <span style="color:#ef4444">*</span></label>
                        <x-input type="text" name="configs[bucket]" value="{{ $strategy->configs->get('bucket') }}" required />
                    </div>
                    <div class="se-field span-2">
                        <div class="se-switch-row">
                            <span class="se-switch-label">BucketEndpoint</span>
                            <x-switch name="configs[bucket_endpoint]" :checked="(bool)$strategy->configs->get('bucket_endpoint')" />
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </form>
</div>

@push('scripts')
<script>
$(function () {
    $('#se-form').submit(function (e) {
        e.preventDefault();
        var btn = $('[form="se-form"]');
        btn.prop('disabled', true);
        axios.put(this.action, $(this).serialize()).then(function (response) {
            if (response.data.status) {
                toastr.success(response.data.message);
            } else {
                toastr.error(response.data.message);
            }
        }).catch(function (error) {
            toastr.error(error.response?.data?.message || '请求失败，请重试');
        }).finally(function () {
            btn.prop('disabled', false);
        });
    });
});
</script>
@endpush

</x-app-layout>
