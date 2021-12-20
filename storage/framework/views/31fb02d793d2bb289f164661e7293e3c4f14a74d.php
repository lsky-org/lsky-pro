<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="keywords" content="Lsky Pro"/>
        <meta name="description" content="Lsky Pro, Your photo album on the cloud."/>

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.css')); ?>">
        <?php echo $__env->yieldPushContent('styles'); ?>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" x-data="{sidebarOpened: false}" x-cloak>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div
                x-transition:enter="ease-in-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-500"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                 class="z-[9] bg-black bg-opacity-75 transition-opacity h-full w-full fixed inset-0 sm:hidden"
                 x-show="sidebarOpened"
                 @click.outside="sidebarOpened = false"
                 @close.stop="sidebarOpened = false"
                 @click="sidebarOpened = ! sidebarOpened"
                 style="display: none"
            >

            </div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.container','data' => ['class' => 'transition-all duration-300 pt-20 md:pt-24 pb-6']]); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'transition-all duration-300 pt-20 md:pt-24 pb-6']); ?>
                <?php echo e($slot); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </body>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</html>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/layouts/app.blade.php ENDPATH**/ ?>