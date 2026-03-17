<form action="{{ route('admin.settings.save') }}" data-settings-form="save">
    <div class="settings-form-grid">
        <div class="settings-field">
            <label for="app_name" class="settings-label"><span class="text-red-600">*</span> 应用名称</label>
            <p class="settings-help">显示在导航、页面标题和系统对外文案中。</p>
            <x-input type="text" name="app_name" id="app_name" value="{{ $configs->get('app_name') }}" placeholder="请输入应用名称"/>
        </div>

        <div class="settings-field">
            <label for="icp_no" class="settings-label">备案号</label>
            <p class="settings-help">公开展示在页脚或备案位，未备案可留空。</p>
            <x-input type="text" name="icp_no" id="icp_no" value="{{ $configs->get('icp_no') }}" placeholder="请输入备案号"/>
        </div>

        <div class="settings-field settings-field-span-2">
            <label for="site_keywords" class="settings-label">网站关键字</label>
            <p class="settings-help">用于 SEO 和站点描述补充，建议以逗号分隔。</p>
            <x-textarea name="site_keywords" id="site_keywords" rows="4" placeholder="请输入网站关键字">{{ $configs->get('site_keywords') }}</x-textarea>
        </div>

        <div class="settings-field settings-field-span-2">
            <label for="site_description" class="settings-label">网站描述</label>
            <p class="settings-help">用于搜索引擎摘要和外部分享场景。</p>
            <x-textarea name="site_description" id="site_description" rows="4" placeholder="请输入网站描述">{{ $configs->get('site_description') }}</x-textarea>
        </div>

        <div class="settings-field settings-field-span-2">
            <label for="site_notice" class="settings-label">网站公告</label>
            <p class="settings-help">首页弹出公告，支持 Markdown，不设置请留空。</p>
            <x-textarea name="site_notice" id="site_notice" rows="7" placeholder="首页弹出公告，支持 Markdown，不设置请留空。">{{ $configs->get('site_notice') }}</x-textarea>
        </div>
    </div>

    <div class="settings-actions">
        <x-button type="submit">保存更改</x-button>
    </div>
</form>
