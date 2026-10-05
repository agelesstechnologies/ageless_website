

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <h3>Add FAQ</h3>

    <form method="POST" action="<?php echo e(route('admin.faqs.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Answer</label>
            <textarea name="answer" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="0">
        </div>

        <div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control" accept="image/*">
</div>

        <button class="btn btn-primary">Save FAQ</button>
        <a href="<?php echo e(route('admin.faqs.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\faqs\create.blade.php ENDPATH**/ ?>