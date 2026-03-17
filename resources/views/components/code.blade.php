<pre {{ $attributes->merge(['class' => 'my-2 bg-white rounded-md p-4 text-sm bg-gray-500 text-white overflow-x-auto']) }}>
{{ $slot ?? '' }}
</pre>
