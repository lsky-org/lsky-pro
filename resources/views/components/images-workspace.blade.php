@props([
    'idPrefix' => 'workspace',
    'rootClass' => 'images-v2',
    'showSidebar' => true,
    'sidebarTag' => 'aside',
    'mainTag' => 'div',
    'toolbarTag' => 'div',
    'stageId' => null,
    'stageClass' => '',
    'gridId' => null,
    'showPagination' => true,
])

@php
    $stageId = $stageId ?: $idPrefix . '-stage';
    $gridId = $gridId ?: $idPrefix . '-grid';
@endphp

<div class="{{ $rootClass }}">
    @if($showSidebar)
    <{{ $sidebarTag }} class="images-aside panel">
        {{ $sidebarHead ?? '' }}
        {{ $sidebarContent ?? '' }}
    </{{ $sidebarTag }}>
    @endif

    <{{ $mainTag }} class="images-main panel{{ isset($mainClass) ? ' '.$mainClass : '' }}" {!! isset($mainAttrs) ? $mainAttrs : '' !!}>
        {{ $toolbar ?? '' }}

        <div class="images-stage{{ $stageClass ? ' '.$stageClass : '' }}" id="{{ $stageId }}">
            <x-images-loading-skeleton :id="$idPrefix.'-loading'" />
            {{ $stageContent ?? '' }}
        </div>

        @if($showPagination)
        {{ $pagination ?? '' }}
        @endif

        {{ $carousel ?? '' }}
    </{{ $mainTag }}>
</div>

{{ $extraContent ?? '' }}
