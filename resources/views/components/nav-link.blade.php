@props(['active'])

@php
$classes = "space-x-3 px-4 h-10 w-full flex items-center hover:bg-gray-100 text-slate-600 text-sm rounded-md" . (($active ?? false) ? ' bg-gray-100' : '');
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon }}
    <span class="tracking-widest">{{ $name }}</span>
</a>
