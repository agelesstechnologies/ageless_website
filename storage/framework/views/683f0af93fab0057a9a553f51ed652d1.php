

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>FAQs</h3>
        <a href="<?php echo e(route('admin.faqs.create')); ?>" class="btn btn-primary">Add FAQ</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Status</th>
                <th>Sort</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($faq->question); ?></td>
                    <td><?php echo e($faq->status ? 'Active' : 'Inactive'); ?></td>
                    <td><?php echo e($faq->sort_order); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.faqs.edit', $faq)); ?>" class="btn btn-sm btn-warning">Edit</a>

                        <form class="!tw-inline-block" action="<?php echo e(route('admin.faqs.destroy', $faq)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this FAQ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">No FAQs found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($faqs->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\faqs\index.blade.php ENDPATH**/ ?>