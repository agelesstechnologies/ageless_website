<div class="swiper dino-park-gallery" role="region" aria-label="Dino Park photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Carved dragon and koi wall relief with warm edge lighting', 'Dinosaur fossil skeleton wall display inside a themed dino park']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="<?php echo e(asset('assets/img/products/dino-park-' . $loop->iteration . '.jpg')); ?>" alt="<?php echo e($caption); ?>" loading="lazy" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('12c9082c-dd66-4ea1-8fe0-a75ccdcce864')): $__env->markAsRenderedOnce('12c9082c-dd66-4ea1-8fe0-a75ccdcce864'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.dino-park-gallery').forEach(function (gallery) {
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

<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/dino-park-gallery.blade.php ENDPATH**/ ?>