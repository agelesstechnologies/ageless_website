<div class="swiper rope-rider-gallery" role="region" aria-label="Rope Rider photos" style="width: 100%; overflow: hidden; height: {{ $galleryHeight ?? '100%' }}; background: #eef2f3;">
    <div class="swiper-wrapper">
        @foreach(['Rope Rider suspended above a forested hillside', 'Guests enjoying the seated Rope Rider', 'Families riding above the green valley', 'Panoramic view of the Rope Rider attraction', 'Rope Rider with guests above the treetops'] as $caption)
            <div class="swiper-slide">
                <img style="width: 100%; height: 100%; object-fit: contain; object-position: center;" src="{{ asset('assets/img/products/rope-rider-' . $loop->iteration . '.jpg') }}" alt="{{ $caption }}" loading="{{ $loop->first ? 'eager' : 'lazy' }}" decoding="async">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
@once
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
@endonce
