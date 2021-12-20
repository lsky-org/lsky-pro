<?php $__env->startSection('title', '仪表盘'); ?>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="space-y-6 md:space-y-0 md:grid md:grid-cols-2 xl:grid-cols-4 md:gap-x-4 xl:gap-x-8 md:gap-y-4 xl:gap-y-8">
        <div class="flex bg-white rounded p-4 space-x-4">
            <i class="fas fa-images text-amber-500 text-5xl"></i>
            <div class="flex flex-col">
                <p class="text-gray-700 text-sm">图片数量</p>
                <p class="text-gray-800 font-semibold text-xl"><?php echo e($user->image_num); ?></p>
            </div>
        </div>
        <div class="flex bg-white rounded p-4 space-x-4">
            <i class="fas fa-hdd text-red-500 text-5xl"></i>
            <div class="flex flex-col">
                <p class="text-gray-700 text-sm">可用储存</p>
                <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize(($user->capacity - $user->images->sum('size')) * 1024)); ?></p>
            </div>
        </div>
        <div class="flex bg-white rounded p-4 space-x-4">
            <i class="fas fa-hdd text-green-500 text-5xl"></i>
            <div class="flex flex-col">
                <p class="text-gray-700 text-sm">使用储存</p>
                <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize($user->images->sum('size') * 1024)); ?></p>
            </div>
        </div>
        <div class="flex bg-white rounded p-4 space-x-4">
            <i class="fas fa-hdd text-emerald-500 text-5xl"></i>
            <div class="flex flex-col">
                <p class="text-gray-700 text-sm">总储存</p>
                <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize($user->capacity * 1024)); ?></p>
            </div>
        </div>
    </div>

    <div class="flex md:mt-8 flex-col-reverse md:flex-row space-y-6 md:space-y-0 md:space-x-4">
        <div class="w-full mt-4 md:mt-0">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.box','data' => []]); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 可使用的策略 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <?php if(! $strategies): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.no-data','data' => ['message' => '没有可用的策略，将使用系统默认配置。']]); ?>
<?php $component->withName('no-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => '没有可用的策略，将使用系统默认配置。']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php else: ?>
                        <div class="divide-y divide-solid">
                            <?php $__currentLoopData = $strategies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strategy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="w-full px-4 py-3">
                                    <p><?php echo e($strategy->name); ?></p>
                                    <span class="text-gray-700 text-sm"><?php echo e($strategy->intro); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <div class="flex flex-col md:w-[70%] xl:w-[40%] space-y-8">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.box','data' => []]); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 我的信息 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <div class="px-4 py-3 space-y-3">
                        <div class="flex">
                            <p class="basis-1/3">姓名</p>
                            <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->name); ?></p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/3">邮箱</p>
                            <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->email); ?></p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/3">注册时间</p>
                            <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->created_at); ?></p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/3">注册 IP</p>
                            <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->registered_ip); ?></p>
                        </div>
                        <?php if(! $user->email_verified_at): ?>
                        <p class="p-2 text-sm rounded bg-red-500 text-white">你的账号尚未激活，功能受限，请根据激活邮件指引激活账号，如果你没有收到邮件，请点击 <a href="" class="text-green-400">这里</a> 重新发送。</p>
                        <?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.box','data' => []]); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 角色组信息 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <div class="px-4 py-3 space-y-3">
                        <div class="flex">
                            <p class="basis-1/2">组名</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($user->group ? $user->group->name : '系统默认组'); ?></p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">最大文件大小</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e(\App\Utils::formatSize($configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024)); ?></p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">并发上传数量</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum)); ?> 张</p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">每分钟上传限制</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerMinute)); ?> 张</p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">每小时上传限制</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerHour)); ?> 张</p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">每天上传限制</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerDay)); ?> 张</p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">每周上传限制</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerWeek)); ?> 张</p>
                        </div>
                        <div class="flex">
                            <p class="basis-1/2">每月上传限制</p>
                            <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerMonth)); ?> 张</p>
                        </div>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/dashboard.blade.php ENDPATH**/ ?>