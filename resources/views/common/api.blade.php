@section('title', '接口')

<x-app-layout>
    <div class="my-6 md:my-9">
        <p class="text-xl mb-2 text-gray-800 font-semibold">接口说明</p>
        <div class="space-y-4 bg-gray-50 p-3 rounded-md mb-5">
            <div>
                <p class="text-lg text-gray-700 font-semibold">接口URL</p>
                <x-code>{{ request()->getSchemeAndHttpHost() }}/api/v1</x-code>
                <p class="text-sm text-red-500">请求接口时，必须设置 header 标头 Accept: application/json。</p>
            </div>

            <div>
                <p class="text-lg text-gray-700 font-semibold">验证方式</p>
                <div class="my-2 text-sm bg-white rounded-md p-4 overflow-x-auto">
                    当前版本接口采用 「HTTP 基本验证」的方式验证授权，通过接口获取 token 后，通过设置请求 header 标头来验证请求，例如：
                    <b class="block my-2 text-gray-600 text-sm">"Authorization": "Bearer 1|1bJbwlqBfnggmOMEZqXT5XusaIwqiZjCDs7r1Ob5"</b>
                    <p class="text-sm">如果未设置 Authorization 的情况下请求上传接口，将被视为游客上传。</p>
                </div>
            </div>
        </div>

        <p class="text-xl mb-2 text-gray-800 font-semibold">图片相关</p>
        <div class="space-y-4 bg-gray-50 p-3 rounded-md mb-5">
            <div>
                <p class="text-lg text-gray-700 font-semibold">上传图片</p>
                <x-code><span class="text-green-500 select-none">POST </span>/upload</x-code>

                <div class="my-4 overflow-x-auto">
                    <p class="text-sm mb-2">Headers</p>
                    <table class="min-w-full">
                        <thead class="bg-gray-50 border">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                字段
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                类型
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                说明
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white border divide-y text-sm">
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap">Content-Type</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">需要设置为 multipart/form-data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="my-4 overflow-x-auto">
                    <p class="text-sm mb-2">请求参数</p>
                    <table class="min-w-full">
                        <thead class="bg-gray-50 border">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                字段
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                类型
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                说明
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white border divide-y text-sm">
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap">file</td>
                            <td class="px-3 py-2 whitespace-nowrap">File</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片文件</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="my-4 overflow-x-auto">
                    <p class="text-sm mb-2">返回参数</p>
                    <table class="min-w-full">
                        <thead class="bg-gray-50 border">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                字段
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                类型
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                说明
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white border divide-y text-sm">
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap">status</td>
                            <td class="px-3 py-2 whitespace-nowrap">Boolean</td>
                            <td class="px-3 py-2 whitespace-nowrap">状态，true 或 false</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap">message</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">描述信息</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap">data</td>
                            <td class="px-3 py-2 whitespace-nowrap">Object</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片数据</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">key</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片唯一密钥</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">name</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片名称</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">extension</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片拓展名</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">pathname</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片路径名</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">origin_name</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片原始名</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">size</td>
                            <td class="px-3 py-2 whitespace-nowrap">Float</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片大小，单位 KB</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">mimetype</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片类型</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">md5</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片 md5 值</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">sha1</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片 sha1 值</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-6">links</td>
                            <td class="px-3 py-2 whitespace-nowrap">Object</td>
                            <td class="px-3 py-2 whitespace-nowrap">链接</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">url</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">图片访问 url</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">html</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">-</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">bbcode</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">-</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">markdown</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">-</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">markdown_with_link</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">-</td>
                        </tr>
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap pl-10">thumbnail_url</td>
                            <td class="px-3 py-2 whitespace-nowrap">String</td>
                            <td class="px-3 py-2 whitespace-nowrap">缩略图 url</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
