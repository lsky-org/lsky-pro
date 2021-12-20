<?php $attributes = $attributes->exceptProps(['value']); ?>
<?php foreach (array_filter((['value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label <?php echo e($attributes->merge(['class' => 'block font-medium text-sm text-gray-700'])); ?>>
    <?php echo e($value ?? $slot); ?>

</label>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/components/label.blade.php ENDPATH**/ ?>