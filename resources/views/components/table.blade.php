<div class="flex flex-col">
    <div class="-my-2 sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
            <div class="overflow-x-auto sm:rounded-lg bg-white w-full shadow-custom">
                <table class="min-w-full w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                {{ $column }}
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    {{ $slot }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
