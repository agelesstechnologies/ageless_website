<?php
    $productSeo = config('product-seo')[$product->name] ?? [];
    $productHeading = $productSeo['heading'] ?? $product->name;
?>

<?php $__env->startSection('title', $productSeo['title'] ?? $productHeading . ' | Ageless'); ?>
<?php $__env->startSection('meta_description', $productSeo['description'] ?? $product->short_description ?? 'Explore amusement ride and attraction solutions from Ageless Entertainments in India.'); ?>
<?php $__env->startSection('canonical', url('/products/' . ($product->slug ?? ''))); ?>

<?php $__env->startSection('content'); ?>

<!-- ==============================================
     PRODUCT DETAILS HERO SECTION
     ============================================== -->
<section class="products-hero-wrapper ![min-height:50vh] ![padding:130px_0_60px_0] ![background-image:var(--hero-image)]" style="--hero-image: url('<?php echo e(asset('hero-park.png')); ?>');">
    <div class="products-hero-overlay"></div>
    <div class="products-hero-mesh"></div>

    <div class="container products-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="products-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span><a class="!tw-text-inherit !tw-no-underline" href="<?php echo e(url('/products')); ?>">Products &amp; Solutions</a> • Specification</span>
                </div>

                <h1 class="products-hero-title wow fadeInUp ![font-size:clamp(2.2rem,_4.2vw,_3.6rem)]" data-wow-delay="200ms">
                    <?php echo e($productHeading); ?>

                </h1>

                <?php if($product->short_description): ?>
                    <p class="products-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                        <?php echo e($product->short_description); ?>

                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     PRODUCT DETAILS CONTENT & SPECS
     ============================================== -->
<section class="padding ![background:#ffffff] ![padding:80px_0]">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <!-- Product Media Frame -->
            <div class="col-lg-6">
                <div class="story-media-showcase">
                    <div class="story-main-img-card ![box-shadow:0_20px_50px_rgba(11,_23,_39,_0.12)]">
                        <?php if($product->slug === 'paddle-boats'): ?>
                            <?php echo $__env->make('products.paddle-boats-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php elseif($product->slug === 'marine-drive-express'): ?>
                            <?php echo $__env->make('products.marine-drive-express-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php elseif($product->slug === 'jaint-swing'): ?>
                            <?php echo $__env->make('products.jaint-swing-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php elseif($product->slug === 'steel-slide-hi-lite-mall-kozhikode'): ?>
                            <?php echo $__env->make('products.steel-slide-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php elseif($product->slug === 'shooting-and-archery'): ?>
                            <?php echo $__env->make('products.shooting-archery-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php elseif(str_contains(strtolower($product->name), 'dome') && str_contains(strtolower($product->name), 'cinema')): ?>
                            <?php echo $__env->make('products.dome-cinema-gallery', ['galleryHeight' => '440px'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php else: ?>
                            <img class="![height:440px]" src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>">
                        <?php endif; ?>
                    </div>
                    <?php if(!in_array($product->slug, ['steel-slide-hi-lite-mall-kozhikode', 'jaint-swing', 'marine-drive-express', 'paddle-boats', 'kayaks'])): ?>
                    <div class="story-floating-badge ![bottom:-15px] ![left:-10px]">
                        <div class="floating-badge-icon">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <div class="floating-badge-text">
                            <h4><?php echo e(match ($product->slug) { 'shooting-and-archery' => 'Custom Target Zones', 'interactive-entertainments' => 'Immersive Digital Play', 'interactive-immersive-zone' => 'Interactive Digital Worlds', 'bumper-cars' => 'Classic Dodgem Fun', 'alpine-coaster' => 'Scenic Coaster Experience', default => 'EN / ASTM Certified' }); ?></h4>
                            <p><?php echo e(match ($product->slug) { 'shooting-and-archery' => 'Indoor & Outdoor Planning', 'interactive-entertainments' => 'Custom Floor & Wall Experiences', 'interactive-immersive-zone' => 'Themed Visual Experiences', 'bumper-cars' => 'Custom Cars & Arena Planning', 'alpine-coaster' => 'Outdoor Track & Terrain Planning', default => 'Full Statutory Compliance' }); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Product Specs & Inquiries -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-pill-tag mb-2">
                    <i class="las la-cog"></i> Engineering Specification
                </div>
                
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:2.2rem] !tw-uppercase ![color:#0b1727] ![margin-bottom:20px]">
                    <?php echo e($product->name); ?>

                </h2>

                <div class="story-body-para mb-4 ![font-size:1rem] ![line-height:1.8] ![color:#475569]">
                    <?php if($product->description): ?>
                        <?php echo nl2br(e($product->description)); ?>

                    <?php else: ?>
                        <?php echo e($product->short_description ?? 'Precision-engineered attraction designed for optimum passenger throughput, structural longevity, and superior guest satisfaction.'); ?>

                    <?php endif; ?>
                </div>

                <!-- Highlights Checklist -->
                <?php if(!in_array($product->slug, ['interactive-immersive-zone', 'marine-drive-express', 'alpine-coaster', 'paddle-boats', 'kayaks']) && filled($product->features)): ?>
                <div class="story-features-list mb-4">
                    <?php $__currentLoopData = preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="story-feature-item">
                        <i class="las la-check-circle"></i>
                        <span><?php echo e($feature); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php endif; ?>
                <!-- Actions -->
                <div class="d-flex flex-wrap gap-3 align-items-center pt-3">
                    <a href="<?php echo e(url('/contact')); ?>" class="btn-glow-primary">
                        <i class="las la-file-invoice"></i>
                        <span>Request Custom Quotation</span>
                    </a>
                    <a href="<?php echo e(url('/products')); ?>" class="btn-card-details ![padding:12px_24px]">
                        <i class="las la-arrow-left"></i>
                        <span>Back to All Products</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     THE AGELESS ADVANTAGE STRIP
     ============================================== -->
<section class="about-advantage-section ![padding:70px_0]">
    <div class="container position-relative ![z-index:2]">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-drafting-compass"></i>
                    </div>
                    <h3 class="advantage-title">Turnkey Supply</h3>
                    <p class="advantage-desc">From 3D CAD modeling and civil integration to fabrication, erection, and commissioning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-shield-alt"></i>
                    </div>
                    <h3 class="advantage-title">Safety Rigor</h3>
                    <p class="advantage-desc">Full compliance with international ASTM F24 / EN 13814 standards and statutory safety audits.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-tools"></i>
                    </div>
                    <h3 class="advantage-title">Rapid Spares</h3>
                    <p class="advantage-desc">Indian engineering support hub in Kochi eliminating overseas lead times and high import duties.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/show.blade.php ENDPATH**/ ?>