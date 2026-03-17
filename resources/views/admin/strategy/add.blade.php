<x-app-layout>

@section('title', '创建储存策略')

@push('styles')
<style>
.sa-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.04);overflow:hidden}
.sa-toolbar{position:sticky;top:0;z-index:40;background:rgba(255,255,255,.97);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);border-bottom:1px solid #f1f5f9;padding:8px 16px;display:flex;justify-content:flex-end;align-items:center}
.sa-toolbar-group{display:inline-flex;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;background:#f8fafc}
.sa-toolbar-group a,.sa-toolbar-group button{height:30px;border:0;border-right:1px solid #e2e8f0;background:transparent;font-size:12px;padding:0 14px;color:#475569;cursor:pointer;display:inline-flex;align-items:center;gap:5px;text-decoration:none;font-family:inherit;line-height:1;white-space:nowrap}
.sa-toolbar-group a:last-child,.sa-toolbar-group button:last-child{border-right:0}
.sa-toolbar-group a:hover,.sa-toolbar-group button:hover{background:#eff6ff;color:#2563eb}
.sa-section{padding:16px;border-bottom:1px solid #f1f5f9}
.sa-section:last-child{border-bottom:0}
.sa-section-title{display:flex;align-items:center;gap:8px;font-size:13px;font-weight:700;color:#1e293b;margin-bottom:14px}
.sa-section-title::before{content:'';display:block;width:3px;height:16px;background:#3b82f6;border-radius:2px;flex-shrink:0}
.sa-section-title i{font-size:12px;color:#64748b}
.sa-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.sa-field{display:flex;flex-direction:column;gap:3px}
.sa-field.span-2{grid-column:span 2}
.sa-label{font-size:12px;font-weight:600;color:#334155}
.sa-label .req{color:#dc2626;margin-left:1px}
.sa-help{font-size:11px;color:#94a3b8;line-height:1.4}
.sa-help.warn{color:#b45309}
.sa-help.warn::before{content:'\f071';font-family:'Font Awesome 5 Free';font-weight:900;margin-right:4px;font-size:10px}
.sa-select{width:100%;height:34px;border:1px solid #e2e8f0;border-radius:8px;padding:0 10px;font-size:13px;color:#334155;background:#fff;outline:none;transition:border-color .15s}
.sa-select:focus{border-color:#93c5fd;box-shadow:0 0 0 3px rgba(59,130,246,.08)}
.sa-driver-panel{display:none}
.sa-driver-panel.active{display:block}
.sa-driver-inner{background:#fafbfc;border:1px solid #e8ecf0;border-radius:10px;padding:14px;margin-top:10px}
.sa-driver-title{font-size:12px;font-weight:600;color:#475569;display:flex;align-items:center;gap:6px;margin-bottom:12px}
.sa-driver-title i{font-size:11px;color:#94a3b8}
.sa-pw-wrap{position:relative;display:flex;align-items:center}
.sa-pw-wrap input{padding-right:34px!important}
.sa-pw-toggle{position:absolute;right:0;top:0;bottom:0;width:34px;background:none;border:none;cursor:pointer;color:#94a3b8;display:flex;align-items:center;justify-content:center;font-size:12px;padding:0;transition:color .15s}
.sa-pw-toggle:hover{color:#475569}
.sa-switch-row{display:flex;justify-content:space-between;align-items:flex-start;gap:10px}
.sa-ftp-warn{background:#fffbeb;border:1px solid #fde68a;border-radius:8px;padding:10px 12px;font-size:12px;color:#92400e;line-height:1.5;margin-bottom:12px;display:flex;align-items:flex-start;gap:8px}
.sa-ftp-warn i{margin-top:2px;flex-shrink:0}
.sa-url-builder{display:flex;align-items:center;gap:0;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;background:#fff;transition:border-color .15s}
.sa-url-builder:focus-within{border-color:#93c5fd;box-shadow:0 0 0 3px rgba(59,130,246,.08)}
.sa-url-prefix{background:#f1f5f9;color:#64748b;font-size:12px;padding:0 10px;height:34px;display:flex;align-items:center;white-space:nowrap;border-right:1px solid #e2e8f0;flex-shrink:0;font-family:monospace}
.sa-url-builder input{border:0!important;border-radius:0!important;box-shadow:none!important;height:34px;font-family:monospace;font-size:13px;padding:0 10px;flex:1;min-width:0}
.sa-url-builder input:focus{outline:none;box-shadow:none!important}
.sa-preview-box{background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:10px 12px;font-size:12px;color:#166534;line-height:1.8;margin-top:6px;display:none}
.sa-preview-box.show{display:block}
.sa-preview-row{display:flex;gap:6px;align-items:baseline}
.sa-preview-label{color:#15803d;font-weight:600;white-space:nowrap;min-width:70px}
.sa-preview-val{font-family:monospace;color:#166534;word-break:break-all}
.sa-storage-default{background:#eff6ff;border:1px solid #bfdbfe;border-radius:8px;padding:8px 12px;font-size:12px;color:#1e40af;line-height:1.5;display:flex;align-items:center;gap:6px;margin-top:4px}
.sa-storage-default i{flex-shrink:0;font-size:11px}
.sa-storage-default code{background:#dbeafe;padding:1px 6px;border-radius:4px;font-size:11px;font-family:monospace}
@media(max-width:768px){
.sa-grid{grid-template-columns:1fr}
.sa-field.span-2{grid-column:span 1}
}
</style>
@endpush

<div class="sa-card">
    {{-- Sticky toolbar --}}
    <div class="sa-toolbar">
        <div class="sa-toolbar-group">
            <a href="{{ route('admin.strategies') }}"><i class="fas fa-arrow-left"></i> 返回</a>
            <button type="submit" form="sa-form"><i class="fas fa-check"></i> 确认创建</button>
        </div>
    </div>

    <form id="sa-form" action="{{ route('admin.strategy.create') }}" method="POST" novalidate>
        @csrf

        {{-- Section 1: 基础信息 --}}
        <div class="sa-section">
            <div class="sa-section-title"><i class="fas fa-info-circle"></i> 基础信息</div>
            <div class="sa-grid">
                <div class="sa-field">
                    <label class="sa-label">策略名称 <span class="req">*</span></label>
                    <x-input type="text" name="name" required placeholder="请输入策略名称" />
                </div>
                <div class="sa-field">
                    <label class="sa-label">简介</label>
                    <x-textarea name="intro" rows="2" placeholder="请输入策略简介" />
                </div>
                <div class="sa-field span-2">
                    <label class="sa-label">选择角色组</label>
                    <x-select name="groups[]" multiple>
                        @foreach(\App\Models\Group::query()->get() as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </x-select>
                    <span class="sa-help">可选多个角色组，未关联策略的角色组用户将无法上传图片</span>
                </div>
            </div>
        </div>

        {{-- Section 2: 储存驱动 --}}
        <div class="sa-section">
            <div class="sa-section-title"><i class="fas fa-hdd"></i> 储存驱动</div>

            <select id="driver-select" name="key" class="sa-select">
                @foreach(\App\Models\Strategy::DRIVERS as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>

            {{-- Local --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Local }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-folder"></i> Local 本地储存</div>
                    <div class="sa-grid">
                        <div class="sa-field span-2">
                            <label class="sa-label">访问路径名 <span class="req">*</span></label>
                            <div class="sa-url-builder">
                                <span class="sa-url-prefix">{{ rtrim(config('app.url'), '/') }}/</span>
                                <input type="text" id="local-path-segment" placeholder="例如: images" autocomplete="off" />
                            </div>
                            <input type="hidden" name="configs[url]" id="local-url-hidden" />
                            <span class="sa-help">输入一个路径名称，图片将通过 <b>域名/路径名</b> 访问。不可与已有路径重复，不可包含特殊字符</span>
                            <div class="sa-preview-box" id="local-preview">
                                <div class="sa-preview-row"><span class="sa-preview-label">访问地址</span> <span class="sa-preview-val" id="local-preview-url"></span></div>
                                <div class="sa-preview-row"><span class="sa-preview-label">图片示例</span> <span class="sa-preview-val" id="local-preview-example"></span></div>
                                <div class="sa-preview-row"><span class="sa-preview-label">储存位置</span> <span class="sa-preview-val" id="local-preview-storage"></span></div>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                            <span class="sa-help">附加到图片 URL 末尾的参数，一般留空</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- S3 --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::S3 }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fab fa-aws"></i> Amazon S3</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">AccessKeyId <span class="req">*</span></label>
                            <x-input type="text" name="configs[access_key_id]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">SecretAccessKey <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[secret_access_key]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">连接地址</label>
                            <x-input type="url" name="configs[endpoint]" placeholder="https://s3.amazonaws.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">区域</label>
                            <x-input type="text" name="configs[region]" placeholder="us-east-1" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">储存桶名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[bucket]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- OSS --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Oss }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-cloud"></i> 阿里云 OSS</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">AccessKeyId <span class="req">*</span></label>
                            <x-input type="text" name="configs[access_key_id]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">AccessKeySecret <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[access_key_secret]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">地域节点 <span class="req">*</span></label>
                            <x-input type="text" name="configs[endpoint]" required placeholder="oss-cn-hangzhou.aliyuncs.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">Bucket 名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[bucket]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- COS --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Cos }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-cloud"></i> 腾讯云 COS</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">AppId <span class="req">*</span></label>
                            <x-input type="text" name="configs[app_id]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">SecretId <span class="req">*</span></label>
                            <x-input type="text" name="configs[secret_id]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">SecretKey <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[secret_key]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">所属地域 <span class="req">*</span></label>
                            <x-input type="text" name="configs[region]" required placeholder="ap-guangzhou" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">储存桶名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[bucket]" required />
                            <span class="sa-help">储存桶名称不需要包含 AppId，系统会自动拼接</span>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kodo --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Kodo }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-cloud"></i> 七牛云 Kodo</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">AccessKey <span class="req">*</span></label>
                            <x-input type="text" name="configs[access_key]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">SecretKey <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[secret_key]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">Bucket <span class="req">*</span></label>
                            <x-input type="text" name="configs[bucket]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- USS --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Uss }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-cloud"></i> 又拍云 USS</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">服务名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[service]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">操作员名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[operator]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">操作员密码 <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[password]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- SFTP --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Sftp }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-server"></i> SFTP</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">根目录 <span class="req">*</span></label>
                            <x-input type="text" name="configs[root]" required placeholder="/home/uploads" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">主机地址 <span class="req">*</span></label>
                            <x-input type="text" name="configs[host]" required placeholder="192.168.1.1" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">连接端口 <span class="req">*</span></label>
                            <x-input type="number" name="configs[port]" required value="22" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">用户名 <span class="req">*</span></label>
                            <x-input type="text" name="configs[username]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">密码</label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[password]" />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field span-2">
                            <label class="sa-label">私钥</label>
                            <x-textarea name="configs[private_key]" rows="3" placeholder="-----BEGIN RSA PRIVATE KEY-----" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">私钥口令</label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[passphrase]" />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <div class="sa-switch-row">
                                <label class="sa-label">是否使用代理</label>
                                <x-switch name="configs[use_agent]" />
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- FTP --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Ftp }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-server"></i> FTP</div>
                    @if(! extension_loaded('ftp'))
                        <div class="sa-ftp-warn">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>系统检测到 ftp 拓展未启用，使用 FTP 驱动前请确保已安装并启用 PHP ftp 拓展。</span>
                        </div>
                    @endif
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">根目录 <span class="req">*</span></label>
                            <x-input type="text" name="configs[root]" required placeholder="/" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">主机地址 <span class="req">*</span></label>
                            <x-input type="text" name="configs[host]" required placeholder="192.168.1.1" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">连接端口 <span class="req">*</span></label>
                            <x-input type="number" name="configs[port]" required value="21" />
                            <span class="sa-help">被动模式下请确保服务器已开放被动端口范围，主动模式需确保客户端可被回连</span>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">用户名 <span class="req">*</span></label>
                            <x-input type="text" name="configs[username]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">密码 <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[password]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <div class="sa-switch-row">
                                <label class="sa-label">加密连接 (SSL)</label>
                                <x-switch name="configs[ssl]" />
                            </div>
                        </div>
                        <div class="sa-field">
                            <div class="sa-switch-row">
                                <label class="sa-label">被动模式</label>
                                <x-switch name="configs[passive]" />
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- WebDAV --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Webdav }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-globe"></i> WebDAV</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">连接地址 <span class="req">*</span></label>
                            <x-input type="url" name="configs[base_uri]" required placeholder="https://dav.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">认证方式 <span class="req">*</span></label>
                            <x-select name="configs[auth_type]" data-select2>
                                @foreach(\App\Models\Strategy::WEBDAV_AUTH_TYPES as $authKey => $authLabel)
                                    <option value="{{ $authKey }}">{{ $authLabel }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">路径前缀</label>
                            <x-input type="text" name="configs[prefix]" placeholder="/uploads" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">用户名</label>
                            <x-input type="text" name="configs[username]" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">密码</label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[password]" />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Minio --}}
            <div class="sa-driver-panel" data-driver="{{ \App\Enums\StrategyKey::Minio }}">
                <div class="sa-driver-inner">
                    <div class="sa-driver-title"><i class="fas fa-database"></i> Minio</div>
                    <div class="sa-grid">
                        <div class="sa-field">
                            <label class="sa-label">AccessKey <span class="req">*</span></label>
                            <x-input type="text" name="configs[access_key]" required />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">SecretKey <span class="req">*</span></label>
                            <div class="sa-pw-wrap">
                                <x-input type="password" name="configs[secret_key]" required />
                                <button type="button" class="sa-pw-toggle" onclick="togglePassword(this)"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">连接地址</label>
                            <x-input type="url" name="configs[endpoint]" placeholder="https://minio.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">区域</label>
                            <x-input type="text" name="configs[region]" placeholder="us-east-1" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">储存桶名称 <span class="req">*</span></label>
                            <x-input type="text" name="configs[bucket]" required />
                        </div>
                        <div class="sa-field">
                            <div class="sa-switch-row">
                                <div>
                                    <label class="sa-label">BucketEndpoint</label>
                                    <span class="sa-help">启用后将使用 Bucket 作为端点的一部分</span>
                                </div>
                                <x-switch name="configs[bucket_endpoint]" />
                            </div>
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">访问域名 <span class="req">*</span></label>
                            <x-input type="url" name="configs[url]" required placeholder="https://cdn.example.com" />
                        </div>
                        <div class="sa-field">
                            <label class="sa-label">URL Queries</label>
                            <x-input type="text" name="configs[queries]" placeholder="?key=value" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

@push('scripts')
<script>
$(function() {
    // Driver panel switching
    $('#driver-select').change(function() {
        var val = $(this).val();
        document.querySelectorAll('.sa-driver-panel').forEach(function(p) {
            p.style.display = 'none';
        });
        var target = document.querySelector('.sa-driver-panel[data-driver="' + val + '"]');
        if (target) target.style.display = 'block';
    });
    $('#driver-select').trigger('change');

    // Local path builder
    (function() {
        var baseUrl = '{{ rtrim(config("app.url"), "/") }}';
        var defaultRoot = '{{ config("filesystems.disks.uploads.root") }}';
        var $seg = $('#local-path-segment');
        var $hidden = $('#local-url-hidden');
        var $preview = $('#local-preview');
        var $rootInput = $('#local-root-input');

        $seg.on('input', function() {
            var val = this.value.replace(/[\\/?%*:|"<>\s]/g, '').replace(/^\/+/, '');
            this.value = val;
            if (val) {
                $hidden.val(baseUrl + '/' + val);
                var storageDir = $rootInput.val().trim() || defaultRoot;
                $('#local-preview-url').text(baseUrl + '/' + val);
                $('#local-preview-example').text(baseUrl + '/' + val + '/2026/03/13/abc.png');
                $('#local-preview-storage').text(storageDir);
                $preview.addClass('show');
            } else {
                $hidden.val('');
                $preview.removeClass('show');
            }
        });

        $rootInput.on('input', function() {
            if ($seg.val()) $seg.trigger('input');
        });
    })();

    // Form submission
    $('#sa-form').submit(function(e) {
        e.preventDefault();
        var btn = $(this).find('[type="submit"]').add('[form="sa-form"]');
        btn.prop('disabled', true);
        $(".sa-driver-panel").not(":visible").find(":input").prop("disabled", true); var formData = $(this).serialize(); $(".sa-driver-panel").find(":input").prop("disabled", false); axios.post(this.action, formData).then(function(response) {
            if (response.data.status) {
                toastr.success(response.data.message);
                setTimeout(function() {
                    window.location.href = response.data.data?.redirect || '{{ route("admin.strategies") }}';
                }, 1500);
            } else {
                toastr.error(response.data.message);
            }
        }).catch(function(error) {
            toastr.error(error.response?.data?.message || '请求失败，请重试');
        }).finally(function() {
            btn.prop('disabled', false);
        });
    });
});

// Password visibility toggle
function togglePassword(btn) {
    var input = btn.closest('.sa-pw-wrap').querySelector('input');
    var icon = btn.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>
@endpush

</x-app-layout>
