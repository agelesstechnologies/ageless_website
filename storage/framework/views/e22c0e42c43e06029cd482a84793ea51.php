<div class="swiper marine-drive-express-gallery" role="region" aria-label="Marine Drive Express photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Marine Drive Express colourful train on the waterfront promenade', 'Marine Drive Express train and themed ticket kiosk']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/marine-drive-express-' . $loop->iteration . '.jpeg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('c0311f75-1f5a-4543-8036-50c30c2f4371')): $__env->markAsRenderedOnce('c0311f75-1f5a-4543-8036-50c30c2f4371'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.marine-drive-express-gallery').forEach(function (gallery) {
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
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/marine-drive-express-gallery.blade.php ENDPATH**/ ?>