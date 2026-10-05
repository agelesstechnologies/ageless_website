

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Projects</h3>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-primary">Add Project</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Sort</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <?php if($project->image): ?>
                            <img src="<?php echo e(asset('storage/'.$project->image)); ?>" width="80">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($project->title); ?></td>
                    <td><?php echo e($project->category); ?></td>
                    <td><?php echo e($project->status ? 'Active' : 'Inactive'); ?></td>
                    <td><?php echo e($project->sort_order); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="btn btn-sm btn-warning">Edit</a>

                        <form action="<?php echo e(route('admin.projects.destroy', $project)); ?>" method="POST" style="display:inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6">No projects found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($projects->links('pagination::bootstrap-5')); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\projects\index.blade.php ENDPATH**/ ?>