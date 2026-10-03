<section class="home-faq" id="home-faq" aria-labelledby="home-faq-heading">
    <div class="container">
        <div class="home-faq-inner">
            <header class="home-faq-header">
                <h2 id="home-faq-heading">Frequently asked questions</h2>
                <p>A few helpful answers before you start your next project.</p>
            </header>
            <div class="home-faq-list">
                <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <details>
                        <summary><?php echo e($faq->question); ?></summary>
                        <p><?php echo e($faq->answer); ?></p>
                    </details>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No FAQs available.</p>
                <?php endif; ?>
            </div>
            <p class="home-faq-contact">Have another question? <a href="<?php echo e(url('/contact')); ?>">Talk to our team <span aria-hidden="true">&rarr;</span></a></p>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\ageless_laravel_local\resources\views/partials/home-faq.blade.php ENDPATH**/ ?>