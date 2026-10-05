<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Blogs</h4>
        <a class="btn btn-primary" href="<?php echo e(route('admin.blogs.create')); ?>">Add Blog</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <?php if($blog->image): ?>
                            <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" width="80" class="mb-2">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($blog->title); ?></td>
                    <td><?php echo e($blog->status); ?></td>
                    <td><?php echo e(optional($blog->published_at)->format('d M Y')); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.blogs.edit',$blog)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form class="d-inline" method="POST" action="<?php echo e(route('admin.blogs.destroy',$blog)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button onclick="return confirm('Delete this blog?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="5">No blogs found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php echo e($blogs->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\blogs\index.blade.php ENDPATH**/ ?>