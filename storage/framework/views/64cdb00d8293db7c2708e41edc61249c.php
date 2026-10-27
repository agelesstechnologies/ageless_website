<div class="swiper aquarium-gallery" role="region" aria-label="Aquarium photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Starfish on the sandy aquarium floor', 'Lionfish swimming in an aquarium']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/aquarium-' . $loop->iteration . '.jpg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('07752a28-3278-41f2-88de-5e4add04082a')): $__env->markAsRenderedOnce('07752a28-3278-41f2-88de-5e4add04082a'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.aquarium-gallery').forEach(function (gallery) {
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

<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/aquarium-gallery.blade.php ENDPATH**/ ?>