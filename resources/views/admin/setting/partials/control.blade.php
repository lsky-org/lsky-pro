@php
    $toggles = [
        ['name' => 'is_enable_registration', 'title' => '启用注册', 'description' => '控制新用户是否可以注册账号。'],
        ['name' => 'is_enable_gallery', 'title' => '启用画廊', 'description' => '画廊只对登录用户可见，展示所有公开图片。'],
        ['name' => 'is_enable_api', 'title' => '启用接口', 'description' => '关闭后将无法通过接口上传、管理图片。'],
        ['name' => 'is_allow_guest_upload', 'title' => '允许游客上传', 'description' => '游客上传仍然受系统默认组的权限控制。'],
        ['name' => 'is_user_need_verify', 'title' => '账号验证', 'description' => '强制用户验证邮箱后才能上传图片，请先确认邮件链路正常。'],
    ];
@endphp

<form action="{{ route('admin.settings.save') }}" data-settings-form="save">
    <div class="settings-toggle-grid">
        @foreach($toggles as $toggle)
            <div class="settings-toggle-card">
                <div>
                    <div class="settings-toggle-title">{{ $toggle['title'] }}</div>
                    <div class="settings-toggle-copy">{{ $toggle['description'] }}</div>
                </div>
                <x-switch name="{{ $toggle['name'] }}" value="1" :checked="(bool) $configs->get($toggle['name'])" />
            </div>
        @endforeach
    </div>

    <div class="settings-note">
        这些开关会直接影响前台可见能力和登录后行为。启用「账号验证」之前，建议先在邮件配置区完成一次测试发送。
    </div>

    <div class="settings-actions">
        <x-button type="submit">保存更改</x-button>
    </div>
</form>
