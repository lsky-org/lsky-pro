<form action="{{ route('admin.settings.save') }}" data-settings-form="save">
    <div class="settings-form-grid">
        <div class="settings-field">
            <label for="user_initial_capacity" class="settings-label">用户初始容量 (KB)</label>
            <p class="settings-help">新注册用户默认获得的可用存储空间，支持小数。</p>
            <x-input type="number" name="user_initial_capacity" id="user_initial_capacity" step="0.01" value="{{ $configs->get('user_initial_capacity') }}" placeholder="请输入用户初始容量(kb)"/>
        </div>
    </div>

    <div class="settings-note">
        该值会影响新增用户的默认配额策略，不会自动回写历史用户已有容量。
    </div>

    <div class="settings-actions">
        <x-button type="submit">保存更改</x-button>
    </div>
</form>
