<x-media-carousel id-prefix="images-carousel" host-mode="panel" :show-crop-layer="true" :show-caption="false">
    <x-slot name="actions">
        <div class="images-carousel-action-group">
            <button type="button" id="images-carousel-edit" class="images-carousel-action"><i class="fas fa-crop-alt"></i>自由裁剪</button>
            <button type="button" id="images-carousel-crop-reset" class="images-carousel-action hidden"><i class="fas fa-sync"></i>重置</button>
            <button type="button" id="images-carousel-crop-square" class="images-carousel-action hidden">1:1</button>
            <button type="button" id="images-carousel-crop-landscape" class="images-carousel-action hidden">16:9</button>
            <button type="button" id="images-carousel-crop-portrait" class="images-carousel-action hidden">4:5</button>
        </div>
        <div class="images-carousel-action-group">
            <button type="button" id="images-carousel-rotate-left" class="images-carousel-action"><i class="fas fa-undo"></i>左旋90°</button>
            <button type="button" id="images-carousel-rotate-right" class="images-carousel-action"><i class="fas fa-redo"></i>右旋90°</button>
            <button type="button" id="images-carousel-flip-horizontal" class="images-carousel-action"><i class="fas fa-arrows-alt-h"></i>水平镜像</button>
            <button type="button" id="images-carousel-flip-vertical" class="images-carousel-action"><i class="fas fa-arrows-alt-v"></i>垂直镜像</button>
        </div>
        <div class="images-carousel-action-group">
            <button type="button" id="images-carousel-filter-clarity" class="images-carousel-action">清晰增强</button>
            <button type="button" id="images-carousel-filter-grayscale" class="images-carousel-action">黑白胶片</button>
            <button type="button" id="images-carousel-filter-soften" class="images-carousel-action">柔和降噪</button>
            <button type="button" id="images-carousel-watermark" class="images-carousel-action"><i class="fas fa-stamp"></i>文字水印</button>
            <button type="button" id="images-carousel-revert" class="images-carousel-action"><i class="fas fa-history"></i>还原原图</button>
        </div>
        <div class="images-carousel-action-group">
            <button type="button" id="images-carousel-crop-apply" class="images-carousel-action is-primary hidden"><i class="fas fa-check"></i>应用裁剪</button>
            <button type="button" id="images-carousel-crop-cancel" class="images-carousel-action hidden"><i class="fas fa-times"></i>取消裁剪</button>
        </div>
        <div class="images-carousel-action-group">
            <button type="button" id="images-carousel-ai" class="images-carousel-action"><i class="fas fa-magic"></i>AI提示词</button>
            <button type="button" id="images-carousel-rename" class="images-carousel-action"><i class="fas fa-pen"></i>重命名</button>
            <button type="button" id="images-carousel-delete" class="images-carousel-action is-danger"><i class="fas fa-trash"></i>删除</button>
        </div>
    </x-slot>
</x-media-carousel>
