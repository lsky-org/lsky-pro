<div class="settings-stack">
    <div class="settings-inline-grid">
        <div class="settings-mini-card">
            <div class="settings-mini-title">当前版本</div>
            <div class="settings-mini-sub">基于系统配置读取本地版本号。</div>
            <div class="settings-mini-value">{{ \App\Utils::config(\App\Enums\ConfigKey::AppVersion) }}</div>
        </div>
        <div class="settings-mini-card">
            <div class="settings-mini-title">更新检查</div>
            <div class="settings-mini-sub">进入页面后自动拉取远端版本信息。</div>
            <div class="settings-mini-value">自动执行</div>
        </div>
        <div class="settings-mini-card">
            <div class="settings-mini-title">升级入口</div>
            <div class="settings-mini-sub">继续沿用当前 UpgradeService 流程。</div>
            <div class="settings-mini-value">已保留</div>
        </div>
    </div>

    <div class="settings-upgrade-board">
        <p id="check-update" class="settings-upgrade-state" style="display: none">
            <i class="fas fa-cog animate-spin"></i>
            <span>正在检查更新...</span>
        </p>
        <p id="not-update" class="settings-upgrade-state" style="display: none">
            <span class="text-gray-700">{{ \App\Utils::config(\App\Enums\ConfigKey::AppVersion) }}</span>
            <span class="text-gray-500">已是最新版本</span>
        </p>
        <div id="have-update" class="break-words" style="display: none"></div>
    </div>
</div>
