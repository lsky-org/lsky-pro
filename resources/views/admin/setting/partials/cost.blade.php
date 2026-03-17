<form action="{{ route('admin.settings.save') }}" data-settings-form="save">
    <div class="settings-form-grid">
        <div class="settings-field">
            <label for="storage_cost_per_gb_month" class="settings-label">存储单价（每 GB / 月）</label>
            <p class="settings-help">用于统计页估算每月成本，不影响真实账单。</p>
            <x-input type="number" name="storage_cost_per_gb_month" id="storage_cost_per_gb_month" step="0.0001" min="0" value="{{ $configs->get('storage_cost_per_gb_month', 0) }}" placeholder="例如：0.12"/>
        </div>

        <div class="settings-field">
            <label for="storage_cost_currency" class="settings-label">币种（ISO 代码）</label>
            <p class="settings-help">例如 `CNY`、`USD`。</p>
            <x-input type="text" name="storage_cost_currency" id="storage_cost_currency" value="{{ $configs->get('storage_cost_currency', 'CNY') }}" placeholder="例如：CNY / USD"/>
        </div>
    </div>

    <div class="settings-note">
        成本估算会被分析页和管理概览消费，适合填入当前团队内部核算单价。
    </div>

    <div class="settings-actions">
        <x-button type="submit">保存更改</x-button>
    </div>
</form>
