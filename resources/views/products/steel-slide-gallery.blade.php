<div class="swiper steel-slide-gallery" role="region" aria-label="Steel slide at Hi Lite Mall Kozhikode photos" style="{{ ($fillCard ?? false) ? 'position: absolute; inset: 0;' : '' }} width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper" style="height: 100%;">
        @foreach(['Full spiral steel slide with blue illuminated sections', 'Steel slide viewed from the upper mall balcony'] as $caption)
            <div class="swiper-slide" style="height: 100%; overflow: hidden;">
                <img style="display: block; width: 100%; height: 100%; max-width: none; object-fit: cover; object-position: center;" src="{{ asset('assets/img/products/steel-slide-hi-lite-mall-kozhikode-' . $loop->iteration . '.jpeg') }}" alt="{{ $caption }} at Hi Lite Mall, Kozhikode" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.steel-slide-gallery').forEach(function (gallery) {
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
