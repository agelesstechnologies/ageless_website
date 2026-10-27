<div class="swiper dome-cinema-gallery !tw-w-full !tw-overflow-hidden ![height:var(--gallery-height)]" role="region" aria-label="Dome Cinema360° photos" style="--gallery-height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Nighttime dome frame installation', 'Completed dome exterior at night', 'Geodesic dome frame assembly', 'Indoor dome fabrication', 'Crane-assisted dome installation', 'Immersive fantasy world with waterfalls and dragons', 'Interactive ocean and lava projections inside a 360-degree cinema', 'Immersive jungle, galaxy and underwater projection experience', 'Giant animated character in an immersive cinema']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img class="!tw-w-full !tw-h-full !tw-object-cover" src="<?php echo e(asset('assets/img/products/dome-cinema-' . $loop->iteration . '.jpeg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('93ada424-fe18-4020-8b41-8565caa5af3b')): $__env->markAsRenderedOnce('93ada424-fe18-4020-8b41-8565caa5af3b'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.dome-cinema-gallery').forEach(function (gallery) {
        new Swiper(gallery, {
            loop: true,
            speed: 650,
            autoplay: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: gallery.querySelector('.swiper-pagination'), clickable: true },
            a11y: { enabled: true }
        });
    });
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/dome-cinema-gallery.blade.php ENDPATH**/ ?>