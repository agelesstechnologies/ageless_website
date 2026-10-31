<div class="premium-product-card product-item" data-category="{{ $product->category_key }}" data-aos="zoom-in-down">
    <div class="card-img-wrapper" data-href="{{ route('products.show', $product->slug) }}" role="link" tabindex="0" aria-label="View details of {{ $product->name }}" style="cursor:pointer">
        @if(count($product->gallery_images) > 1)
            @include('products.gallery', ['images' => $product->gallery_images, 'alt' => $product->name])
        @else
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
        @endif
        <span class="card-category-pill {{ ['outdoor' => 'cat-theme', 'adventure' => 'cat-adventure', 'cinema' => 'cat-cinema', 'indoor' => 'cat-indoor'][$product->category_key] ?? 'cat-theme' }}">{{ $product->category }}</span>
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
