<div class="premium-product-card product-item" data-category="{{ $product->category_key }}" data-aos="zoom-in-down">
    <div class="card-img-wrapper" data-href="{{ route('products.show', $product->slug) }}" role="link" tabindex="0" aria-label="View details of {{ $product->name }}" style="cursor:pointer">
        @if($product->slug === 'rope-rider-ride')
            @include('products.rope-rider-gallery')
        @elseif($product->slug === 'jaint-swing')
            @include('products.jaint-swing-gallery')
        @elseif($product->slug === 'steel-slide-hi-lite-mall-kozhikode')
            @include('products.steel-slide-gallery', ['fillCard' => true])
        @elseif($product->slug === 'shooting-and-archery')
            @include('products.shooting-archery-gallery')
        @elseif(str_contains(strtolower($product->name), 'dome') && str_contains(strtolower($product->name), 'cinema'))
            @include('products.dome-cinema-gallery')
        @elseif(($product->slug === 'snow-park' || str_contains(strtolower($product->name), 'snow fantasy') || str_contains(strtolower($product->name), 'snow park')))
            <div class="snow-park-gallery">
                <div class="snow-park-gallery-track">
                @foreach(['snow1.jpeg', 'snow2.jpeg', 'snow3.jpeg', 'snow1.jpeg'] as $snowImage)
                    <div class="snow-park-gallery-image" @if($loop->last) aria-hidden="true" @endif>
                        <img src="{{ asset('assets/img/' . $snowImage) }}" alt="{{ $product->name }} - view {{ $loop->iteration }}" loading="lazy" decoding="async">
                    </div>
                @endforeach
                </div>
            </div>
        @elseif(str_contains(strtolower($product->name), 'horror'))
            <div class="horror-house-gallery">
                <div class="horror-house-gallery-track">
                    @foreach(['horror1.jpeg', 'horror2.jpeg', 'horror3.jpeg', 'horror4.jpeg', 'horror1.jpeg'] as $horrorImage)
                        <div class="horror-house-gallery-image" @if($loop->last) aria-hidden="true" @endif>
                            <img src="{{ asset('assets/img/' . $horrorImage) }}" alt="{{ $loop->last ? '' : $product->name . ' - view ' . $loop->iteration }}" loading="lazy" decoding="async">
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif(str_contains(strtolower($product->name), 'traffic park'))
            <div class="traffic-park-gallery">
                <div class="traffic-park-gallery-track">
                    @foreach(['traffic-park-vehicles-1.jpeg', 'traffic-park-vehicles-2.jpeg', 'traffic-park-vehicles-1.jpeg'] as $trafficImage)
                        <div class="traffic-park-gallery-image" @if($loop->last) aria-hidden="true" @endif>
                            <img src="{{ asset('assets/img/' . $trafficImage) }}" alt="{{ $loop->last ? '' : $product->name . ' - view ' . $loop->iteration }}" loading="lazy" decoding="async">
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif($product->slug === 'net-games')
            <div class="net-games-gallery">
                <div class="net-games-gallery-track">
                    @foreach(['net1.jpeg', 'net2.jpeg', 'net1.jpeg'] as $netImage)
                        <div class="net-games-gallery-image" @if($loop->last) aria-hidden="true" @endif>
                            <img src="{{ asset('assets/img/' . $netImage) }}" alt="{{ $loop->last ? '' : $product->name . ' - view ' . $loop->iteration }}" loading="lazy" decoding="async">
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif($product->slug === 'arcade-games')
            <img style="display: block; width: 100%; height: 100%; max-width: none; object-fit: cover; object-position: center;" src="{{ $product->image_url }}" alt="{{ $product->name }}">
        @else
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
        @endif
        <span class="card-category-pill {{ ['outdoor' => 'cat-theme', 'adventure' => 'cat-adventure', 'cinema' => 'cat-cinema', 'indoor' => 'cat-indoor'][$product->category_key] ?? 'cat-theme' }}">{{ $product->category }}</span>
        @if($product->spec_badge)<span class="card-spec-badge">{{ $product->spec_badge }}</span>@endif
    </div>
    <div class="card-content-body">
        <h3 class="card-product-title">{{ $product->name }}</h3>
        <p class="card-product-desc">{{ $product->short_description }}</p>
        @if(!in_array($product->slug, ['rope-rider-ride', 'interactive-entertainments', 'interactive-immersive-zone', 'marine-drive-express', 'alpine-coaster']) && filled($product->features))
        <div class="card-features-chips">
            @foreach(preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY) as $feature)
                <span class="spec-chip"><i class="las la-check-circle"></i> {{ $feature }}</span>
            @endforeach
        </div>
        @endif
        <div class="card-footer-actions">
            <button type="button" class="btn-card-quote open-quote-modal-btn" data-product="{{ $product->name }}"><i class="las la-file-invoice"></i><span>Get Quote</span></button>
            <a href="{{ route('products.show', $product->slug) }}" class="btn-card-details"><span>Details</span><i class="las la-arrow-right"></i></a>
        </div>
    </div>
</div>
