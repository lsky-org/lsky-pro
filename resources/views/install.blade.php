<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="relative min-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lsky Pro 安装程序</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen text-gray-900 bg-gray-100">
    <div class="min-h-screen flex justify-center items-center px-6 py-10 md:py-20">
        <div class="md:w-[600px]">
            <h1 class="text-gray-700 text-3xl">Install Lsky Pro</h1>
            <div id="checking" class="mt-4 p-6 rounded-md bg-white w-full">
                <p class="text-md mb-4 block text-center">Step 1 > 运行环境检测</p>

                <div class="relative rounded-md bg-white overflow-hidden space-y-4 max-h-[500px] overflow-y-auto">
                    @foreach($extensions as $extension)
                        <dl>
                            <div class="rounded-md bg-gray-50 px-3 py-3 flex items-center justify-between">
                                <dt class="w-[95%] text-md font-medium text-gray-700 {{ ! $extension['result'] ? 'text-red-500' : '' }}">
                                    {{ $extension['name'] }}
                                    <p class="mt-2 text-sm text-gary-400">{{ $extension['intro'] }}</p>
                                </dt>
                                <dd class="mt-1 text-md text-gray-900 truncate">
                                    @if($extension['result'])
                                        <i class="fas fa-check text-green-500"></i>
                                    @else
                                        <i class="fas text-lg fa-times text-red-500"></i>
                                    @endif
                                </dd>
                            </div>
                        </dl>
                    @endforeach
                </div>

                <div class="mt-6 text-sm text-gray-500">
                    <p><i class="fas fa-exclamation-circle"></i> 请确保<b>数据库版本</b>达到要求。</p>
                    <p><i class="fas fa-exclamation-circle"></i> 请确保程序<b>目录、文件的权限</b>设置正确。</p>
                    <p><i class="fas fa-exclamation-circle"></i> 出现安装拓展、启用函数后未生效，请尝试<b>重启 PHP</b>。</p>
                </div>

                <div class="mt-6 text-right">
                    @if($status)
                        <a href="javascript:void(0)" id="next" class="rounded-md px-4 py-2 bg-blue-500 text-white">下一步</a>
                    @else
                        <span class="rounded-md px-4 py-2 bg-gray-400 text-white" disabled>检测未通过</span>
                    @endif
                </div>
            </div>

            <div id="installing" class="mt-4 p-6 rounded-md bg-white w-full hidden">
                <p class="text-md mb-4 block text-center">Step 2 > 配置数据库和管理员账号</p>

                <form class="w-full" method="post">
                    <div class="px-3 py-4 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="connection" class="block text-sm font-medium text-gray-700">数据库类型</label>
                                <x-select id="connection" name="connection">
                                    <option value="mysql">MySQL 5.7+</option>
                                    <option value="pgsql">PostgreSQL 9.6+</option>
                                    <option value="sqlite">SQLite 3.8.8+</option>
                                    <option value="sqlsrv">SQL Server 2017+</option>
                                </x-select>
                                <p class="mt-2 text-sm text-red-500 hidden"></p>
                            </div>
                            <div class="col-span-6">
                                <label for="host" class="block text-sm font-medium text-gray-700">数据库连接地址</label>
                                <x-input type="text" name="host" id="host" placeholder="请输入数据库连接地址" value="127.0.0.1"/>
                            </div>
                            <div class="col-span-6">
                                <label for="port" class="block text-sm font-medium text-gray-700">数据库连接端口</label>
                                <x-input type="number" name="port" id="port" placeholder="请输入数据库连接端口" value="3306"/>
                            </div>
                            <div class="col-span-6">
                                <label for="database" class="block text-sm font-medium text-gray-700">数据库名称/路径</label>
                                <x-input type="text" name="database" id="database" placeholder="请输入数据库名称/路径" value=""/>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="username" class="block text-sm font-medium text-gray-700">数据库用户名</label>
                                <x-input type="text" name="username" id="username" placeholder="请输入数据库用户名" value="root"/>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">数据库密码</label>
                                <x-input type="password" name="password" id="password" placeholder="请输入数据库密码" value="root"/>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700"><span class="text-red-500">*</span>管理员账号邮箱</label>
                                <x-input type="email" name="account[email]" id="email" placeholder="请输入管理员账号邮箱"/>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="admin-password" class="block text-sm font-medium text-gray-700"><span class="text-red-500">*</span>管理员账号密码</label>
                                <x-input type="password" name="account[password]" id="admin-password" placeholder="请输入管理员账号密码"/>
                            </div>
                        </div>
                    </div>
                </form>

                <p id="response" class="rounded-md text-red-500 bg-slate-700 p-4 hidden overflow-auto"></p>

                <div class="mt-6 text-right">
                    <a href="javascript:void(0)" id="install" class="rounded-md px-4 py-2 bg-blue-500 text-white">立即安装</a>
                </div>
            </div>

            <div id="success" class="mt-4 p-6 rounded-md bg-white w-full hidden">
                <i class="fas fa-check-circle text-5xl text-teal-500"></i>
                <p class="mt-4 text-lg">程序安装完成。</p>
                <div class="mt-3 space-y-1 text-gray-600">
                    <p>你可以点击 <a class="text-green-500" href="{{ route('/') }}">这里</a> 去首页。</p>
                    <p>更多帮助请访问 <a class="text-green-500" href="https://www.lsky.pro" target="_blank">https://www.lsky.pro</a>。</p>
                    <p>使用过程中出现任何问题请务必阅读 <a class="text-green-500" href="https://docs.lsky.pro" target="_blank">官方文档</a>。</p>
                    <p>如果你觉得兰空图床给你带来帮助，不妨请我喝一杯咖啡☕️  <a class="text-green-500" href="https://github.com/wisp-x/lsky-pro#-%E6%8D%90%E8%B5%A0" target="_blank">去打赏</a>。</p>
                    <p>这个页面将在下次访问时返回 404 错误，如果你想要重新安装，请删除程序根目录中的 installed.lock 文件，然后重新访问首页。</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $('#next').click(function () {
        $('#checking').remove();
        $('#installing').removeClass('hidden');
    });

    $('#connection').change(function () {
        let selector = '#host, #port, #username, #password';
        $(selector).parent().show();
        let message = '';
        switch ($(this).val()) {
            case 'pgsql':
                break;
            case 'sqlite':
                message = 'SQLite 数据库本质上只是一个存在你文件系统上的文件，下面的数据库路径如果为空，程序将会自动在根目录 database 文件夹中创建 database.sqlite 文件，否则请填写该数据库文件的绝对路径。';
                $(selector).parent().hide();
                break;
            case 'sqlsrv':
                message = '在使用 SQL Server 数据库前，你需要先确保你已安装并启用了 sqlsrv 和 pdo_sqlsrv PHP 扩展以及它们所需要的依赖项，例如 Microsoft SQL ODBC 驱动。';
                break;
            default:
        }
        if (message) {
            $(this).siblings('p').text(message).removeClass('hidden');
        } else {
            $(this).siblings('p').text(message).addClass('hidden');
        }
    });

    $('#install').click(function () {
        if ($(this).attr('disabled')) {
            return;
        }
        $(this).attr('disabled', true).removeClass('bg-blue-500').addClass('cursor-not-allowed bg-gray-400').text('执行安装中...')
        $('#response').html('').addClass('hidden');
        axios.post('{{ route('install') }}', $('#installing form').serialize()).then(response => {
            $('#response').addClass('hidden')
            if (response.data.status) {
                $('#installing').hide();
                $('#success').show();
            } else {
                $('#response').html(response.data.message + ' ' +(response.data.data.response || '')).removeClass('hidden');
            }
        }).finally(() => {
            $(this).attr('disabled', false).removeClass('cursor-not-allowed bg-gray-400').addClass('bg-blue-500').text('立即安装')
        });
    });
</script>
</html>
