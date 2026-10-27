<div class="swiper product-gallery" role="region" aria-label="<?php echo e($alt); ?> photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e($image); ?>" alt="<?php echo e($alt); ?> photo <?php echo e($loop->iteration); ?>" loading="<?php echo e($loop->first ? 'eager' : 'lazy'); ?>" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('97461f34-2d69-4d1f-af15-cff0a47379cd')): $__env->markAsRenderedOnce('97461f34-2d69-4d1f-af15-cff0a47379cd'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.product-gallery').forEach(function (gallery) {
        gallery.addEventListener('click', function (event) {
            if (event.target.closest('.swiper-pagination') || (gallery.swiper && !gallery.swiper.allowClick)) {
                event.stopPropagation();
            }
        });
        new Swiper(gallery, {
            speed: 650,
            rewind: true,
            autoplay: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: gallery.querySelector('.swiper-pagination'), clickable: true },
            a11y: { enabled: true }
        });
    });
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/gallery.blade.php ENDPATH**/ ?>