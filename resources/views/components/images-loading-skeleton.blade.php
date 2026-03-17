@props([
    'id' => 'images-loading',
    'gridCount' => 24,
    'listCount' => 12,
    'show' => false,
])

<div id="{{ $id }}" class="images-loading {{ $show ? 'show' : 'hidden' }}">
    <div class="images-loading-grid">
        @for ($i = 0; $i < $gridCount; $i++)
            <div class="images-loading-card">
                <div class="images-loading-media"></div>
                <div class="images-loading-meta">
                    <div class="images-loading-line is-wide"></div>
                    <div class="images-loading-line is-mid"></div>
                </div>
            </div>
        @endfor
    </div>
    <div class="images-loading-list">
        @for ($i = 0; $i < $listCount; $i++)
            <div class="images-loading-list-row">
                <div class="images-loading-list-thumb"></div>
                <div class="images-loading-list-cell is-xs"></div>
                <div class="images-loading-list-cell is-lg"></div>
                <div class="images-loading-list-cell is-sm"></div>
                <div class="images-loading-list-cell is-xs"></div>
                <div class="images-loading-list-cell is-md"></div>
                <div class="images-loading-list-cell is-actions"></div>
            </div>
        @endfor
    </div>
</div>
