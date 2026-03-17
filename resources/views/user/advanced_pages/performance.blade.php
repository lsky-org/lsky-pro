<x-app-layout>
    @section('title', '系统性能')

    <x-advanced-shell page="performance" title="系统性能">
        <style>
            .perf-grid {
                display: grid;
                gap: 10px;
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            }

            .perf-card {
                border: 1px solid #e2e8f0;
                border-radius: 12px;
                background: #fff;
                padding: 12px;
            }

            .perf-k {
                font-size: 12px;
                color: #64748b;
                margin-bottom: 8px;
            }

            .perf-v {
                font-size: 24px;
                line-height: 1;
                font-weight: 700;
                color: #0f172a;
            }

            .perf-v-sub {
                margin-top: 6px;
                font-size: 11px;
                color: #94a3b8;
            }

            .perf-list {
                display: grid;
                gap: 8px;
            }

            .perf-row {
                border: 1px solid #e2e8f0;
                border-radius: 10px;
                background: #fff;
                padding: 10px 12px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
            }

            .perf-row-k {
                font-size: 12px;
                color: #64748b;
            }

            .perf-row-v {
                font-size: 13px;
                color: #0f172a;
                text-align: right;
                word-break: break-word;
            }
        </style>

        <section class="adv-toolbar">
            <div class="adv-toolbar-head">
                <div>
                    <div class="adv-toolbar-title">运行概况</div>
                    <div class="adv-toolbar-sub">集中查看数据库、队列、处理驱动和核心运行参数。</div>
                </div>
                <span class="adv-chip {{ $runtime['database_ok'] ? 'success' : 'warn' }}">
                    {{ $runtime['database_ok'] ? '数据库正常' : '数据库异常' }}
                </span>
            </div>
            <div class="perf-grid">
                <div class="perf-card">
                    <div class="perf-k">图片总数</div>
                    <div class="perf-v">{{ (int) ($overview['images'] ?? 0) }}</div>
                </div>
                <div class="perf-card">
                    <div class="perf-k">排队任务</div>
                    <div class="perf-v">{{ (int) ($overview['jobs_pending'] ?? 0) }}</div>
                    <div class="perf-v-sub">jobs</div>
                </div>
                <div class="perf-card">
                    <div class="perf-k">失败任务</div>
                    <div class="perf-v">{{ (int) ($overview['jobs_failed'] ?? 0) }}</div>
                    <div class="perf-v-sub">failed_jobs</div>
                </div>
                <div class="perf-card">
                    <div class="perf-k">上传流水线</div>
                    <div class="perf-v">{{ (int) ($overview['upload_tasks_processing'] ?? 0) }}</div>
                    <div class="perf-v-sub">pending / processing</div>
                </div>
                <div class="perf-card">
                    <div class="perf-k">AI 任务</div>
                    <div class="perf-v">{{ (int) ($overview['ai_prompt_processing'] ?? 0) }}</div>
                    <div class="perf-v-sub">pending / processing</div>
                </div>
                <div class="perf-card">
                    <div class="perf-k">标签总数</div>
                    <div class="perf-v">{{ (int) ($overview['tags'] ?? 0) }}</div>
                </div>
                @if(!is_null($overview['users']))
                    <div class="perf-card">
                        <div class="perf-k">用户总数</div>
                        <div class="perf-v">{{ (int) $overview['users'] }}</div>
                    </div>
                @endif
                @if(!is_null($overview['webhooks']))
                    <div class="perf-card">
                        <div class="perf-k">Webhook 数量</div>
                        <div class="perf-v">{{ (int) $overview['webhooks'] }}</div>
                    </div>
                @endif
            </div>
        </section>

        <section class="adv-panel">
            <div class="adv-panel-head">
                <div class="adv-panel-title">处理驱动状态</div>
            </div>
            <div class="adv-panel-body">
                <div class="perf-list">
                    <div class="perf-row">
                        <div class="perf-row-k">当前配置驱动</div>
                        <div class="perf-row-v">{{ $processingStatus['configured'] ?? '-' }}</div>
                    </div>
                    @foreach(($processingStatus['drivers'] ?? []) as $name => $item)
                        <div class="perf-row">
                            <div>
                                <div class="perf-row-k">{{ $name }}</div>
                                <div class="adv-toolbar-sub">{{ $item['reason'] ?: '运行依赖已满足' }}</div>
                            </div>
                            <span class="adv-chip {{ !empty($item['available']) ? 'success' : 'warn' }}">
                                {{ !empty($item['available']) ? '可用' : '不可用' }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="adv-panel">
            <div class="adv-panel-head">
                <div class="adv-panel-title">运行时参数</div>
            </div>
            <div class="adv-panel-body">
                <div class="perf-list">
                    <div class="perf-row"><div class="perf-row-k">应用版本</div><div class="perf-row-v">{{ $runtime['app_version'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">运行环境</div><div class="perf-row-v">{{ $runtime['app_env'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">PHP / Laravel</div><div class="perf-row-v">{{ $runtime['php_version'] }} / {{ $runtime['laravel_version'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">主机 / 时区</div><div class="perf-row-v">{{ $runtime['hostname'] }} / {{ $runtime['timezone'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">内存限制</div><div class="perf-row-v">{{ $runtime['memory_limit'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">上传限制</div><div class="perf-row-v">{{ $runtime['upload_max_filesize'] }} / {{ $runtime['post_max_size'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">默认队列</div><div class="perf-row-v">{{ $runtime['queue_default'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">AI 队列</div><div class="perf-row-v">{{ $runtime['queue_ai_prompt'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">上传队列</div><div class="perf-row-v">{{ $runtime['queue_upload_pipeline'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">数据库驱动</div><div class="perf-row-v">{{ $runtime['database_driver'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">数据库状态</div><div class="perf-row-v">{{ $runtime['database_message'] }}</div></div>
                    <div class="perf-row"><div class="perf-row-k">服务器时间</div><div class="perf-row-v">{{ $runtime['server_time'] }}</div></div>
                </div>
            </div>
        </section>
    </x-advanced-shell>
</x-app-layout>
