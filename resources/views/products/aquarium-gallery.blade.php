<div class="swiper aquarium-gallery" role="region" aria-label="Aquarium photos" style="width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach(['Starfish on the sandy aquarium floor', 'Lionfish swimming in an aquarium'] as $caption)
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="{{ asset('assets/img/products/aquarium-' . $loop->iteration . '.jpg') }}" alt="{{ $caption }}" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
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
@endonce

