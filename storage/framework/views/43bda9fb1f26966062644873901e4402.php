

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Products</h3>
        <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary">Add Product</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Status</th>
                <th>Sort</th>
                <th width="180">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('storage/'.$product->image)); ?>" width="80">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->status ? 'Active' : 'Inactive'); ?></td>
                    <td><?php echo e($product->sort_order); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.products.edit', $product)); ?>" class="btn btn-sm btn-warning">Edit</a>

                        <form class="!tw-inline-block" action="<?php echo e(route('admin.products.destroy', $product)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5">No products found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($products->links('pagination::bootstrap-5')); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/admin/products/index.blade.php ENDPATH**/ ?>