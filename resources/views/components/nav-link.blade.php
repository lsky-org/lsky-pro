@props(['active'])

@php
$classes = "menu-entry" . (($active ?? false) ? ' active' : '');
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon }}
    <span class="menu-name">{{ $name }}</span>
</a>
