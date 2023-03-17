@section('title', '创建储存策略')

<x-app-layout>
    <div class="my-6 md:my-9">
        @include('admin.strategy.tips')

        <div class="md:mt-0 md:col-span-2">
            <form action="{{ route('admin.strategy.create') }}" method="POST">
                <div class="overflow-hidden rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6 space-y-4 shadow-custom">
                        <div class="col-span-6">
                            <label class="block">
                                <span class="text-gray-700">选择角色组</span>
                                <x-select name="groups[]" class="block w-full mt-1 form-multiselect" multiple>
                                    @foreach(\App\Models\Group::query()->get() as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                </x-select>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>名称</label>
                            <x-input type="text" name="name" id="name" placeholder="请输入策略名称" autocomplete="name" />
                        </div>

                        <div class="col-span-6">
                            <label for="intro" class="block text-sm font-medium text-gray-700">简介</label>
                            <x-textarea id="intro" name="intro" rows="3" placeholder="请输入简介，可为空"></x-textarea>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="key" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存策略</label>
                            <x-select id="key" name="key" autocomplete="key" required>
                                @foreach(\App\Models\Strategy::DRIVERS as $key => $driver)
                                <option value="{{ $key }}" {{ $loop->first ? 'selected' : '' }}>{{ $driver }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Local }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问网址</label>
                                <x-input type="text" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名，需要加 http(s)://" />
                                <small class="text-orange-500"><i class="fas fa-exclamation"></i>
                                    本地储存的访问网址必须有根路径，例如：https://www.lsky.pro/uploads 中的 uploads 就是根路径，且根路径不能和其他策略重复。修改根路径直接影响已经上传并已使用的链接的访问。
                                </small>
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-6">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[root]" class="block text-sm font-medium text-gray-700">储存路径</label>
                                    <x-input type="text" name="configs[root]" id="configs[root]" autocomplete="text" placeholder="图片保存位置，默认：{{ config('filesystems.disks.uploads.root') }}" />
                                    <small class="text-orange-500"><i class="fas fa-exclamation"></i> 储存路径为绝对路径，设置错误或没有读写权限可能会导致图片保存失败。如果储存路径与其他策略相同，那么请注意使用角色组的路径命名规则、文件命名规则来区分不同文件夹，否则可能会因为名称重复而导致图片物理文件被覆盖。</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::S3 }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeyId</label>
                                <x-input type="text" name="configs[access_key_id]" id="configs[access_key_id]" placeholder="请输入 AccessKeyId" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_access_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretAccessKey</label>
                                <x-input type="password" name="configs[secret_access_key]" id="configs[secret_access_key]" placeholder="请输入 SecretAccessKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[endpoint]" class="block text-sm font-medium text-gray-700">连接地址</label>
                                <x-input type="url" name="configs[endpoint]" id="configs[endpoint]" placeholder="请输入连接地址" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[region]" class="block text-sm font-medium text-gray-700">区域(region)</label>
                                <x-input type="text" name="configs[region]" id="configs[region]" placeholder="请输入区域，例如：us-east-1" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存桶名称</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入储存桶名称" />
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Oss }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeyId</label>
                                <x-input type="text" name="configs[access_key_id]" id="configs[access_key_id]" placeholder="请输入 AccessKeyId" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key_secret]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeySecret</label>
                                <x-input type="password" name="configs[access_key_secret]" id="configs[access_key_secret]" placeholder="请输入 AccessKeySecret" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[endpoint]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>地域节点(Endpoint)</label>
                                <x-input type="text" name="configs[endpoint]" id="configs[endpoint]" placeholder="请输入所属地域节点，例如：oss-cn-beijing.aliyuncs.com" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>Bucket 名称</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入 Bucket 名称" />
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Cos }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[app_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AppId</label>
                                <x-input type="text" name="configs[app_id]" id="configs[app_id]" placeholder="请输入 AppId" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretId</label>
                                <x-input type="text" name="configs[secret_id]" id="configs[secret_id]" placeholder="请输入 SecretId" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretKey</label>
                                <x-input type="password" name="configs[secret_key]" id="configs[secret_key]" placeholder="请输入 SecretKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[region]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>所属地域</label>
                                <x-input type="text" name="configs[region]" id="configs[region]" placeholder="请输入所属地域，例如：ap-chengdu" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存桶名称</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入储存桶名称" />
                                <small class="text-gray-500"><i class="fas fa-exclamation-circle"></i> 腾讯云储存桶名称由 名称+appid 组合，例如：test-125146xxxx，此处应该填写 test</small>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Kodo }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKey</label>
                                <x-input type="text" name="configs[access_key]" id="configs[access_key]" placeholder="请输入 AccessKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretKey</label>
                                <x-input type="password" name="configs[secret_key]" id="configs[secret_key]" placeholder="请输入 SecretKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>Bucket</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入 Bucket" />
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Uss }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[service]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>服务名称</label>
                                <x-input type="text" name="configs[service]" id="configs[service]" placeholder="请输入服务名称" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[operator]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>操作员名称</label>
                                <x-input type="text" name="configs[operator]" id="configs[operator]" placeholder="请输入操作员名称" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[password]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>操作员密码</label>
                                <x-input type="password" name="configs[password]" id="configs[password]" placeholder="请输入操作员密码" />
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Sftp }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-6 sm:col-span-3 mb-4">
                                <label for="configs[root]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>根目录</label>
                                <x-input type="text" name="configs[root]" id="configs[root]" autocomplete="text" placeholder="请输入根目录路径" value="/" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[host]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>主机地址</label>
                                <x-input type="text" name="configs[host]" id="configs[host]" placeholder="请输入主机地址，例如：127.0.0.1" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[port]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>连接端口</label>
                                <x-input type="number" name="configs[port]" id="configs[port]" placeholder="请输入连接端口" value="22" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[username]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>用户名</label>
                                <x-input type="text" name="configs[username]" id="configs[username]" placeholder="请输入用户名" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[password]" class="block text-sm font-medium text-gray-700"><span class="text-yellow-500">*</span>密码</label>
                                <x-input type="password" name="configs[password]" id="configs[password]" placeholder="如果使用私钥连接，可为空" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[private_key]" class="block text-sm font-medium text-gray-700"><span class="text-yellow-500">*</span>私钥</label>
                                <x-textarea name="configs[private_key]" id="configs[private_key]" placeholder="输入私钥文本内容，如果使用密码连接，可为空"></x-textarea>
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[passphrase]" class="block text-sm font-medium text-gray-700">私钥口令</label>
                                <x-input type="password" name="configs[passphrase]" id="configs[passphrase]" placeholder="如果未设置私钥或私钥未设置口令，可为空" />
                            </div>
                            <div class="col-span-6">
                                <label for="configs[use_agent]" class="block text-sm font-medium mb-2 text-gray-700">是否使用代理</label>
                                <x-switch id="configs[use_agent]" name="configs[use_agent]" value="1"></x-switch>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Ftp }}">
                            @if(! extension_loaded('ftp'))
                                <p class="bg-yellow-500 p-2 mb-4 rounded text-sm text-white">
                                    <i class="fas fa-exclamation-circle"></i> 系统检测到 ftp 拓展未启用，可能无法正常使用 FTP 储存方式。
                                </p>
                            @endif
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-6 sm:col-span-3 mb-4">
                                <label for="configs[root]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>根目录</label>
                                <x-input type="text" name="configs[root]" id="configs[root]" autocomplete="text" placeholder="请输入根目录路径" value="/" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[host]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>主机地址</label>
                                <x-input type="text" name="configs[host]" id="configs[host]" placeholder="请输入主机地址，例如：127.0.0.1" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[port]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>连接端口</label>
                                <x-input type="number" name="configs[port]" id="configs[port]" placeholder="请输入连接端口 21/20" value="20" />
                                <small class="text-gray-500"><i class="fas fa-exclamation-circle"></i> 通常情况下，FTP 的被动模式连接端口为 21，主动模式为 20</small>
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[username]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>用户名</label>
                                <x-input type="text" name="configs[username]" id="configs[username]" placeholder="请输入用户名" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[password]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>密码</label>
                                <x-input type="password" name="configs[password]" id="configs[password]" placeholder="请输入密码" />
                            </div>
                            <div class="col-span-6">
                                <label for="configs[ssl]" class="block text-sm font-medium mb-2 text-gray-700">加密连接</label>
                                <x-switch id="configs[ssl]" name="configs[ssl]" value="1"></x-switch>
                            </div>
                            <div class="col-span-6">
                                <label for="configs[passive]" class="block text-sm font-medium my-2 text-gray-700">被动模式</label>
                                <x-switch id="configs[passive]" name="configs[passive]" value="1"></x-switch>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Webdav }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[base_uri]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>连接地址</label>
                                <x-input type="url" name="configs[base_uri]" id="configs[base_uri]" placeholder="请输入连接地址" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="webdav-configs[auth_type]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>认证方式</label>
                                <x-select id="webdav-auth-type" name="configs[auth_type]" select2>
                                    @foreach(\App\Models\Strategy::WEBDAV_AUTH_TYPES as $key => $type)
                                        <option value="{{ $key }}" {{ $loop->first ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="webdav-configs[prefix]" class="block text-sm font-medium text-gray-700">路径前缀</label>
                                <x-input type="text" name="configs[prefix]" id="webdav-configs[prefix]" placeholder="请输入路径前缀"></x-input>
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[username]" class="block text-sm font-medium text-gray-700">用户名</label>
                                <x-input type="text" name="configs[username]" id="configs[username]" placeholder="请输入用户名" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[password]" class="block text-sm font-medium text-gray-700">密码</label>
                                <x-input type="password" name="configs[password]" id="configs[password]" placeholder="请输入密码" />
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Minio }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[queries]" class="block text-sm font-medium text-gray-700">URL Queries</label>
                                <x-input type="text" name="configs[queries]" id="configs[queries]" placeholder="请输入 url 额外参数" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKey</label>
                                <x-input type="text" name="configs[access_key]" id="configs[access_key]" placeholder="请输入 AccessKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretKey</label>
                                <x-input type="password" name="configs[secret_key]" id="configs[secret_key]" placeholder="请输入 SecretKey" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[endpoint]" class="block text-sm font-medium text-gray-700">连接地址</label>
                                <x-input type="url" name="configs[endpoint]" id="configs[endpoint]" placeholder="请输入连接地址" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[region]" class="block text-sm font-medium text-gray-700">区域(region)</label>
                                <x-input type="text" name="configs[region]" id="configs[region]" placeholder="请输入区域，例如：us-east-1" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>Bucket 名称</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入 Bucket 名称" />
                            </div>
                            <div class="col-span-6">
                                <label for="configs[bucket_endpoint]" class="block text-sm font-medium mb-2 text-gray-700">BucketEndpoint</label>
                                <x-switch id="configs[bucket_endpoint]" name="configs[bucket_endpoint]" value="1"></x-switch>
                                <p><small class="text-gray-500"><i class="fas fa-exclamation-circle"></i> 开启此选项后将会直接以「连接地址」作为数据交互传输域名，否则可能会以桶名称拼接域名(例如：http://桶名称.连接地址.com)</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-button type="button" class="bg-gray-500" onclick="history.go(-1)">取消</x-button>
                        <x-button>确认创建</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            // 设置选中驱动
            let setSelected = function () {
                $('[data-driver]').each(function () {
                    if ($('#key').val() == $(this).data('driver')) {
                        $(this).show().find('input').attr('disabled', false);
                    } else {
                        $(this).hide().find('input').attr('disabled', true);
                    }
                });
            };

            setSelected();

            $('#key').change(function () {
                setSelected();
            });

            $('form').submit(function (e) {
                e.preventDefault();
                axios.post(this.action, $(this).serialize()).then(response => {
                    if (response.data.status) {
                        toastr.success(response.data.message);
                        setTimeout(function () {
                            window.location.href = '{{ route('admin.strategies') }}';
                        }, 3000);
                    } else {
                        toastr.error(response.data.message);
                    }
                });
            });
        </script>
    @endpush

</x-app-layout>
