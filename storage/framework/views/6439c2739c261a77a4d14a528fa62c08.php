<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <h4>Edit Blog</h4>
    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.blogs.update', $blog)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('admin.blogs._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-secondary" href="<?php echo e(route('admin.blogs.index')); ?>">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\blogs\edit.blade.php ENDPATH**/ ?>