

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Contact Enquiries</h3>

        <form method="GET" action="<?php echo e(route('admin.contacts.index')); ?>">
            <!-- <select name="sort" class="form-control" onchange="this.form.submit()">
                <option value="new" <?php echo e(request('sort') == 'new' ? 'selected' : ''); ?>>Newest First</option>
                <option value="old" <?php echo e(request('sort') == 'old' ? 'selected' : ''); ?>>Oldest First</option>
            </select> -->
        </form>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($enquiry->name); ?></td>
                    <td><?php echo e($enquiry->email); ?></td>
                    <td><?php echo e($enquiry->phone); ?></td>
                    <td><?php echo e($enquiry->message); ?></td>
                    <td><?php echo e($enquiry->created_at->format('d M Y')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5">No enquiries found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($enquiries->appends(request()->query())->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\contacts\index.blade.php ENDPATH**/ ?>