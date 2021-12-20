<?php $attributes = $attributes->exceptProps(['full' => request()->routeIs('images')]); ?>
<?php foreach (array_filter((['full' => request()->routeIs('images')]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => $full ? 'mx-auto sm:ml-64' : 'mx-auto sm:ml-64 px-6 md:px-10 lg:px-10 xl:px-10 2xl:px-60'])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/components/container.blade.php ENDPATH**/ ?>