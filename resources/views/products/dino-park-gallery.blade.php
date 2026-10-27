<div class="swiper dino-park-gallery" role="region" aria-label="Dino Park photos" style="width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach(['Carved dragon and koi wall relief with warm edge lighting', 'Dinosaur fossil skeleton wall display inside a themed dino park'] as $caption)
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="{{ asset('assets/img/products/dino-park-' . $loop->iteration . '.jpg') }}" alt="{{ $caption }}" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
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
@endonce

