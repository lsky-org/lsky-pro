<x-app-layout>
    @section('title', '作业中心')

    <x-advanced-shell page="jobs" title="作业中心">
        <style>
            .job-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 20px; }
            .job-stat { background: var(--adv-card-bg, #f8f9fa); border-radius: 8px; padding: 16px; text-align: center; border: 1px solid var(--adv-border, #e0e0e0); }
            .job-stat-value { font-size: 28px; font-weight: 700; color: var(--adv-primary, #4a6cf7); line-height: 1.2; }
            .job-stat-label { font-size: 12px; color: var(--adv-muted, #888); margin-top: 4px; }
            .job-actions { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 20px; }
            .job-actions .adv-btn:disabled { opacity: .4; cursor: not-allowed; pointer-events: none; }
            .job-progress { margin-bottom: 20px; }
            .job-progress-bar { background: var(--adv-border, #e0e0e0); border-radius: 6px; height: 24px; overflow: hidden; position: relative; }
            .job-progress-fill { height: 100%; border-radius: 6px; transition: width 0.3s ease; min-width: 0; }
            .job-progress-fill.running { background: var(--adv-primary, #4a6cf7); }
            .job-progress-fill.paused { background: #f59e0b; }
            .job-progress-fill.completed { background: #10b981; }
            .job-progress-fill.stopped { background: #ef4444; }
            .job-progress-text { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 600; color: #333; }
            .job-progress-info { display: flex; justify-content: space-between; margin-top: 6px; font-size: 12px; color: var(--adv-muted, #888); }
            .job-status { display: inline-block; padding: 2px 10px; border-radius: 12px; font-size: 12px; font-weight: 600; }
            .job-status.idle { background: #e8e8e8; color: #666; }
            .job-status.running { background: #dbeafe; color: #1d4ed8; }
            .job-status.paused { background: #fef3c7; color: #92400e; }
            .job-status.completed { background: #d1fae5; color: #065f46; }
            .job-status.stopped { background: #fee2e2; color: #991b1b; }
            .job-log { background: #1a1a2e; color: #d4d4d4; border-radius: 8px; padding: 12px 16px; font-family: 'SF Mono', 'Fira Code', monospace; font-size: 12px; height: 280px; overflow-y: auto; border: 1px solid var(--adv-border, #333); line-height: 1.6; }
            .job-log-line { padding: 1px 0; white-space: pre-wrap; word-break: break-all; }
            .job-log-line .time { color: #6b7280; }
            .job-log-line .ok { color: #34d399; }
            .job-log-line .fail { color: #f87171; }
            .job-log-line .info { color: #60a5fa; }
            .job-log-line .sched { color: #c084fc; }
            .job-log-empty { color: #6b7280; font-style: italic; }
            .job-section { margin-bottom: 24px; }
            .job-section-title { font-size: 14px; font-weight: 600; margin-bottom: 10px; color: var(--adv-fg, #333); display: flex; align-items: center; gap: 8px; }

            .job-sched-card { padding: 16px; background: var(--adv-card-bg, #f8f9fa); border: 1px solid var(--adv-border, #e0e0e0); border-radius: 8px; }
            .job-sched-row { display: flex; align-items: center; gap: 12px; flex-wrap: wrap; }
            .job-sched-row + .job-sched-row { margin-top: 12px; }
            .job-sched-label { font-size: 13px; color: var(--adv-fg, #555); white-space: nowrap; min-width: 70px; }
            .job-switch { position: relative; width: 40px; height: 22px; flex-shrink: 0; }
            .job-switch input { opacity: 0; width: 0; height: 0; }
            .job-switch .slider { position: absolute; inset: 0; background: #ccc; border-radius: 22px; cursor: pointer; transition: .2s; }
            .job-switch .slider:before { content: ''; position: absolute; width: 16px; height: 16px; left: 3px; bottom: 3px; background: #fff; border-radius: 50%; transition: .2s; }
            .job-switch input:checked + .slider { background: var(--adv-primary, #4a6cf7); }
            .job-switch input:checked + .slider:before { transform: translateX(18px); }
            .job-cron-input { font-family: 'SF Mono', 'Fira Code', monospace; font-size: 14px; padding: 6px 12px; border: 1px solid var(--adv-border, #ddd); border-radius: 6px; background: var(--adv-card-bg, #fff); color: var(--adv-fg, #333); width: 180px; letter-spacing: 1px; }
            .job-cron-presets { display: flex; gap: 6px; flex-wrap: wrap; }
            .job-cron-preset { padding: 4px 10px; border-radius: 5px; font-size: 11px; cursor: pointer; border: 1px solid var(--adv-border, #ddd); background: var(--adv-card-bg, #fff); color: var(--adv-fg, #555); transition: .15s; }
            .job-cron-preset:hover { border-color: var(--adv-primary, #4a6cf7); color: var(--adv-primary, #4a6cf7); }
            .job-cron-preset.active { background: var(--adv-primary, #4a6cf7); color: #fff; border-color: transparent; }
            .job-sched-meta { font-size: 12px; color: var(--adv-muted, #888); margin-top: 10px; display: flex; gap: 20px; flex-wrap: wrap; }
            .job-sched-meta span { display: flex; align-items: center; gap: 4px; }
            .job-dot { display: inline-block; width: 7px; height: 7px; border-radius: 50%; }
            .job-dot.alive { background: #10b981; }
            .job-dot.dead { background: #ef4444; }
            .job-cron-desc { font-size: 12px; color: var(--adv-primary, #4a6cf7); margin-top: 6px; }
            .job-cron-err { font-size: 12px; color: #ef4444; margin-top: 6px; }
            .job-sched-save { padding: 6px 16px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer; background: var(--adv-primary, #4a6cf7); color: #fff; border: none; transition: .15s; }
            .job-sched-save:hover { opacity: .85; }
            .job-live { font-size: 11px; color: #10b981; font-weight: 400; display: none; }
            .job-live::before { content: ''; display: inline-block; width: 6px; height: 6px; background: #10b981; border-radius: 50%; margin-right: 4px; animation: livePulse 1.5s infinite; }
            @keyframes livePulse { 0%,100% { opacity: 1; } 50% { opacity: .3; } }

            @media (max-width: 640px) { .job-stats { grid-template-columns: repeat(2, 1fr); } .job-sched-row { flex-direction: column; align-items: flex-start; } .job-cron-input { width: 100%; } }

            .job-modal-mask { position: fixed; inset: 0; background: rgba(0,0,0,.45); z-index: 9000; display: none; align-items: center; justify-content: center; opacity: 0; transition: opacity .2s; }
            .job-modal-mask.show { opacity: 1; }
            .job-modal { background: var(--adv-card-bg, #fff); border-radius: 12px; padding: 24px; width: 360px; max-width: 90vw; box-shadow: 0 8px 32px rgba(0,0,0,.2); border: 1px solid var(--adv-border, #e0e0e0); transform: translateY(12px) scale(.97); transition: transform .2s; }
            .job-modal-mask.show .job-modal { transform: translateY(0) scale(1); }
            .job-modal-icon { width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 20px; }
            .job-modal-icon.warn { background: #fef3c7; color: #d97706; }
            .job-modal-icon.danger { background: #fee2e2; color: #dc2626; }
            .job-modal-icon.info { background: #dbeafe; color: #2563eb; }
            .job-modal-title { font-size: 16px; font-weight: 700; text-align: center; color: var(--adv-fg, #333); margin-bottom: 8px; }
            .job-modal-msg { font-size: 13px; text-align: center; color: var(--adv-muted, #888); line-height: 1.5; margin-bottom: 20px; }
            .job-modal-btns { display: flex; gap: 10px; }
            .job-modal-btns button { flex: 1; padding: 9px 0; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; border: 1px solid var(--adv-border, #ddd); transition: all .15s; }
            .job-modal-btns .jm-cancel { background: var(--adv-card-bg, #f5f5f5); color: var(--adv-fg, #555); }
            .job-modal-btns .jm-cancel:hover { background: var(--adv-border, #e0e0e0); }
            .job-modal-btns .jm-ok { background: var(--adv-primary, #4a6cf7); color: #fff; border-color: transparent; }
            .job-modal-btns .jm-ok:hover { opacity: .85; }
            .job-modal-btns .jm-ok.danger { background: #dc2626; }
        </style>

        {{-- Stats --}}
        <section class="job-section">
            <div class="job-stats">
                <div class="job-stat"><div class="job-stat-value" id="statTotal">-</div><div class="job-stat-label">图片总数</div></div>
                <div class="job-stat"><div class="job-stat-value" id="statProcessed">-</div><div class="job-stat-label">已识别</div></div>
                <div class="job-stat"><div class="job-stat-value" id="statPending">-</div><div class="job-stat-label">待识别</div></div>
                <div class="job-stat"><div class="job-stat-value" id="statTerms">-</div><div class="job-stat-label">标签总数</div></div>
            </div>
        </section>

        {{-- Schedule --}}
        <section class="job-section">
            <div class="job-section-title">定时任务</div>
            <div class="job-sched-card">
                <div class="job-sched-row">
                    <label class="job-switch">
                        <input type="checkbox" id="schedEnabled">
                        <span class="slider"></span>
                    </label>
                    <span class="job-sched-label" id="schedOnOff">未启用</span>
                    <input type="text" class="job-cron-input" id="schedCron" value="0 */6 * * *" placeholder="分 时 日 月 周">
                    <button class="job-sched-save" onclick="saveSchedule()">保存</button>
                </div>
                <div class="job-sched-row">
                    <span class="job-sched-label">快捷设置</span>
                    <div class="job-cron-presets" id="cronPresets">
                        <button class="job-cron-preset" data-cron="*/30 * * * *">每30分钟</button>
                        <button class="job-cron-preset" data-cron="0 * * * *">每小时</button>
                        <button class="job-cron-preset" data-cron="0 */2 * * *">每2小时</button>
                        <button class="job-cron-preset" data-cron="0 */6 * * *">每6小时</button>
                        <button class="job-cron-preset" data-cron="0 */12 * * *">每12小时</button>
                        <button class="job-cron-preset" data-cron="0 3 * * *">每天 03:00</button>
                        <button class="job-cron-preset" data-cron="0 3 * * 1">每周一 03:00</button>
                    </div>
                </div>
                <div id="cronDesc" class="job-cron-desc"></div>
                <div class="job-sched-meta" id="schedMeta"></div>
            </div>
        </section>

        {{-- Controls --}}
        <section class="job-section">
            <div class="job-section-title">作业控制</div>
            <div class="job-actions">
                <button class="adv-btn primary" id="btnStart" onclick="startJob(false)">识别未处理图片</button>
                <button class="adv-btn" id="btnReprocess" onclick="startJob(true)">重新识别全部</button>
                <button class="adv-btn" id="btnPause" onclick="pauseJob()" disabled>暂停</button>
                <button class="adv-btn" id="btnResume" onclick="resumeJob()" disabled>继续</button>
                <button class="adv-btn" id="btnStop" onclick="stopJob()" disabled>停止</button>
                <button class="adv-btn" id="btnClear" onclick="clearData()">清除全部识别数据</button>
            </div>
        </section>

        {{-- Progress --}}
        <section class="job-section" id="progressSection" style="display:none">
            <div class="job-section-title">
                作业进度 <span class="job-status idle" id="statusBadge">空闲</span>
            </div>
            <div class="job-progress">
                <div class="job-progress-bar">
                    <div class="job-progress-fill running" id="progressFill" style="width:0%"></div>
                    <div class="job-progress-text" id="progressText">0%</div>
                </div>
                <div class="job-progress-info">
                    <span id="progressDetail">-</span>
                    <span id="progressEta">-</span>
                </div>
            </div>
        </section>

        {{-- Logs --}}
        <section class="job-section">
            <div class="job-section-title">
                实时日志
                <span class="job-live" id="logLive">LIVE</span>
            </div>
            <div class="job-log" id="jobLog">
                <div class="job-log-empty">等待日志...</div>
            </div>
        </section>

        {{-- Modal --}}
        <div class="job-modal-mask" id="jobModal">
            <div class="job-modal">
                <div class="job-modal-icon warn" id="jmIcon"><i class="fa fa-exclamation" id="jmIconI"></i></div>
                <div class="job-modal-title" id="jmTitle"></div>
                <div class="job-modal-msg" id="jmMsg"></div>
                <div class="job-modal-btns">
                    <button class="jm-cancel" onclick="closeJobModal()">取消</button>
                    <button class="jm-ok" id="jmOk">确认</button>
                </div>
            </div>
        </div>

        @push('scripts')
        <script>
        (() => {
            let polling = null;
            let logOffset = 0;
            let _modalResolve = null;
            let _firstProcessed = null;
            let _firstProcessedTime = null;

            const api = path => axios.get('/advanced-api/intelligence/' + path).then(r => r.data);
            const post = (path, data) => axios.post('/advanced-api/intelligence/' + path, data || {}).then(r => r.data);

            /* ── Modal ── */
            const ICON_MAP = {danger: 'fa-trash', info: 'fa-play', warn: 'fa-exclamation'};
            function jobConfirm({title, msg, icon, danger}) {
                return new Promise(resolve => {
                    _modalResolve = resolve;
                    document.getElementById('jmTitle').textContent = title;
                    document.getElementById('jmMsg').textContent = msg || '';
                    document.getElementById('jmIcon').className = 'job-modal-icon ' + (icon || 'warn');
                    document.getElementById('jmIconI').className = 'fa ' + (ICON_MAP[icon] || ICON_MAP.warn);
                    const okBtn = document.getElementById('jmOk');
                    okBtn.className = 'jm-ok' + (danger ? ' danger' : '');
                    okBtn.textContent = danger ? '确认清除' : '确认';
                    okBtn.onclick = () => {
                        _modalResolve = null;  // prevent closeJobModal from resolving false
                        closeJobModal();
                        resolve(true);
                    };
                    const mask = document.getElementById('jobModal');
                    mask.style.display = 'flex';
                    requestAnimationFrame(() => mask.classList.add('show'));
                });
            }
            window.closeJobModal = function() {
                const mask = document.getElementById('jobModal');
                mask.classList.remove('show');
                setTimeout(() => mask.style.display = 'none', 200);
                if (_modalResolve) { _modalResolve(false); _modalResolve = null; }
            };
            document.getElementById('jobModal').addEventListener('click', function(e) {
                if (e.target === this) closeJobModal();
            });

            /* ── Log rendering ── */
            function renderLogLine(text) {
                const div = document.createElement('div');
                div.className = 'job-log-line';
                const m = text.match(/^\[(\d{2}:\d{2}:\d{2})\]\s*(.*)$/);
                if (!m) { div.textContent = text; return div; }

                const ts = document.createElement('span');
                ts.className = 'time';
                ts.textContent = m[1] + ' ';
                div.appendChild(ts);

                const rest = m[2];
                if (rest.startsWith('[调度]')) {
                    const t = document.createElement('span');
                    t.className = 'sched';
                    t.textContent = rest;
                    div.appendChild(t);
                } else if (rest.match(/^\[\d+\/\d+\]/) && rest.includes('失败')) {
                    const t = document.createElement('span');
                    t.className = 'fail';
                    t.textContent = rest;
                    div.appendChild(t);
                } else if (rest.match(/^\[\d+\/\d+\]/)) {
                    const t = document.createElement('span');
                    t.className = 'ok';
                    t.textContent = rest;
                    div.appendChild(t);
                } else {
                    const t = document.createElement('span');
                    t.className = 'info';
                    t.textContent = rest;
                    div.appendChild(t);
                }
                return div;
            }

            function fetchLogs() {
                return api('job-logs?after=' + logOffset).then(data => {
                    if (!data.lines || data.lines.length === 0) return;
                    const el = document.getElementById('jobLog');
                    const empty = el.querySelector('.job-log-empty');
                    if (empty) empty.remove();
                    data.lines.forEach(line => {
                        if (line.trim()) el.appendChild(renderLogLine(line));
                    });
                    logOffset = data.total;
                    el.scrollTop = el.scrollHeight;
                }).catch(() => {});
            }

            /* ── Status ── */
            function updateUI(data) {
                document.getElementById('statTotal').textContent = data.total_images;
                document.getElementById('statProcessed').textContent = data.processed_images;
                document.getElementById('statPending').textContent = data.pending_images;
                document.getElementById('statTerms').textContent = data.total_terms;

                const running = data.is_running;
                const paused = data.is_paused;
                const batch = data.batch;

                document.getElementById('btnStart').disabled = running;
                document.getElementById('btnReprocess').disabled = running;
                document.getElementById('btnClear').disabled = running;
                document.getElementById('btnPause').disabled = !(running && !paused);
                document.getElementById('btnResume').disabled = !(running && paused);
                document.getElementById('btnStop').disabled = !running;
                document.getElementById('logLive').style.display = running ? '' : 'none';

                if (!batch) {
                    document.getElementById('progressSection').style.display = 'none';
                } else {
                    document.getElementById('progressSection').style.display = '';
                    const done = batch.processed + batch.failed;
                    const pct = batch.total > 0 ? Math.round(done / batch.total * 100) : 0;

                    const fill = document.getElementById('progressFill');
                    fill.style.width = pct + '%';
                    const st = (batch.status === 'running' && paused) ? 'paused' : (batch.status || 'running');
                    fill.className = 'job-progress-fill ' + st;

                    document.getElementById('progressText').textContent = pct + '%';
                    document.getElementById('progressDetail').textContent =
                        '已处理: ' + batch.processed + ' / ' + batch.total +
                        (batch.failed > 0 ? '  失败: ' + batch.failed : '');

                    // ETA
                    if (running && !paused && batch.processed > 0) {
                        if (_firstProcessed === null) {
                            _firstProcessed = batch.processed;
                            _firstProcessedTime = Date.now();
                        }
                        const delta = batch.processed - _firstProcessed;
                        if (delta > 0) {
                            const elapsedSec = (Date.now() - _firstProcessedTime) / 1000;
                            const rate = delta / elapsedSec;
                            const remaining = (batch.total - done) / rate;
                            const mins = Math.ceil(remaining / 60);
                            document.getElementById('progressEta').textContent =
                                '预计剩余 ' + (mins >= 60 ? Math.round(mins/60) + 'h ' + (mins%60) + 'min' : mins + 'min');
                        }
                    } else if (!running) {
                        _firstProcessed = null;
                        _firstProcessedTime = null;
                        if (batch.updated_at) {
                            document.getElementById('progressEta').textContent =
                                new Date(batch.updated_at).toLocaleTimeString('zh-CN', {hour12: false});
                        }
                    }

                    // Badge
                    const badge = document.getElementById('statusBadge');
                    badge.className = 'job-status ' + st;
                    const map = {running:'运行中', paused:'已暂停', completed:'已完成', stopped:'已停止', idle:'空闲'};
                    badge.textContent = map[st] || st;
                }
            }

            /* ── Polling (chained setTimeout to avoid pile-up) ── */
            function startPolling() {
                if (polling) return;
                _firstProcessed = null;
                _firstProcessedTime = null;
                fetchStatus();
                fetchLogs();
                scheduleNext();
            }

            function scheduleNext() {
                polling = setTimeout(() => {
                    Promise.allSettled([fetchStatus(), fetchLogs()]).then(() => {
                        if (polling) scheduleNext();
                    });
                }, 1500);
            }

            function stopPolling() {
                if (!polling) return;
                clearTimeout(polling);
                polling = null;
                // Final fetch
                setTimeout(() => { fetchStatus(); fetchLogs(); }, 800);
            }

            function fetchStatus() {
                return api('job-status').then(data => {
                    updateUI(data);
                    if (!data.is_running && data.batch &&
                        (data.batch.status === 'completed' || data.batch.status === 'stopped')) {
                        stopPolling();
                    }
                }).catch(() => {});
            }

            /* ── Actions ── */
            window.startJob = async function(reprocess) {
                const label = reprocess ? '重新识别全部图片' : '识别未处理图片';
                const ok = await jobConfirm({
                    title: label,
                    msg: reprocess ? '将对所有图片重新进行识别，已有结果会被覆盖。' : '将对未识别的图片进行智能识别。',
                    icon: reprocess ? 'warn' : 'info'
                });
                if (!ok) return;
                post('job-start', { reprocess }).then(() => {
                    logOffset = 0;
                    const el = document.getElementById('jobLog');
                    while (el.firstChild) el.removeChild(el.firstChild);
                    startPolling();
                }).catch(e => {
                    localLog('启动失败: ' + (e.response?.data?.error || e.message));
                });
            };

            window.pauseJob = function() {
                post('job-pause').then(() => localLog('已发送暂停指令'))
                    .catch(e => localLog('失败: ' + (e.response?.data?.error || e.message)));
            };

            window.resumeJob = function() {
                post('job-resume').then(() => localLog('已发送继续指令'))
                    .catch(e => localLog('失败: ' + (e.response?.data?.error || e.message)));
            };

            window.stopJob = function() {
                post('job-stop').then(() => {
                    localLog('已发送停止指令');
                    setTimeout(() => { fetchStatus(); fetchLogs(); }, 1500);
                }).catch(e => localLog('失败: ' + (e.response?.data?.error || e.message)));
            };

            window.clearData = async function() {
                const ok = await jobConfirm({
                    title: '清除全部识别数据',
                    msg: '将删除所有识别记录和标签，此操作不可撤销。',
                    icon: 'danger', danger: true
                });
                if (!ok) return;
                post('job-clear').then(r => {
                    localLog('已清除 ' + r.cleared_records + ' 条记录, ' + r.cleared_terms + ' 个标签');
                    fetchStatus();
                }).catch(e => localLog('失败: ' + (e.response?.data?.error || e.message)));
            };

            function localLog(msg) {
                const el = document.getElementById('jobLog');
                const empty = el.querySelector('.job-log-empty');
                if (empty) empty.remove();
                const t = new Date().toLocaleTimeString('zh-CN', {hour12: false});
                el.appendChild(renderLogLine('[' + t + '] ' + msg));
                el.scrollTop = el.scrollHeight;
            }

            /* ── Schedule ── */
            const CRON_DESC = {
                '*/30 * * * *': '每 30 分钟执行一次',
                '0 * * * *': '每小时整点执行',
                '0 */2 * * *': '每 2 小时执行',
                '0 */6 * * *': '每 6 小时执行',
                '0 */12 * * *': '每 12 小时执行',
                '0 3 * * *': '每天凌晨 03:00 执行',
                '0 3 * * 1': '每周一凌晨 03:00 执行',
            };

            function describeCron(expr) {
                if (CRON_DESC[expr]) return CRON_DESC[expr];
                const p = expr.trim().split(/\s+/);
                if (p.length !== 5) return '表达式格式错误 (需要 5 个字段)';
                const [min, hr, dom, mon, dow] = p;
                let desc = '';
                if (min === '*' && hr === '*') desc = '每分钟';
                else if (min.startsWith('*/')) desc = '每 ' + min.slice(2) + ' 分钟';
                else if (hr.startsWith('*/') && min === '0') desc = '每 ' + hr.slice(2) + ' 小时';
                else if (hr !== '*' && min !== '*' && dom === '*' && mon === '*' && dow === '*')
                    desc = '每天 ' + hr.padStart(2,'0') + ':' + min.padStart(2,'0');
                else if (hr !== '*' && min !== '*' && dow !== '*')
                    desc = '每周' + ['日','一','二','三','四','五','六'][+dow] + ' ' + hr.padStart(2,'0') + ':' + min.padStart(2,'0');
                else desc = 'Cron: ' + expr;
                return desc;
            }

            function updateCronUI() {
                const expr = document.getElementById('schedCron').value.trim();
                document.getElementById('cronDesc').textContent = describeCron(expr);
                // Highlight matching preset
                document.querySelectorAll('.job-cron-preset').forEach(btn => {
                    btn.classList.toggle('active', btn.dataset.cron === expr);
                });
            }

            document.getElementById('schedCron').addEventListener('input', updateCronUI);

            document.querySelectorAll('.job-cron-preset').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.getElementById('schedCron').value = btn.dataset.cron;
                    updateCronUI();
                });
            });

            window.saveSchedule = function() {
                const enabled = document.getElementById('schedEnabled').checked;
                const cron = document.getElementById('schedCron').value.trim();
                if (cron.split(/\s+/).length !== 5) {
                    localLog('Cron 表达式格式错误，需要 5 个字段 (分 时 日 月 周)');
                    return;
                }
                post('job-schedule', { enabled, cron }).then(r => {
                    localLog(r.message + ' (cron: ' + cron + ')');
                    loadSchedule();
                }).catch(e => localLog('失败: ' + (e.response?.data?.error || e.message)));
            };

            function loadSchedule() {
                api('job-schedule').then(data => {
                    document.getElementById('schedEnabled').checked = data.enabled;
                    document.getElementById('schedCron').value = data.cron || '0 */6 * * *';
                    updateCronUI();

                    document.getElementById('schedOnOff').textContent = data.enabled ? '已启用' : '未启用';
                    document.getElementById('schedOnOff').style.color = data.enabled ? 'var(--adv-primary, #4a6cf7)' : '';

                    // Meta info
                    const meta = document.getElementById('schedMeta');
                    while (meta.firstChild) meta.removeChild(meta.firstChild);

                    // Daemon status
                    const ds = document.createElement('span');
                    const dot = document.createElement('span');
                    dot.className = 'job-dot ' + (data.scheduler_alive ? 'alive' : 'dead');
                    ds.appendChild(dot);
                    ds.appendChild(document.createTextNode(' 守护进程: ' + (data.scheduler_alive ? '运行中' : '未启动')));
                    meta.appendChild(ds);

                    if (data.last_run_at) {
                        const lr = document.createElement('span');
                        lr.textContent = '上次运行: ' + new Date(data.last_run_at).toLocaleString('zh-CN', {hour12: false});
                        meta.appendChild(lr);
                    }
                    if (data.next_run_at && data.enabled) {
                        const nr = document.createElement('span');
                        nr.textContent = '下次运行: ' + new Date(data.next_run_at).toLocaleString('zh-CN', {hour12: false});
                        meta.appendChild(nr);
                    }
                }).catch(() => {});
            }

            /* ── Init ── */
            fetchLogs();
            loadSchedule();
            // Load status and auto-start polling if job is running
            api('job-status').then(data => {
                updateUI(data);
                if (data.is_running) startPolling();
            });
        })();
        </script>
        @endpush
    </x-advanced-shell>
</x-app-layout>
