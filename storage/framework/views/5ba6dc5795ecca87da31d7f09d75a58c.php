<div class="swiper steel-slide-gallery" role="region" aria-label="Steel slide at Hi Lite Mall Kozhikode photos" style="<?php echo e(($fillCard ?? false) ? 'position: absolute; inset: 0;' : ''); ?> width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper" style="height: 100%;">
        <?php $__currentLoopData = ['Full spiral steel slide with blue illuminated sections', 'Steel slide viewed from the upper mall balcony']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide" style="height: 100%; overflow: hidden;">
                <img style="display: block; width: 100%; height: 100%; max-width: none; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/steel-slide-hi-lite-mall-kozhikode-' . $loop->iteration . '.jpeg')); ?>" alt="<?php echo e($caption); ?> at Hi Lite Mall, Kozhikode" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('bb18779b-ac49-4f04-a888-63bf56389bf6')): $__env->markAsRenderedOnce('bb18779b-ac49-4f04-a888-63bf56389bf6'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.steel-slide-gallery').forEach(function (gallery) {
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
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/steel-slide-gallery.blade.php ENDPATH**/ ?>