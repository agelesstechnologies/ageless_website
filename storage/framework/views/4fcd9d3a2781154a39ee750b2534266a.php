<div class="swiper paddle-boats-gallery" role="region" aria-label="Paddle Boats photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Swan-themed pedal boat on the water', 'Recreational paddling on a lake']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/paddle-boats-' . $loop->iteration . '.jpg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('40b6f5dd-6b89-4583-859e-4d96a840a43e')): $__env->markAsRenderedOnce('40b6f5dd-6b89-4583-859e-4d96a840a43e'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.paddle-boats-gallery').forEach(function (gallery) {
        new Swiper(gallery, {
            speed: 650,
            autoplay: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: gallery.querySelector('.swiper-pagination'), clickable: true },
            a11y: { enabled: true }
        });
    });
});
</script>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/paddle-boats-gallery.blade.php ENDPATH**/ ?>