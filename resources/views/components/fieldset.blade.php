<fieldset>
    <legend class="text-base font-medium text-gray-900">{{ $title }}</legend>
    @isset($faq)
        <p class="text-sm text-gray-500">{!! $faq !!}</p>
    @endisset
    <div class="flex flex-wrap mt-4">
        {{ $slot }}
    </div>
</fieldset>
