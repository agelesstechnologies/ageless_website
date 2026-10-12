<div class="swiper shooting-archery-gallery !tw-w-full !tw-overflow-hidden ![height:var(--gallery-height)]" role="region" aria-label="Shooting and Archery photos" style="--gallery-height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['shooting-and-archery-indoor.jpg' => 'Indoor archery target lanes', 'shooting-and-archery-outdoor.jpg' => 'Outdoor archery target practice']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image => $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img class="!tw-w-full !tw-h-full !tw-object-cover" src="<?php echo e(asset('assets/img/products/' . $image)); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('205394a3-3a5d-4eba-a6b0-84f2aca57e70')): $__env->markAsRenderedOnce('205394a3-3a5d-4eba-a6b0-84f2aca57e70'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.shooting-archery-gallery').forEach(function (gallery) {
        var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        new Swiper(gallery, {
            loop: true,
            speed: 650,
            autoplay: reducedMotion ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: gallery.querySelector('.swiper-pagination'), clickable: true },
            a11y: { enabled: true }
        });
    });
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\products\shooting-archery-gallery.blade.php ENDPATH**/ ?>