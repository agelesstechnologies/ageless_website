<div class="swiper paddle-boats-gallery" role="region" aria-label="Paddle Boats photos" style="width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach(['Swan-themed pedal boat on the water', 'Recreational paddling on a lake'] as $caption)
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="{{ asset('assets/img/products/paddle-boats-' . $loop->iteration . '.jpg') }}" alt="{{ $caption }}" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.paddle-boats-gallery').forEach(function (gallery) {
        new Swiper(gallery, {
            speed: 650,
            autoplay: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: gallery.querySelector('.swiper-pagination'), clickable: true },
            a11y: { enabled: true }
        });
    });
});
</script>
@endonce

