<?php $attributes = $attributes->exceptProps(['message' => '暂无数据']); ?>
<?php foreach (array_filter((['message' => '暂无数据']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex flex-col justify-center items-center py-10 space-y-2 text-gray-300">
    <i class="fas fa-inbox text-5xl"></i>
    <p class="text-md"><?php echo e($message); ?></p>
</div>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/components/no-data.blade.php ENDPATH**/ ?>