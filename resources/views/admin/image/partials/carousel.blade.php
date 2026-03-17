<x-media-carousel
    id-prefix="admin-carousel"
    root-class="admin-carousel"
    host-mode="panel"
    :show-status="false"
    :show-caption="false"
>
    <x-slot name="actions">
        <div class="images-carousel-action-group">
            <button type="button" class="images-carousel-action" id="admin-carousel-rename"><i class="fas fa-pen"></i>重命名</button>
            <button type="button" class="images-carousel-action is-danger" id="admin-carousel-delete"><i class="fas fa-trash"></i>删除</button>
        </div>
    </x-slot>
</x-media-carousel>
