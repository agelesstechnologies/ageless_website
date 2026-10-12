<div class="swiper dome-cinema-gallery !tw-w-full !tw-overflow-hidden ![height:var(--gallery-height)]" role="region" aria-label="Dome Cinema360° photos" style="--gallery-height: {{ $galleryHeight ?? '100%' }};">
    <div class="swiper-wrapper">
        @foreach(['Nighttime dome frame installation', 'Completed dome exterior at night', 'Geodesic dome frame assembly', 'Indoor dome fabrication', 'Crane-assisted dome installation', 'Immersive fantasy world with waterfalls and dragons', 'Interactive ocean and lava projections inside a 360-degree cinema', 'Immersive jungle, galaxy and underwater projection experience', 'Giant animated character in an immersive cinema'] as $caption)
            <div class="swiper-slide">
                <img class="!tw-w-full !tw-h-full !tw-object-cover" src="{{ asset('assets/img/products/dome-cinema-' . $loop->iteration . '.jpeg') }}" alt="{{ $caption }}" loading="lazy" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
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
@endonce
