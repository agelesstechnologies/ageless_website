<div class="swiper shooting-archery-gallery !tw-w-full !tw-overflow-hidden ![height:var(--gallery-height)]" role="region" aria-label="Shooting and Archery photos" style="--gallery-height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach(['shooting-and-archery-indoor.jpg' => 'Indoor archery target lanes', 'shooting-and-archery-outdoor.jpg' => 'Outdoor archery target practice'] as $image => $caption)
            <div class="swiper-slide">
                <img class="!tw-w-full !tw-h-full !tw-object-cover" src="{{ asset('assets/img/products/' . $image) }}" alt="{{ $caption }}" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
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
@endonce
