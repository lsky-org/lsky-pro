<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$classes = "space-x-3 px-4 h-10 w-full flex items-center hover:bg-gray-100 text-slate-600 text-sm rounded-md" . (($active ?? false) ? ' bg-gray-100' : '');
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($icon); ?>

    <span class="tracking-widest"><?php echo e($name); ?></span>
</a>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/resources/views/components/nav-link.blade.php ENDPATH**/ ?>