<div class="swiper rope-rider-gallery" role="region" aria-label="Rope Rider photos" style="width: 100%; overflow: hidden; height: <?php echo e($galleryHeight ?? '100%'); ?>; background: #eef2f3;">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = ['Rope Rider suspended above a forested hillside', 'Guests enjoying the seated Rope Rider', 'Families riding above the green valley', 'Panoramic view of the Rope Rider attraction', 'Rope Rider with guests above the treetops']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: contain; object-position: center;" src="<?php echo e(asset('assets/img/products/rope-rider-' . $loop->iteration . '.jpg')); ?>" alt="<?php echo e($caption); ?>" loading="<?php echo e($loop->first ? 'eager' : 'lazy'); ?>" decoding="async">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php if (! $__env->hasRenderedOnce('3ef9bea3-c383-4533-8b68-8368115d4910')): $__env->markAsRenderedOnce('3ef9bea3-c383-4533-8b68-8368115d4910'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.rope-rider-gallery').forEach(function (gallery) {
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
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\products\rope-rider-gallery.blade.php ENDPATH**/ ?>