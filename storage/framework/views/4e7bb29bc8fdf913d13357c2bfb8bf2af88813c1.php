<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<style>
@media  only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media  only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<?php echo e($header ?? ''); ?>


<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>
<td class="content-cell">
<?php echo e(Illuminate\Mail\Markdown::parse($slot)); ?>


<?php echo e($subcopy ?? ''); ?>

</td>
</tr>
</table>
</td>
</tr>

<?php echo e($footer ?? ''); ?>

</table>
</td>
</tr>
</table>
</body>
</html>
<?php /**PATH /Users/wispx/Develop/Projects/lsky-pro/vendor/laravel/framework/src/Illuminate/Mail/resources/views/html/layout.blade.php ENDPATH**/ ?>