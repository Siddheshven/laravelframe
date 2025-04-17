<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="container">
    <?php echo $__env->yieldContent('main-section'); ?>
</div>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH D:\xampp\htdocs\laravelframe\resources\views/layouts/main.blade.php ENDPATH**/ ?>