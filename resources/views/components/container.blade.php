@props(['full' => request()->routeIs('images', 'gallery', 'admin.images')])

<div {{ $attributes->merge(['class' => $full ? 'h-full mx-auto sm:ml-64' : 'h-full mx-auto sm:ml-64 px-6 md:px-10 lg:px-10 xl:px-10 2xl:px-60']) }}>
    {{ $slot }}
</div>
