@props(['full' => request()->routeIs('images')])

<div {{ $attributes->merge(['class' => $full ? 'mx-auto sm:ml-64' : 'mx-auto sm:ml-64 px-6 md:px-10 lg:px-10 xl:px-10 2xl:px-60']) }}>
    {{ $slot }}
</div>
