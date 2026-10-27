<div class="swiper product-gallery" role="region" aria-label="{{ $alt }} photos" style="width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach($images as $image)
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="{{ $image }}" alt="{{ $alt }} photo {{ $loop->iteration }}" loading="{{ $loop->first ? 'eager' : 'lazy' }}" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.product-gallery').forEach(function (gallery) {
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
@endonce
