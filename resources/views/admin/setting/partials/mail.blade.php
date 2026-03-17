@php
    $smtp = $configs['mail']['mailers']['smtp'] ?? [];
    $from = $configs['mail']['from'] ?? [];
    $mailHost = $smtp['host'] ?? '';
@endphp

<div class="settings-stack">
    <div class="settings-inline-grid">
        <div class="settings-mini-card">
            <div class="settings-mini-title">发信驱动</div>
            <div class="settings-mini-sub">当前页面仍只维护 SMTP 驱动。</div>
            <div class="settings-mini-value">SMTP</div>
        </div>
        <div class="settings-mini-card">
            <div class="settings-mini-title">SMTP 主机</div>
            <div class="settings-mini-sub">用于判断当前链路是否已接入。</div>
            <div class="settings-mini-value">{{ $mailHost ?: '未配置' }}</div>
        </div>
        <div class="settings-mini-card">
            <div class="settings-mini-title">发件人</div>
            <div class="settings-mini-sub">系统通知和账号验证邮件的默认来源。</div>
            <div class="settings-mini-value">{{ $from['address'] ?? '未设置' }}</div>
        </div>
    </div>

    <div class="settings-toggle-card">
        <div>
            <div class="settings-toggle-title">发信驱动</div>
            <div class="settings-toggle-copy">保留原有 `mail[default]` 字段结构，便于继续复用现有保存逻辑。</div>
        </div>
        <x-fieldset-radio id="mail[default]" name="mail[default]" data-select="mailer" value="smtp" checked>SMTP</x-fieldset-radio>
    </div>

    <div class="hidden" data-mailer-driver="smtp">
        <form action="{{ route('admin.settings.save') }}" data-settings-form="save">
            <div class="settings-form-grid">
                <div class="settings-field">
                    <label for="mail[mailers][smtp][host]" class="settings-label"><span class="text-red-600">*</span> 主机地址</label>
                    <p class="settings-help">SMTP 服务器地址，例如 `smtp.example.com`。</p>
                    <x-input type="text" name="mail[mailers][smtp][host]" id="mail[mailers][smtp][host]" value="{{ $smtp['host'] ?? '' }}" placeholder="请输入 SMTP 主机地址"/>
                </div>

                <div class="settings-field">
                    <label for="mail[mailers][smtp][port]" class="settings-label"><span class="text-red-600">*</span> 连接端口</label>
                    <p class="settings-help">常见端口为 `587` 或 `465`。</p>
                    <x-input type="number" name="mail[mailers][smtp][port]" id="mail[mailers][smtp][port]" value="{{ $smtp['port'] ?? 587 }}" placeholder="请输入 SMTP 主机连接端口"/>
                </div>

                <div class="settings-field">
                    <label for="mail[mailers][smtp][username]" class="settings-label"><span class="text-red-600">*</span> 用户名</label>
                    <p class="settings-help">通常为邮箱账号或 SMTP 专用用户名。</p>
                    <x-input type="text" name="mail[mailers][smtp][username]" id="mail[mailers][smtp][username]" value="{{ $smtp['username'] ?? '' }}" placeholder="请输入用户名"/>
                </div>

                <div class="settings-field">
                    <label for="mail[mailers][smtp][password]" class="settings-label"><span class="text-red-600">*</span> 密码</label>
                    <p class="settings-help">支持授权码或 SMTP 密码，按当前供应商要求填写。</p>
                    <x-input type="password" name="mail[mailers][smtp][password]" id="mail[mailers][smtp][password]" value="{{ $smtp['password'] ?? '' }}" placeholder="请输入密码"/>
                </div>

                <div class="settings-field">
                    <label for="mail[mailers][smtp][encryption]" class="settings-label">加密方式</label>
                    <p class="settings-help">常见值为 `ssl` 或 `tls`。</p>
                    <x-input type="text" name="mail[mailers][smtp][encryption]" id="mail[mailers][smtp][encryption]" value="{{ $smtp['encryption'] ?? '' }}" placeholder="请输入加密方式(ssl, tls)"/>
                </div>

                <div class="settings-field">
                    <label for="mail[mailers][smtp][timeout]" class="settings-label">连接超时时间（秒）</label>
                    <p class="settings-help">网络不稳定时建议保守设置，避免长时间阻塞。</p>
                    <x-input type="number" name="mail[mailers][smtp][timeout]" id="mail[mailers][smtp][timeout]" value="{{ $smtp['timeout'] ?? 10 }}" placeholder="请输入连接超时时间(秒)"/>
                </div>

                <div class="settings-field">
                    <label for="mail[from][address]" class="settings-label">发件人地址</label>
                    <p class="settings-help">验证邮件和系统通知会默认使用该地址。</p>
                    <x-input type="email" name="mail[from][address]" id="mail[from][address]" value="{{ $from['address'] ?? '' }}" placeholder="请输入发件人邮箱地址"/>
                </div>

                <div class="settings-field">
                    <label for="mail[from][name]" class="settings-label">发件人名称</label>
                    <p class="settings-help">建议填写站点名称或团队名称。</p>
                    <x-input type="text" name="mail[from][name]" id="mail[from][name]" value="{{ $from['name'] ?? '' }}" placeholder="请输入发件人名称"/>
                </div>
            </div>

            <input type="hidden" name="mail[default]" value="smtp">
            <input type="hidden" name="mail[mailers][smtp][transport]" value="smtp">

            <div class="settings-actions">
                <x-button type="button" id="mail-test" class="bg-yellow-500 text-white hover:bg-yellow-600 hover:text-white">测试</x-button>
                <x-button type="submit">保存更改</x-button>
            </div>
        </form>
    </div>
</div>
