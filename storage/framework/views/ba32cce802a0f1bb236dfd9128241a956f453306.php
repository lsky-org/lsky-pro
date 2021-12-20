<nav class="bg-white border-b border-gray-100">
    <div class="mx-auto px-4 sm:px-4 lg:px-4">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex space-x-4 items-center">
                    <button type="button" class="flex justify-center items-center w-10 h-10 hover:bg-gray-100 transition duration-400 rounded-full text-xl" @click="open = !open">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a class="text-2xl font-bold text-gray-700" href="<?php echo e(route('dashboard')); ?>">Lsky Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div x-show.transition="open">
    这段内容会在过渡中滑入/滑出。
</div>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/layouts/navigation.blade.php ENDPATH**/ ?>