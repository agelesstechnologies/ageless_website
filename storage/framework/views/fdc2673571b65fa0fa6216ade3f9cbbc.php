<div class="premium-product-card product-item" data-category="<?php echo e($product->category_key); ?>" data-aos="zoom-in-down">
    <div class="card-img-wrapper">
        <img src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>">
        <span class="card-category-pill <?php echo e(['outdoor' => 'cat-theme', 'adventure' => 'cat-adventure', 'cinema' => 'cat-cinema', 'indoor' => 'cat-indoor'][$product->category_key] ?? 'cat-theme'); ?>"><?php echo e($product->category); ?></span>
        <?php if($product->spec_badge): ?><span class="card-spec-badge"><?php echo e($product->spec_badge); ?></span><?php endif; ?>
    </div>
    <div class="card-content-body">
        <h3 class="card-product-title"><?php echo e($product->name); ?></h3>
        <p class="card-product-desc"><?php echo e($product->short_description); ?></p>
        <div class="card-features-chips">
            <?php $__currentLoopData = preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="spec-chip"><i class="las la-check-circle"></i> <?php echo e($feature); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="card-footer-actions">
            <button type="button" class="btn-card-quote open-quote-modal-btn" data-product="<?php echo e($product->name); ?>"><i class="las la-file-invoice"></i><span>Get Quote</span></button>
            <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="btn-card-details"><span>Details</span><i class="las la-arrow-right"></i></a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/card.blade.php ENDPATH**/ ?>