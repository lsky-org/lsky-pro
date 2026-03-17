@section('title', '管理控制台')

<x-app-layout>
    <div class="lsky-page">
        <div class="page-stack">
            <div class="grid-4">
                <div class="stat-card">
                    <div class="stat-label">图片总量</div>
                    <div class="stat-value">{{ \App\Utils::shortenNumber($adminConsole['overview']['images']) }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">相册总量</div>
                    <div class="stat-value">{{ \App\Utils::shortenNumber($adminConsole['overview']['albums']) }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">用户总量</div>
                    <div class="stat-value">{{ \App\Utils::shortenNumber($adminConsole['overview']['users']) }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">占用存储</div>
                    <div class="stat-value" style="font-size:20px">{{ \App\Utils::formatSize($adminConsole['overview']['storage'] * 1024) }}</div>
                </div>
            </div>

            <div class="grid-4">
                <div class="info-card">
                    <div class="info-label">今日上传</div>
                    <div class="info-value">{{ \App\Utils::shortenNumber($adminConsole['numbers']['today']) }}</div>
                </div>
                <div class="info-card">
                    <div class="info-label">昨日上传</div>
                    <div class="info-value">{{ \App\Utils::shortenNumber($adminConsole['numbers']['yesterday']) }}</div>
                </div>
                <div class="info-card">
                    <div class="info-label">本周上传</div>
                    <div class="info-value">{{ \App\Utils::shortenNumber($adminConsole['numbers']['week']) }}</div>
                </div>
                <div class="info-card">
                    <div class="info-label">本月上传</div>
                    <div class="info-value">{{ \App\Utils::shortenNumber($adminConsole['numbers']['month']) }}</div>
                </div>
            </div>

            <section class="panel">
                <div class="panel-head">
                    <div>
                        <h3 class="panel-title">近30天趋势</h3>
                        <div class="panel-sub">图片上传与新用户注册</div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="admin-console-chart" class="chart-wrap"></div>
                </div>
            </section>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/echarts/echarts.min.js') }}"></script>
        <script>
            (function () {
                const chartDom = document.getElementById('admin-console-chart');
                if (!chartDom || typeof echarts === 'undefined') return;
                const chart = echarts.init(chartDom);
                chart.setOption({
                    tooltip: {trigger: 'axis'},
                    legend: {
                        type: 'scroll',
                        data: @json($adminConsole['fields']),
                    },
                    grid: {
                        left: '3%',
                        right: '3%',
                        bottom: '3%',
                        containLabel: true,
                    },
                    xAxis: {
                        type: 'category',
                        boundaryGap: false,
                        data: @json($adminConsole['dates']),
                    },
                    yAxis: {
                        type: 'value',
                        minInterval: 1,
                    },
                    series: @json($adminConsole['datasets']),
                });
                window.addEventListener('resize', function () {
                    chart.resize();
                });
            })();
        </script>
    @endpush
</x-app-layout>
