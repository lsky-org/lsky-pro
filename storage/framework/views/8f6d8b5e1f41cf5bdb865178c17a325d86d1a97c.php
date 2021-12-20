<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-14">
        <header class="w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9]">
            <div class="container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 flex justify-between items-center">
                <div class="flex justify-start items-center max-w-[70%]">
                    <a href="<?php echo e(route('/')); ?>" class="text-white text-xl truncate">Lsky Pro</a>
                </div>
                <div class="flex justify-end items-center space-x-3">
                    <?php if(Auth::check()): ?>
                        <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-gray-300 hover:bg-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">登录</a>
                        <a href="<?php echo e(route('register')); ?>" class="text-gray-300 hover:bg-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">注册</a>
                    <?php endif; ?>
                </div>
            </div>
        </header>
        <div class="mt-10 container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.upload','data' => []]); ?>
<?php $component->withName('upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <footer class="absolute bottom-0 left-0 right-0 w-full bg-gray-200">
            <p class="container mx-auto py-2 px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 flex items-center text-gray-500 text-sm">
                Copyright © 2018 - present Lsky Pro. All rights reserved. 请勿上传违反中国大陆和香港法律的图片，违者后果自负。
            </p>
        </footer>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/welcome.blade.php ENDPATH**/ ?>