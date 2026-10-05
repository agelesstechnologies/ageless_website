

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <h3>Edit FAQ</h3>

    <form method="POST" action="<?php echo e(route('admin.faqs.update', $faq)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" class="form-control" value="<?php echo e($faq->question); ?>" required>
        </div>

        <div class="mb-3">
            <label>Answer</label>
            <textarea name="answer" class="form-control" rows="5" required><?php echo e($faq->answer); ?></textarea>
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="<?php echo e($faq->sort_order); ?>">
        </div>
        <?php if($faq->image): ?>
        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="<?php echo e(asset('storage/faqs/'.$faq->image)); ?>" alt="FAQ Image" style="max-width:150px;">
        </div>
        <?php endif; ?>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" <?php echo e($faq->status ? 'selected' : ''); ?>>Active</option>
                <option value="0" <?php echo e(!$faq->status ? 'selected' : ''); ?>>Inactive</option>
            </select>
        </div>

        <button class="btn btn-primary">Update FAQ</button>
        <a href="<?php echo e(route('admin.faqs.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\faqs\edit.blade.php ENDPATH**/ ?>