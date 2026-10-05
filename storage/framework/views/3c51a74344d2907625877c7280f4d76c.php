<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <h3>Add Product</h3>

    <form method="POST" action="<?php echo e(route('admin.products.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <?php echo $__env->make('admin.products._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <button class="btn btn-primary">Save Product</button>
        <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\products\create.blade.php ENDPATH**/ ?>