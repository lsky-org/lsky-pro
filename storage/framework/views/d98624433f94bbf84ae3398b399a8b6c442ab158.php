<header class="transition-all duration-300 w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9]">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.container','data' => ['class' => 'w-full px-6 flex justify-between items-center']]); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full px-6 flex justify-between items-center']); ?>
        <div class="flex justify-start items-center max-w-[70%]">
            <a href="javascript:void(0)" @click="sidebarOpened = ! sidebarOpened" class="w-6 h-6 p-4 rounded-full sm:hidden -ml-1 mr-4 flex justify-center items-center">
                <i class="fas fa-bars text-xl"></i>
            </a>
            <a href="" class="text-xl truncate"><?php echo $__env->yieldContent('title', 'Lsky Pro'); ?></a>
        </div>
        <div class="flex justify-end items-center">
            <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</header>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/layouts/header.blade.php ENDPATH**/ ?>