<?php $__env->startSection('title', '我的图片'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/justified-gallery/justifiedGallery.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/viewer-js/viewer.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="fixed z-[2] top-14 left-0 right-0 bg-white border-solid border-b">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.container','data' => ['class' => 'px-2 flex justify-between items-center h-12']]); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'px-2 flex justify-between items-center h-12']); ?>
            <div class="hidden md:block">
                <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href=""><i class="fas fa-folder-open text-blue-500"></i> 新建相册</a>
            </div>
            <div class="block md:hidden">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['direction' => 'right']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['direction' => 'right']); ?>
                     <?php $__env->slot('trigger', null, []); ?> 
                        <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">选中项 <i class="fas fa-chevron-down text-blue-500"></i></a>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('/')).'']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('/')).'']); ?>移动到相册 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('/')).'']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('/')).'']); ?>标记为不健康 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('/')).'','class' => 'text-red-500']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('/')).'','class' => 'text-red-500']); ?>公开 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('/')).'','class' => 'text-red-500']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('/')).'','class' => 'text-red-500']); ?>删除 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="flex space-x-2 items-center">
                <input type="text" class="px-2.5 py-1.5 border-0 outline-none rounded bg-gray-100 text-sm transition-all duration-300 w-36 md:hover:w-52 md:focus:w-52" placeholder="输入关键字搜索...">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['direction' => 'left']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['direction' => 'left']); ?>
                     <?php $__env->slot('trigger', null, []); ?> 
                        <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">排序 <i class="fas fa-sort-alpha-up text-blue-500"></i></a>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'newest\'); open = false']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'newest\'); open = false']); ?>最新 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'earliest\'); open = false']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'earliest\'); open = false']); ?>最早 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'utmost\'); open = false']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'utmost\'); open = false']); ?>最大 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'least\'); open = false']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => 'javascript:void(0)','@click' => 'setOrderBy(\'least\'); open = false']); ?>最小 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    <div id="photos-grid" class="overflow-hidden mt-6 md:mt-2"></div>
    <div id="photos-loading" class="flex justify-center items-center pt-6 pb-6">
        <a href="javascript:void(0)" class="flex justify-center items-center text-sm text-gray-400 text-gray-700 cursor-not-allowed">加载中...</a>
    </div>

    <script type="text/html" id="photos-item">
        <a href="javascript:void(0)" class="relative transition-all rounded group outline outline-offset-2 outline-transparent hover:outline-blue-500">
            <div class="photo-mask absolute transition-all left-0 right-0 bottom-0 h-20 group-hover:h-full z-[1] bg-gradient-to-t from-black">
                <div class="photo-select absolute transition-all top-2 right-2 rounded-full overflow-hidden text-white text-lg bg-white border border-gray-500 cursor-pointer hidden group-hover:block">
                    <i class="fas fa-check-circle block"></i>
                </div>

                <div class="absolute left-2 bottom-2 text-white z-[2] w-[90%]">
                    <p class="text-sm truncate" title="__name__">__name__</p>
                    <p class="text-xs" title="__human_date__">__date__</p>
                </div>
            </div>
            <img alt="__name__" src="__url__">
        </a>
    </script>

    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('js/justified-gallery/jquery.justifiedGallery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/viewer-js/viewer.min.js')); ?>"></script>
        <script>
            const $photos = $("#photos-grid");
            const $loading = $("#photos-loading a");
            const viewer = new Viewer(document.getElementById('photos-grid'), {});
            let params = {
                page: 1,
                order: '',
            };
            let gridConfigs = {
                rowHeight : 180,
                margins: 10,
                captions: false,
                border: 10,
            };
            const getImages = () => {
                if (params.page !== 1 && $loading.hasClass('cursor-not-allowed')) {
                    return;
                }
                $.ajax({
                    url: '',
                    type: 'post',
                    data: params,
                    beforeSend: function () {
                        $loading.text('加载中...').addClass('text-gray-400 cursor-not-allowed');
                    },
                    success: function (response) {
                        if (! response.status) {
                            return toastr.error(response.message);
                        }

                        let images = response.data.images.data;
                        if (images.length <= 0 || response.data.last_page === params.page) {
                            $loading.text('我也是有底线的~').addClass('text-gray-400 cursor-not-allowed');
                            return;
                        }

                        let html = '';
                        for (const i in images) {
                            html += $('#photos-item').html()
                                .replace(/__name__/g, images[i].filename)
                                .replace(/__human_date__/g, images[i].human_date)
                                .replace(/__date__/g, images[i].date)
                                .replace(/__url__/g, images[i].url)
                        }

                        $photos.append(html).justifiedGallery('norewind');
                        viewer.update();

                        params.page++;
                        setTimeout(function () {
                            $loading.text('加载更多').removeClass('text-gray-400 cursor-not-allowed');
                        }, 500)
                    },
                });
            };

            const setOrderBy = function (sort) {
                params.page = 1;
                params.order = sort;
                $photos.html('').justifiedGallery('destroy').justifiedGallery(gridConfigs)
                getImages();
            };

            $('html').css('overflow-y', 'scroll')
            $photos.justifiedGallery(gridConfigs);
            $loading.click(() => getImages(params.page));

            $(window).scroll(function() {
                let scrollTop = $(this).scrollTop();
                let scrollHeight = $(document).height();
                let clientHeight = $(this).height();
                if(scrollTop + clientHeight >= scrollHeight - 50) {
                    getImages();
                }
            });

            setTimeout(() => getImages(), 500);

            $photos.on('click', '.photo-mask', function () {
                $(this).siblings('img').trigger('click');
            })

            $photos.on('click', '.photo-select', function (e) {
                e.stopPropagation();
                console.log(11)
            });
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/images.blade.php ENDPATH**/ ?>