<?php $attributes = $attributes->exceptProps(['status']); ?>
<?php foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($status): ?>
    <div <?php echo e($attributes->merge(['class' => 'font-medium text-sm text-green-600'])); ?>>
        <?php echo e($status); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/components/auth-session-status.blade.php ENDPATH**/ ?>