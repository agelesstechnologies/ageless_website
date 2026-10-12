<?php $__env->startPush('tailwind_styles'); ?>
<?php echo $__env->make('partials.tailwind.aos', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.blog-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.blog-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('title', 'Amusement Park Industry Insights & Guides | Ageless'); ?>
<?php $__env->startSection('meta_description', 'Explore amusement park industry insights, ride planning guides and entertainment project ideas from Ageless Entertainments in India.'); ?>
<?php $__env->startSection('canonical', url('/blog')); ?>
<?php $__env->startSection('body_class', 'blog-page'); ?>

<?php $__env->startSection('content'); ?>

<main class="ageless-blog">
    <section class="blog-hero">
        <div class="container">
            <div class="blog-hero-copy" data-aos="fade-right">
            <span class="blog-eyebrow"><i class="las la-newspaper" aria-hidden="true"></i> News &amp; Articles</span>
            <h1>Ideas that shape <span>extraordinary destinations.</span></h1>
            <p>Amusement park insights, attraction guides, and fresh perspectives from the world of entertainment engineering.</p>
            <a href="#latest-articles" class="blog-primary-link">Explore Our Articles <i class="las la-arrow-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <section class="blog-articles" id="latest-articles" aria-labelledby="articles-title">
        <div class="container">
            <div class="blog-section-heading">
                <div data-aos="fade-right">
                    <span class="blog-eyebrow blog-eyebrow-light">The Ageless Journal</span>
                    <h2 id="articles-title">Insights &amp; <span>inspiration.</span></h2>
                </div>
                <p data-aos="fade-left">Explore ideas for planning parks, choosing attractions, and bringing entertainment destinations to life.</p>
            </div>
            <div class="journal-carousel" data-journal-carousel role="region" aria-roledescription="carousel" aria-label="Journal articles">
            <div class="blog-card-grid" id="journal-arc-track">
                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <article class="journal-card">
                        <a class="journal-image" href="<?php echo e(route('blog.show', $blog->slug)); ?>" aria-label="Read <?php echo e($blog->title); ?>">
                            <?php if($blog->image): ?>
                                <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" alt="<?php echo e($blog->title); ?>" loading="lazy" decoding="async">
                            <?php else: ?>
                                <div class="journal-image-placeholder"><i class="las la-newspaper" aria-hidden="true"></i></div>
                            <?php endif; ?>
                            <span class="journal-image-label">News &amp; Insights</span>
                            <span class="journal-image-arrow" aria-hidden="true"><i class="las la-arrow-up"></i></span>
                        </a>
                        <div class="journal-content">
                            <?php if($blog->published_at): ?>
                                <time datetime="<?php echo e($blog->published_at->toDateString()); ?>"><i class="las la-calendar" aria-hidden="true"></i> <?php echo e($blog->published_at->format('d M Y')); ?></time>
                            <?php endif; ?>
                            <h3><a href="<?php echo e(route('blog.show', $blog->slug)); ?>"><?php echo e($blog->title); ?></a></h3>
                            <p><?php echo nl2br(e($blog->excerpt)); ?></p>
                            <a class="journal-read-link" href="<?php echo e(route('blog.show', $blog->slug)); ?>">Read Article <i class="las la-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="journal-empty"><i class="las la-newspaper" aria-hidden="true"></i><h3>More inspiration is on its way.</h3><p>Check back soon for new articles and industry insights.</p></div>
                <?php endif; ?>
            </div>
            <?php if($blogs->count() > 0): ?>
                <div class="journal-carousel-controls" hidden>
                    <p class="journal-carousel-hint">Drag to explore</p>
                    <div class="journal-carousel-navigation">
                        <button type="button" class="journal-carousel-button" data-arc-prev aria-label="Previous article" aria-controls="journal-arc-track"><i class="las la-arrow-left" aria-hidden="true"></i></button>
                        <span class="journal-carousel-count" aria-live="polite" aria-atomic="true"></span>
                        <button type="button" class="journal-carousel-button" data-arc-next aria-label="Next article" aria-controls="journal-arc-track"><i class="las la-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            <?php endif; ?>
            </div>
            <?php if($blogs->hasPages()): ?>
                <div class="journal-pagination"><?php echo e($blogs->links()); ?></div>
            <?php endif; ?>
        </div>
    </section>

</main>
<script src="<?php echo e(asset('assets/js/blog-carousel.js')); ?>?v=<?php echo e(filemtime(public_path('assets/js/blog-carousel.js'))); ?>" defer></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    function initBlogAnimations() {
        if (typeof AOS === 'undefined') return;

        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 0,
            disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches
        });
    }

    if (document.readyState === 'complete') {
        requestAnimationFrame(initBlogAnimations);
    } else {
        window.addEventListener('load', function () {
            requestAnimationFrame(initBlogAnimations);
        }, { once: true });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/blog/index.blade.php ENDPATH**/ ?>