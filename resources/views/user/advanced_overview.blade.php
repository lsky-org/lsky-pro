<x-app-layout>
    @section('title', '高阶工具总览')

    @php
        $descriptions = [
            'image-process' => '对单图执行缩放、滤镜和水印处理，适用于快速修图与导出。',
            'ai-search' => '按名称、OCR 与标签综合检索图片，快速定位目标素材。',
            'ai-prompt' => '基于图片元信息自动生成结构化提示词，支持多语言和模板。',
            'ai-config' => '配置 Gemini、DeepSeek、千问与 GPT 的 API Key、Base URL 与默认模型。',
            'performance' => '检查 PHP、数据库、队列、磁盘和处理驱动等运行状态。',
            'drivers' => '检查当前处理驱动配置与可用性，定位环境依赖问题。',
            'reviews' => '审核待审图片，执行通过/驳回并记录原因。',
            'jobs' => '跟踪批处理作业进度，支持重试和取消。',
            'team-permissions' => '管理空间成员角色与权限，保障协作边界。',
        ];

        $icons = [
            'image-process' => 'fa-sliders-h',
            'ai-search' => 'fa-search',
            'ai-prompt' => 'fa-magic',
            'ai-config' => 'fa-robot',
            'performance' => 'fa-tachometer-alt',
            'drivers' => 'fa-microchip',
            'reviews' => 'fa-user-check',
            'jobs' => 'fa-tasks',
            'team-permissions' => 'fa-users-cog',
        ];

        $statusMap = [
            'image-process' => ['class' => 'success', 'text' => '可用'],
            'ai-search' => !empty($tableExists['tags']) ? ['class' => 'success', 'text' => '可用'] : ['class' => 'warn', 'text' => '标签表未就绪'],
            'ai-prompt' => ['class' => 'success', 'text' => '可用'],
            'ai-config' => !empty($aiConfigReady) ? ['class' => 'success', 'text' => '已配置 '.$activeAiProvider] : ['class' => 'warn', 'text' => '待配置'],
            'performance' => ($user->is_adminer ?? false) ? ['class' => 'success', 'text' => '管理员可用'] : ['class' => 'warn', 'text' => '需管理员权限'],
            'drivers' => ['class' => 'success', 'text' => '可用'],
            'reviews' => ($user->is_adminer ?? false) ? ['class' => 'success', 'text' => '管理员可用'] : ['class' => 'warn', 'text' => '需管理员权限'],
            'jobs' => ['class' => 'success', 'text' => '可用'],
            'team-permissions' => !empty($tableExists['team_memberships']) ? ['class' => 'success', 'text' => '可用'] : ['class' => 'warn', 'text' => '团队表未就绪'],
        ];

        $featureHints = [
            ['name' => '异步上传链路', 'enabled' => !empty($features['upload_pipeline_async'])],
            ['name' => '签名链接', 'enabled' => !empty($features['signed_url_enabled'])],
            ['name' => '链接仅私有资源', 'enabled' => !empty($features['signed_url_private_only'])],
            ['name' => 'TTL 生命周期', 'enabled' => !empty($features['ttl_enabled'])],
            ['name' => '回收站', 'enabled' => !empty($features['recycle_bin_enabled'])],
        ];

        $tableHints = [
            ['name' => 'upload_tasks', 'enabled' => !empty($tableExists['upload_tasks'])],
            ['name' => 'webhook_subscriptions', 'enabled' => !empty($tableExists['webhook_subscriptions'])],
            ['name' => 'team_memberships', 'enabled' => !empty($tableExists['team_memberships'])],
            ['name' => 'image_batch_operations', 'enabled' => !empty($tableExists['image_batch_operations'])],
            ['name' => 'tags', 'enabled' => !empty($tableExists['tags'])],
            ['name' => 'image_intelligence_records', 'enabled' => !empty($tableExists['image_intelligence_records'])],
            ['name' => 'image_intelligence_runs', 'enabled' => !empty($tableExists['image_intelligence_runs'])],
        ];

        $intelligenceControl = is_array($intelligenceControl ?? null) ? $intelligenceControl : null;
        $isAdminIntelligenceControl = !empty($user->is_adminer) && is_array($intelligenceControl);
        $controlPlaneUi = $isAdminIntelligenceControl ? [
            'status_endpoint' => (string) data_get($intelligenceControl, 'status_endpoint', route('advanced.api.intelligence.status')),
            'preview_endpoint' => (string) data_get($intelligenceControl, 'preview_endpoint', route('advanced.api.intelligence.backfill.preview')),
            'dispatch_endpoint' => (string) data_get($intelligenceControl, 'dispatch_endpoint', route('advanced.api.intelligence.backfill.dispatch')),
            'preview_enabled' => (bool) data_get($intelligenceControl, 'preview_enabled', false),
            'dispatch_enabled' => (bool) data_get($intelligenceControl, 'dispatch_enabled', false),
            'scheduler_registered' => (bool) data_get($intelligenceControl, 'scheduler_registered', false),
            'retry_supported' => (bool) data_get($intelligenceControl, 'retry_supported', false),
            'scheduler' => [
                'cadence' => (string) data_get($intelligenceControl, 'scheduler.cadence', '-'),
                'command' => (string) data_get($intelligenceControl, 'scheduler.command', ''),
            ],
            'default_options' => [
                'limit' => (int) data_get($intelligenceControl, 'default_options.limit', 25),
                'chunk' => (int) data_get($intelligenceControl, 'default_options.chunk', 25),
                'older_than_minutes' => (int) data_get($intelligenceControl, 'default_options.older_than_minutes', 30),
                'missing_only' => (bool) data_get($intelligenceControl, 'default_options.missing_only', false),
                'force' => (bool) data_get($intelligenceControl, 'default_options.force', false),
                'sample_limit' => (int) data_get($intelligenceControl, 'default_options.sample_limit', 10),
            ],
            'latest_run' => data_get($intelligenceControl, 'latest_run'),
        ] : null;
    @endphp

    <x-advanced-shell page="overview" title="高阶工具总览">
        <style>
            .adv-overview-metrics {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
            }

            .adv-overview-metric {
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background: #fff;
                padding: 10px;
            }

            .adv-overview-metric-k {
                font-size: 12px;
                color: #64748b;
                margin-bottom: 6px;
            }

            .adv-overview-metric-v {
                font-size: 20px;
                font-weight: 700;
                color: #0f172a;
                line-height: 1;
            }

            .adv-overview-grid {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            }

            .adv-overview-card {
                border: 1px solid #e2e8f0;
                border-radius: 10px;
                background: #fff;
                padding: 12px;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .adv-overview-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
            }

            .adv-overview-name {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                color: #0f172a;
                font-size: 14px;
                font-weight: 700;
            }

            .adv-overview-desc {
                min-height: 44px;
                color: #64748b;
                font-size: 12px;
                line-height: 1.7;
            }

            .adv-overview-actions {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
            }

            .adv-overview-link {
                min-height: 32px;
                padding: 0 12px;
                border-radius: 8px;
                border: 1px solid #bfdbfe;
                background: #eff6ff;
                color: #1d4ed8;
                font-size: 12px;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                gap: 6px;
            }

            .adv-overview-status-list {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
                gap: 8px;
            }

            .adv-overview-status-item {
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background: #f8fafc;
                min-height: 34px;
                padding: 0 8px;
                font-size: 12px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 6px;
            }

            .adv-overview-callout {
                margin-top: 10px;
                border: 1px dashed #cbd5e1;
                border-radius: 12px;
                background: #f8fafc;
                padding: 12px;
            }

            .adv-overview-callout-head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 10px;
                flex-wrap: wrap;
            }

            .adv-overview-callout-title {
                font-size: 13px;
                font-weight: 700;
                color: #0f172a;
            }

            .adv-overview-callout-body {
                margin-top: 8px;
                font-size: 12px;
                line-height: 1.7;
                color: #64748b;
            }

            .adv-overview-callout-meta {
                margin-top: 10px;
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
            }

            .adv-control-grid {
                margin-top: 12px;
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
            }

            .adv-control-form {
                margin-top: 12px;
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
            }

            .adv-control-check {
                min-height: 38px;
                padding: 0 10px;
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background: #fff;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 12px;
                color: #334155;
            }

            .adv-control-output {
                margin-top: 12px;
                border: 1px solid #e2e8f0;
                border-radius: 10px;
                background: #fff;
                padding: 12px;
            }

            .adv-control-output-head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
                flex-wrap: wrap;
                margin-bottom: 8px;
            }

            .adv-control-output-title {
                font-size: 13px;
                font-weight: 700;
                color: #0f172a;
            }

            .adv-sample-list {
                margin: 8px 0 0;
                padding-left: 18px;
                color: #475569;
                font-size: 12px;
                line-height: 1.7;
            }

            .adv-inline-status {
                margin-top: 10px;
                font-size: 12px;
                color: #475569;
            }
        </style>

        <section class="adv-toolbar">
            <div class="adv-toolbar-head">
                <div>
                    <div class="adv-toolbar-title">运行概览</div>
                    <div class="adv-toolbar-sub">每个卡片都可直接进入对应高级功能页面。</div>
                </div>
                <span class="adv-chip muted"><i class="fas fa-info-circle"></i>状态仅供前端快速判断</span>
            </div>

            <div class="adv-overview-metrics">
                <div class="adv-overview-metric">
                    <div class="adv-overview-metric-k">上传任务</div>
                    <div class="adv-overview-metric-v">{{ (int) ($overview['upload_tasks'] ?? 0) }}</div>
                </div>
                <div class="adv-overview-metric">
                    <div class="adv-overview-metric-k">批处理记录</div>
                    <div class="adv-overview-metric-v">{{ (int) ($overview['batch_operations'] ?? 0) }}</div>
                </div>
                <div class="adv-overview-metric">
                    <div class="adv-overview-metric-k">参与空间</div>
                    <div class="adv-overview-metric-v">{{ (int) ($overview['spaces'] ?? 0) }}</div>
                </div>
                <div class="adv-overview-metric">
                    <div class="adv-overview-metric-k">Webhooks</div>
                    <div class="adv-overview-metric-v">{{ (int) ($overview['webhooks'] ?? 0) }}</div>
                </div>
                <div class="adv-overview-metric">
                    <div class="adv-overview-metric-k">标签总数</div>
                    <div class="adv-overview-metric-v">{{ (int) ($overview['tags'] ?? 0) }}</div>
                </div>
            </div>
        </section>

        <section class="adv-panel">
            <div class="adv-panel-head">
                <div class="adv-panel-title">Intelligence 运行</div>
            </div>
            <div class="adv-panel-body">
                <div class="adv-toolbar-sub" style="margin-bottom:10px;">基于当前账号图片统计 intelligence 覆盖情况。覆盖率按 `ready + analyzed_at` 的记录计算，缺失仅统计没有 intelligence record 的图片。</div>

                <div class="adv-overview-metrics">
                    <div class="adv-overview-metric">
                        <div class="adv-overview-metric-k">我的图片</div>
                        <div class="adv-overview-metric-v">{{ (int) ($intelligence['images_total'] ?? 0) }}</div>
                    </div>
                    <div class="adv-overview-metric">
                        <div class="adv-overview-metric-k">Intelligence 覆盖率</div>
                        <div class="adv-overview-metric-v">{{ $intelligence['coverage_label'] ?? '0%' }}</div>
                    </div>
                    <div class="adv-overview-metric">
                        <div class="adv-overview-metric-k">已分析</div>
                        <div class="adv-overview-metric-v">{{ (int) ($intelligence['analyzed_count'] ?? 0) }}</div>
                    </div>
                    <div class="adv-overview-metric">
                        <div class="adv-overview-metric-k">缺失记录</div>
                        <div class="adv-overview-metric-v">{{ (int) ($intelligence['missing_count'] ?? 0) }}</div>
                    </div>
                    <div class="adv-overview-metric">
                        <div class="adv-overview-metric-k">最近 analyzed_at</div>
                        <div class="adv-overview-metric-v" style="font-size:15px; line-height:1.4;">{{ $intelligence['latest_analyzed_at'] ?? '暂无' }}</div>
                    </div>
                </div>

                <div class="adv-overview-status-list" style="margin-top:10px;">
                    <div class="adv-overview-status-item">
                        <span>前端回填入口</span>
                        <span class="adv-chip {{ !empty($intelligence['has_frontend_backfill_entry']) ? 'success' : 'warn' }}">{{ !empty($intelligence['has_frontend_backfill_entry']) ? '已提供' : '暂无' }}</span>
                    </div>
                    <div class="adv-overview-status-item">
                        <span>回填命令</span>
                        <span class="adv-chip {{ !empty($intelligence['has_backfill_command']) ? 'success' : 'muted' }}">{{ !empty($intelligence['has_backfill_command']) ? '已接入' : '未接入' }}</span>
                    </div>
                    <div class="adv-overview-status-item">
                        <span>缺口类型</span>
                        <span class="adv-chip muted">{{ (int) ($intelligence['pending_count'] ?? 0) > 0 ? '含未就绪记录' : '以缺失记录为主' }}</span>
                    </div>
                </div>

                <div class="adv-overview-callout">
                    <div class="adv-overview-callout-head">
                        <div class="adv-overview-callout-title">回填说明</div>
                        <span class="adv-chip {{ !empty($tableExists['image_intelligence_records']) ? 'success' : 'warn' }}">{{ !empty($tableExists['image_intelligence_records']) ? 'intelligence 表已就绪' : 'intelligence 表缺失' }}</span>
                    </div>
                    <div class="adv-overview-callout-body">
                        {{ $intelligence['backfill_description'] ?? '暂无说明。' }}
                        @if((int) ($intelligence['pending_count'] ?? 0) > 0)
                            当前还有 {{ (int) $intelligence['pending_count'] }} 张图片已有记录但尚未进入 ready 状态，它们不会计入覆盖率。
                        @endif
                    </div>
                    <div class="adv-overview-callout-meta">
                        @if(!empty($intelligence['has_backfill_command']))
                            <span class="adv-chip muted adv-mono">{{ $intelligence['backfill_command'] }}</span>
                        @endif
                        <span class="adv-chip muted">最近分析时间：{{ $intelligence['latest_analyzed_at'] ?? '暂无' }}</span>
                    </div>
                </div>

                @if($isAdminIntelligenceControl)
                    <div class="adv-overview-callout">
                        <div class="adv-overview-callout-head">
                            <div class="adv-overview-callout-title">Control Plane</div>
                            <span class="adv-chip success">管理员可操作</span>
                        </div>
                        <div class="adv-overview-callout-body">通过 preview 和 dispatch 管理旧图 intelligence 回填。这里默认只提供受控小批量参数，避免一次性触发过大批次。</div>
                        <div class="adv-overview-status-list" style="margin-top:10px;">
                            <div class="adv-overview-status-item">
                                <span>preview</span>
                                <span class="adv-chip {{ !empty($controlPlaneUi['preview_enabled']) ? 'success' : 'warn' }}">{{ !empty($controlPlaneUi['preview_enabled']) ? '已启用' : '未开放' }}</span>
                            </div>
                            <div class="adv-overview-status-item">
                                <span>dispatch</span>
                                <span class="adv-chip {{ !empty($controlPlaneUi['dispatch_enabled']) ? 'success' : 'warn' }}">{{ !empty($controlPlaneUi['dispatch_enabled']) ? '已启用' : '未开放' }}</span>
                            </div>
                            <div class="adv-overview-status-item">
                                <span>scheduler</span>
                                <span class="adv-chip {{ !empty($controlPlaneUi['scheduler_registered']) ? 'success' : 'muted' }}">{{ !empty($controlPlaneUi['scheduler_registered']) ? ($controlPlaneUi['scheduler']['cadence'] ?? '-') : '未注册' }}</span>
                            </div>
                            <div class="adv-overview-status-item">
                                <span>sample cap</span>
                                <span class="adv-chip muted">{{ (int) data_get($controlPlaneUi, 'default_options.sample_limit', 10) }}</span>
                            </div>
                        </div>

                        <div class="adv-control-grid">
                            <div class="adv-overview-metric">
                                <div class="adv-overview-metric-k">全站图片</div>
                                <div class="adv-overview-metric-v" id="ic-images-total">{{ (int) ($intelligenceControl['images_total'] ?? 0) }}</div>
                            </div>
                            <div class="adv-overview-metric">
                                <div class="adv-overview-metric-k">全站覆盖率</div>
                                <div class="adv-overview-metric-v" id="ic-coverage-label">{{ $intelligenceControl['coverage_label'] ?? '0%' }}</div>
                            </div>
                            <div class="adv-overview-metric">
                                <div class="adv-overview-metric-k">全站缺失</div>
                                <div class="adv-overview-metric-v" id="ic-missing-count">{{ (int) ($intelligenceControl['missing_count'] ?? 0) }}</div>
                            </div>
                            <div class="adv-overview-metric">
                                <div class="adv-overview-metric-k">全站 pending</div>
                                <div class="adv-overview-metric-v" id="ic-pending-count">{{ (int) ($intelligenceControl['pending_count'] ?? 0) }}</div>
                            </div>
                        </div>

                        <div class="adv-control-form">
                            <label class="adv-field">
                                <span>limit</span>
                                <input id="ic-limit" class="adv-input" type="number" min="1" max="200" value="{{ (int) data_get($intelligenceControl, 'default_options.limit', 25) }}">
                            </label>
                            <label class="adv-field">
                                <span>chunk</span>
                                <input id="ic-chunk" class="adv-input" type="number" min="1" max="100" value="{{ (int) data_get($intelligenceControl, 'default_options.chunk', 25) }}">
                            </label>
                            <label class="adv-field">
                                <span>older_than_minutes</span>
                                <input id="ic-older" class="adv-input" type="number" min="0" max="10080" value="{{ (int) data_get($intelligenceControl, 'default_options.older_than_minutes', 30) }}">
                            </label>
                            <label class="adv-field">
                                <span>sample_limit</span>
                                <input id="ic-sample-limit" class="adv-input" type="number" min="0" max="50" value="{{ (int) data_get($intelligenceControl, 'default_options.sample_limit', 10) }}">
                            </label>
                            <label class="adv-control-check"><input id="ic-missing-only" type="checkbox" {{ data_get($intelligenceControl, 'default_options.missing_only', false) ? 'checked' : '' }}> <span>仅缺失 record</span></label>
                            <label class="adv-control-check"><input id="ic-force" type="checkbox" {{ data_get($intelligenceControl, 'default_options.force', false) ? 'checked' : '' }}> <span>force 重派发</span></label>
                        </div>

                        <div class="adv-actions" style="margin-top:12px;">
                            <button type="button" class="adv-btn" id="ic-refresh"><i class="fas fa-sync"></i>刷新状态</button>
                            <button type="button" class="adv-btn" id="ic-preview" {{ data_get($intelligenceControl, 'preview_enabled', false) ? '' : 'disabled' }}><i class="fas fa-search"></i>Preview</button>
                            <button type="button" class="adv-btn primary" id="ic-dispatch" {{ data_get($intelligenceControl, 'dispatch_enabled', false) ? '' : 'disabled' }}><i class="fas fa-play"></i>Dispatch</button>
                            <button type="button" class="adv-btn" id="ic-retry-last" {{ data_get($intelligenceControl, 'latest_run.id') && data_get($intelligenceControl, 'retry_supported', false) ? '' : 'disabled' }}><i class="fas fa-redo"></i>重试上次 Dispatch</button>
                        </div>

                        <div class="adv-inline-status" id="ic-status">control plane 已就绪。</div>

                        <div class="adv-control-output">
                            <div class="adv-control-output-head">
                                <div class="adv-control-output-title">最近一次结果</div>
                                <span class="adv-chip muted" id="ic-latest-analyzed">最近 analyzed_at：{{ $intelligenceControl['latest_analyzed_at'] ?? '暂无' }}</span>
                            </div>
                            <div class="adv-overview-callout-meta" style="margin-top:0; margin-bottom:8px;">
                                <span class="adv-chip muted">状态接口已接入</span>
                                @if(!empty($controlPlaneUi['scheduler']['command']))
                                    <span class="adv-chip muted adv-mono">{{ $controlPlaneUi['scheduler']['command'] }}</span>
                                @endif
                            </div>
                            <div class="adv-overview-status-list">
                                <div class="adv-overview-status-item"><span>run</span><span class="adv-chip muted" id="ic-run-id">{{ data_get($intelligenceControl, 'latest_run.id') ? '#'.data_get($intelligenceControl, 'latest_run.id') : '-' }}</span></div>
                                <div class="adv-overview-status-item"><span>status</span><span class="adv-chip muted" id="ic-run-status">{{ data_get($intelligenceControl, 'latest_run.status_label', '暂无') }}</span></div>
                                <div class="adv-overview-status-item"><span>requested_by</span><span class="adv-chip muted" id="ic-run-requested-by">{{ data_get($intelligenceControl, 'latest_run.requested_by', '-') }}</span></div>
                                <div class="adv-overview-status-item"><span>requested_at</span><span class="adv-chip muted" id="ic-run-requested-at">{{ data_get($intelligenceControl, 'latest_run.requested_at', '暂无') }}</span></div>
                            </div>
                            <div class="adv-overview-status-list" style="margin-top:8px;">
                                <div class="adv-overview-status-item"><span>matched</span><span class="adv-chip muted" id="ic-result-matched">-</span></div>
                                <div class="adv-overview-status-item"><span>processed</span><span class="adv-chip muted" id="ic-result-processed">-</span></div>
                                <div class="adv-overview-status-item"><span>dispatched</span><span class="adv-chip muted" id="ic-result-dispatched">-</span></div>
                                <div class="adv-overview-status-item"><span>skipped</span><span class="adv-chip muted" id="ic-result-skipped">-</span></div>
                                <div class="adv-overview-status-item"><span>succeeded</span><span class="adv-chip muted" id="ic-result-succeeded">{{ (int) data_get($intelligenceControl, 'latest_run.succeeded', 0) }}</span></div>
                                <div class="adv-overview-status-item"><span>failed</span><span class="adv-chip muted" id="ic-result-failed">{{ (int) data_get($intelligenceControl, 'latest_run.failed', 0) }}</span></div>
                            </div>
                            <ul class="adv-sample-list" id="ic-samples"></ul>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <section class="adv-panel">
            <div class="adv-panel-head">
                <div class="adv-panel-title">功能入口</div>
            </div>
            <div class="adv-panel-body">
                <div class="adv-overview-grid">
                    @foreach($pages as $key => $name)
                        @php
                            $status = $statusMap[$key] ?? ['class' => 'muted', 'text' => '未知'];
                        @endphp
                        <article class="adv-overview-card">
                            <div class="adv-overview-title">
                                <div class="adv-overview-name"><i class="fas {{ $icons[$key] ?? 'fa-tools' }} text-blue-500"></i><span>{{ $name }}</span></div>
                                <span class="adv-chip {{ $status['class'] }}">{{ $status['text'] }}</span>
                            </div>
                            <div class="adv-overview-desc">{{ $descriptions[$key] ?? '高级能力入口。' }}</div>
                            <div class="adv-overview-actions">
                                <span class="adv-chip muted"><i class="fas fa-circle"></i>{{ $status['text'] }}</span>
                                <a class="adv-overview-link" href="{{ route('advanced.feature', ['feature' => $key]) }}"><i class="fas fa-arrow-right"></i>进入功能</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="adv-panel">
            <div class="adv-panel-head">
                <div class="adv-panel-title">系统状态提示</div>
            </div>
            <div class="adv-panel-body">
                <div class="adv-toolbar-sub" style="margin-bottom:6px;">功能开关</div>
                <div class="adv-overview-status-list" style="margin-bottom:10px;">
                    @foreach($featureHints as $item)
                        <div class="adv-overview-status-item">
                            <span>{{ $item['name'] }}</span>
                            <span class="adv-chip {{ $item['enabled'] ? 'success' : 'muted' }}">{{ $item['enabled'] ? '开启' : '关闭' }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="adv-toolbar-sub" style="margin-bottom:6px;">数据表就绪</div>
                <div class="adv-overview-status-list">
                    @foreach($tableHints as $item)
                        <div class="adv-overview-status-item">
                            <span class="adv-mono">{{ $item['name'] }}</span>
                            <span class="adv-chip {{ $item['enabled'] ? 'success' : 'warn' }}">{{ $item['enabled'] ? '就绪' : '缺失' }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-advanced-shell>

    @if($isAdminIntelligenceControl)
        <script>
            (function () {
                if (!window.axios) {
                    return;
                }

                const runtimeControl = Object.assign({}, @json($controlPlaneUi));
                if (!runtimeControl || !runtimeControl.status_endpoint) {
                    return;
                }

                const els = {
                    imagesTotal: document.getElementById('ic-images-total'),
                    coverageLabel: document.getElementById('ic-coverage-label'),
                    missingCount: document.getElementById('ic-missing-count'),
                    pendingCount: document.getElementById('ic-pending-count'),
                    latestAnalyzed: document.getElementById('ic-latest-analyzed'),
                    limit: document.getElementById('ic-limit'),
                    chunk: document.getElementById('ic-chunk'),
                    older: document.getElementById('ic-older'),
                    sampleLimit: document.getElementById('ic-sample-limit'),
                    missingOnly: document.getElementById('ic-missing-only'),
                    force: document.getElementById('ic-force'),
                    refresh: document.getElementById('ic-refresh'),
                    preview: document.getElementById('ic-preview'),
                    dispatch: document.getElementById('ic-dispatch'),
                    retryLast: document.getElementById('ic-retry-last'),
                    status: document.getElementById('ic-status'),
                    runId: document.getElementById('ic-run-id'),
                    runStatus: document.getElementById('ic-run-status'),
                    runRequestedBy: document.getElementById('ic-run-requested-by'),
                    runRequestedAt: document.getElementById('ic-run-requested-at'),
                    resultMatched: document.getElementById('ic-result-matched'),
                    resultProcessed: document.getElementById('ic-result-processed'),
                    resultDispatched: document.getElementById('ic-result-dispatched'),
                    resultSkipped: document.getElementById('ic-result-skipped'),
                    resultSucceeded: document.getElementById('ic-result-succeeded'),
                    resultFailed: document.getElementById('ic-result-failed'),
                    samples: document.getElementById('ic-samples'),
                };

                function setStatus(text, isError) {
                    if (!els.status) return;
                    els.status.textContent = text || '';
                    els.status.style.color = isError ? '#b91c1c' : '#475569';
                }

                function applyAvailability(busy) {
                    if (els.refresh) {
                        els.refresh.disabled = !!busy || !runtimeControl.status_endpoint;
                    }

                    if (els.preview) {
                        els.preview.disabled = !!busy || !runtimeControl.preview_endpoint || !runtimeControl.preview_enabled;
                    }

                    if (els.dispatch) {
                        els.dispatch.disabled = !!busy || !runtimeControl.dispatch_endpoint || !runtimeControl.dispatch_enabled;
                    }

                    if (els.retryLast) {
                        const latestRunId = Number(runtimeControl.latest_run && runtimeControl.latest_run.id ? runtimeControl.latest_run.id : 0);
                        els.retryLast.disabled = !!busy
                            || !runtimeControl.dispatch_endpoint
                            || !runtimeControl.dispatch_enabled
                            || !runtimeControl.retry_supported
                            || latestRunId < 1;
                    }
                }

                function getPayload() {
                    return {
                        limit: Number(String((els.limit ? els.limit.value : '') || '').trim() || 0),
                        chunk: Number(String((els.chunk ? els.chunk.value : '') || '').trim() || 0),
                        older_than_minutes: Number(String((els.older ? els.older.value : '') || '').trim() || 0),
                        sample_limit: Number(String((els.sampleLimit ? els.sampleLimit.value : '') || '').trim() || 0),
                        missing_only: !!(els.missingOnly && els.missingOnly.checked),
                        force: !!(els.force && els.force.checked),
                    };
                }

                function renderSummary(intelligence) {
                    const control = intelligence && intelligence.control_plane ? intelligence.control_plane : null;
                    if (!control) return;

                    Object.assign(runtimeControl, control);

                    if (els.imagesTotal) els.imagesTotal.textContent = String(control.images_total ?? 0);
                    if (els.coverageLabel) els.coverageLabel.textContent = String(control.coverage_label ?? '0%');
                    if (els.missingCount) els.missingCount.textContent = String(control.missing_count ?? 0);
                    if (els.pendingCount) els.pendingCount.textContent = String(control.pending_count ?? 0);
                    if (els.latestAnalyzed) els.latestAnalyzed.textContent = '最近 analyzed_at：' + String(control.latest_analyzed_at || '暂无');
                    renderLatestRun(control.latest_run || null);
                    applyAvailability(false);
                }

                function renderLatestRun(run) {
                    runtimeControl.latest_run = run || null;

                    if (els.runId) {
                        els.runId.textContent = run && run.id ? ('#' + String(run.id)) : '-';
                    }
                    if (els.runStatus) {
                        els.runStatus.textContent = String((run && (run.status_label || run.status)) || '暂无');
                    }
                    if (els.runRequestedBy) {
                        els.runRequestedBy.textContent = String((run && run.requested_by) || '-');
                    }
                    if (els.runRequestedAt) {
                        els.runRequestedAt.textContent = String((run && run.requested_at) || '暂无');
                    }
                    if (els.resultSucceeded) {
                        els.resultSucceeded.textContent = String((run && run.succeeded) || 0);
                    }
                    if (els.resultFailed) {
                        els.resultFailed.textContent = String((run && run.failed) || 0);
                    }
                }

                function renderResult(result) {
                    if (!result) return;

                    if (els.resultMatched) els.resultMatched.textContent = String(result.matched ?? '-');
                    if (els.resultProcessed) els.resultProcessed.textContent = String(result.processed ?? '-');
                    if (els.resultDispatched) els.resultDispatched.textContent = String(result.dispatched ?? '-');
                    if (els.resultSkipped) els.resultSkipped.textContent = String(result.skipped ?? '-');
                    if (els.resultSucceeded) els.resultSucceeded.textContent = String(result.run && result.run.succeeded ? result.run.succeeded : 0);
                    if (els.resultFailed) els.resultFailed.textContent = String(result.run && result.run.failed ? result.run.failed : 0);
                    if (result.run) {
                        renderLatestRun(result.run);
                    }

                    if (!els.samples) return;

                    const samples = Array.isArray(result.samples) ? result.samples : [];
                    els.samples.innerHTML = samples.map(function (item) {
                        return '<li><span class="adv-mono">' + String(item.key || '-') + '</span> · image_id=' + String(item.image_id || '-') + ' · reason=' + String(item.reason || '-') + '</li>';
                    }).join('');
                }

                async function refreshStatus() {
                    applyAvailability(true);
                    setStatus('正在刷新 control plane 状态');

                    try {
                        const { data } = await axios.get(runtimeControl.status_endpoint);
                        if (!data || data.status !== true) {
                            throw new Error((data && data.message) || '刷新失败');
                        }

                        renderSummary((data.data && data.data.intelligence) || {});
                        setStatus('control plane 状态已刷新。');
                    } catch (error) {
                        setStatus((error && error.message) || '刷新失败', true);
                    } finally {
                        applyAvailability(false);
                    }
                }

                async function runAction(endpoint, label) {
                    if (!endpoint) {
                        setStatus(label + ' 当前未开放', true);
                        return;
                    }

                    applyAvailability(true);
                    setStatus('正在执行 ' + label);

                    try {
                        const { data } = await axios.post(endpoint, getPayload());
                        if (!data || data.status !== true) {
                            throw new Error((data && data.message) || (label + ' 失败'));
                        }

                        renderSummary((data.data && data.data.intelligence) || {});
                        renderResult((data.data && data.data.result) || {});
                        setStatus(label + ' 完成。');
                    } catch (error) {
                        setStatus((error && error.message) || (label + ' 失败'), true);
                    } finally {
                        applyAvailability(false);
                    }
                }

                async function retryLatestRun() {
                    const latestRunId = Number(runtimeControl.latest_run && runtimeControl.latest_run.id ? runtimeControl.latest_run.id : 0);
                    if (latestRunId < 1) {
                        setStatus('当前没有可重试的 dispatch run', true);
                        return;
                    }

                    applyAvailability(true);
                    setStatus('正在重试 run #' + String(latestRunId));

                    try {
                        const { data } = await axios.post(runtimeControl.dispatch_endpoint, {
                            retry_run_id: latestRunId,
                        });
                        if (!data || data.status !== true) {
                            throw new Error((data && data.message) || '重试失败');
                        }

                        renderSummary((data.data && data.data.intelligence) || {});
                        renderResult((data.data && data.data.result) || {});
                        setStatus('run #' + String(latestRunId) + ' 已重新派发。');
                    } catch (error) {
                        setStatus((error && error.message) || '重试失败', true);
                    } finally {
                        applyAvailability(false);
                    }
                }

                if (els.refresh) {
                    els.refresh.addEventListener('click', refreshStatus);
                }
                if (els.preview) {
                    els.preview.addEventListener('click', function () {
                        runAction(runtimeControl.preview_endpoint, 'preview');
                    });
                }
                if (els.dispatch) {
                    els.dispatch.addEventListener('click', function () {
                        runAction(runtimeControl.dispatch_endpoint, 'dispatch');
                    });
                }
                if (els.retryLast) {
                    els.retryLast.addEventListener('click', retryLatestRun);
                }

                renderLatestRun(runtimeControl.latest_run || null);
                applyAvailability(false);
            })();
        </script>
    @endif
</x-app-layout>
