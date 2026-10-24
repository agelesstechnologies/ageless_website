<?php $__env->startPush('tailwind_styles'); ?>
<?php echo $__env->make('partials.tailwind.blog-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.blog-show-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Blog detail page only: show the same translucent nav bar as the scrolled state, even at the top of the page */
    html body.blog-page.blog-article-page header.main-header.wonder-nav-header .nav-capsule-wrapper {
        background: rgba(0, 0, 0, 0.65) !important;
    }
</style>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('body_class', 'blog-page blog-article-page'); ?>

<?php $__env->startSection('content'); ?>

<section class="blog-detail-wrap">
    <div class="container">
        <div class="blog-detail-card">
            <?php if($blog->image): ?>
                <div class="blog-detail-img">
                    <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                </div>
            <?php endif; ?>

            <div class="blog-detail-content">
                <?php if($blog->published_at): ?>
                    <span class="blog-date">
                        <?php echo e(optional($blog->published_at)->format('d M Y')); ?>

                    </span>
                <?php endif; ?>

                <h1><?php echo e($blog->title); ?></h1>

                <div class="blog-content">
                    <?php if($blog->content === strip_tags($blog->content)): ?>
                        <?php echo nl2br(e($blog->content)); ?>

                    <?php else: ?>
                        <?php echo $blog->content; ?>

                    <?php endif; ?>
                </div>

                <div class="blog-actions">
                    <a href="<?php echo e(route('blog.index')); ?>" class="blog-btn">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/blog/show.blade.php ENDPATH**/ ?>