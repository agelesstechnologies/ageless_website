<div class="swiper jaint-swing-gallery" role="region" aria-label="Jaint Swing photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Jaint Swing support frame with suspended riders', 'Jaint Swing riders overlooking the mountain landscape']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/jaint-swing-' . $loop->iteration . '.jpeg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('dc0443a7-dcfe-44a8-bff0-33e41436f693')): $__env->markAsRenderedOnce('dc0443a7-dcfe-44a8-bff0-33e41436f693'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.jaint-swing-gallery').forEach(function (gallery) {
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
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/jaint-swing-gallery.blade.php ENDPATH**/ ?>