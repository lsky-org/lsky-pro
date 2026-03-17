<x-modal id="rules-modal">
    <div id="modal-content">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    规则
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    说明
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{Y}</td>
                <td class="px-3 py-2 text-sm">年份(2022)</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{y}</td>
                <td class="px-3 py-2 text-sm">两位数年份(22)</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{m}</td>
                <td class="px-3 py-2 text-sm">月份(01)</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{d}</td>
                <td class="px-3 py-2 text-sm">当月的第几号(04)</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{timestamp}</td>
                <td class="px-3 py-2 text-sm">时间戳(秒)</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{uniqid}</td>
                <td class="px-3 py-2 text-sm">唯一字符串</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{md5}</td>
                <td class="px-3 py-2 text-sm">随机 md5 值</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{md5-16}</td>
                <td class="px-3 py-2 text-sm">16位随机 md5 值</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{str-random-16}</td>
                <td class="px-3 py-2 text-sm">16位随机字符串</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{str-random-10}</td>
                <td class="px-3 py-2 text-sm">10位随机字符串</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{filename}</td>
                <td class="px-3 py-2 text-sm">文件原始名称</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">{uid}</td>
                <td class="px-3 py-2 text-sm">用户 ID，游客为 0</td>
            </tr>
            </tbody>
        </table>
    </div>
</x-modal>

@push('scripts')
    <script>
        $('#rename-rules').click(function () {
            Alpine.store('modal').open('rules-modal')
        })
    </script>
@endpush
