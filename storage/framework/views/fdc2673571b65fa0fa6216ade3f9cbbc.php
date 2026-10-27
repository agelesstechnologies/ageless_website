<div class="premium-product-card product-item" data-category="<?php echo e($product->category_key); ?>" data-aos="zoom-in-down">
    <div class="card-img-wrapper" data-href="<?php echo e(route('products.show', $product->slug)); ?>" role="link" tabindex="0" aria-label="View details of <?php echo e($product->name); ?>" style="cursor:pointer">
        <?php if($product->slug === 'rope-rider-ride'): ?>
            <?php echo $__env->make('products.rope-rider-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($product->slug === 'jaint-swing'): ?>
            <?php echo $__env->make('products.jaint-swing-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($product->slug === 'steel-slide-hi-lite-mall-kozhikode'): ?>
            <?php echo $__env->make('products.steel-slide-gallery', ['fillCard' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($product->slug === 'aquarium'): ?>
            <?php echo $__env->make('products.aquarium-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($product->slug === 'dino-park'): ?>
            <?php echo $__env->make('products.dino-park-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif($product->slug === 'shooting-and-archery'): ?>
            <?php echo $__env->make('products.shooting-archery-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif(str_contains(strtolower($product->name), 'dome') && str_contains(strtolower($product->name), 'cinema')): ?>
            <?php echo $__env->make('products.dome-cinema-gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php elseif(($product->slug === 'snow-park' || str_contains(strtolower($product->name), 'snow fantasy') || str_contains(strtolower($product->name), 'snow park'))): ?>
            <div class="snow-park-gallery">
                <div class="snow-park-gallery-track">
                <?php $__currentLoopData = ['snow1.jpeg', 'snow2.jpeg', 'snow3.jpeg', 'snow1.jpeg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snowImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="snow-park-gallery-image" <?php if($loop->last): ?> aria-hidden="true" <?php endif; ?>>
                        <img src="<?php echo e(asset('assets/img/' . $snowImage)); ?>" alt="<?php echo e($product->name); ?> - view <?php echo e($loop->iteration); ?>" loading="lazy" decoding="async">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php elseif(str_contains(strtolower($product->name), 'horror')): ?>
            <div class="horror-house-gallery">
                <div class="horror-house-gallery-track">
                    <?php $__currentLoopData = ['horror1.jpeg', 'horror2.jpeg', 'horror3.jpeg', 'horror4.jpeg', 'horror1.jpeg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horrorImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="horror-house-gallery-image" <?php if($loop->last): ?> aria-hidden="true" <?php endif; ?>>
                            <img src="<?php echo e(asset('assets/img/' . $horrorImage)); ?>" alt="<?php echo e($loop->last ? '' : $product->name . ' - view ' . $loop->iteration); ?>" loading="lazy" decoding="async">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php elseif(str_contains(strtolower($product->name), 'traffic park')): ?>
            <div class="traffic-park-gallery">
                <div class="traffic-park-gallery-track">
                    <?php $__currentLoopData = ['traffic-park-vehicles-1.jpeg', 'traffic-park-vehicles-2.jpeg', 'traffic-park-vehicles-1.jpeg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trafficImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="traffic-park-gallery-image" <?php if($loop->last): ?> aria-hidden="true" <?php endif; ?>>
                            <img src="<?php echo e(asset('assets/img/' . $trafficImage)); ?>" alt="<?php echo e($loop->last ? '' : $product->name . ' - view ' . $loop->iteration); ?>" loading="lazy" decoding="async">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php elseif($product->slug === 'net-games'): ?>
            <div class="net-games-gallery">
                <div class="net-games-gallery-track">
                    <?php $__currentLoopData = ['net1.jpeg', 'net2.jpeg', 'net1.jpeg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $netImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="net-games-gallery-image" <?php if($loop->last): ?> aria-hidden="true" <?php endif; ?>>
                            <img src="<?php echo e(asset('assets/img/' . $netImage)); ?>" alt="<?php echo e($loop->last ? '' : $product->name . ' - view ' . $loop->iteration); ?>" loading="lazy" decoding="async">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php elseif($product->slug === 'arcade-games'): ?>
            <img style="display: block; width: 100%; height: 100%; max-width: none; object-fit: cover; object-position: center;" src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>">
        <?php else: ?>
            <img src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>">
        <?php endif; ?>
        <span class="card-category-pill <?php echo e(['outdoor' => 'cat-theme', 'adventure' => 'cat-adventure', 'cinema' => 'cat-cinema', 'indoor' => 'cat-indoor'][$product->category_key] ?? 'cat-theme'); ?>"><?php echo e($product->category); ?></span>
    </div>
    <div class="card-content-body">
        <h3 class="card-product-title"><?php echo e($product->name); ?></h3>
        <p class="card-product-desc"><?php echo e($product->short_description); ?></p>
        <?php if(!in_array($product->slug, ['rope-rider-ride', 'interactive-entertainments', 'interactive-immersive-zone', 'marine-drive-express', 'alpine-coaster']) && filled($product->features)): ?>
        <div class="card-features-chips">
            <?php $__currentLoopData = preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="spec-chip"><i class="las la-check-circle"></i> <?php echo e($feature); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <div class="card-footer-actions">
            <button type="button" class="btn-card-quote open-quote-modal-btn" data-product="<?php echo e($product->name); ?>"><i class="las la-file-invoice"></i><span>Get Quote</span></button>
            <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="btn-card-details"><span>Details</span><i class="las la-arrow-right"></i></a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/card.blade.php ENDPATH**/ ?>