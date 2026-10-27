<div class="portfolio-project-card project-portfolio-item" data-category="<?php echo e($project->category_key); ?>">
    <a href="<?php echo e(route('projects.show', $project->slug)); ?>" class="project-card-thumb-wrap<?php echo e($project->slug === 'dtpc-ernakulam-marine-drive' ? ' is-logo' : ''); ?>" aria-label="Read more about <?php echo e($project->title); ?>">
        <span class="project-photo-track">
            <?php $__currentLoopData = $project->gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($photo); ?>" alt="<?php echo e($project->title); ?> ? photo <?php echo e($loop->iteration); ?>" draggable="false">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>
        <span class="project-photo-dots" aria-hidden="true"><?php $__currentLoopData = $project->gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span <?php if($loop->first): ?> class="is-active" <?php endif; ?>></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
        <span class="project-category-pill"><?php echo e($project->category ?: (["theme" => "Theme & Amusement Parks", "adventure" => "Adventure & Aerial Parks", "cinema" => "Immersive Cinema & Domes", "indoor" => "Indoor FEC & Edutainment"][$project->category_key] ?? "Entertainment Projects")); ?></span>
    </a>
    <div class="project-card-body">
        <h3 class="project-card-title"><?php echo e($project->title); ?></h3>
        <p class="project-card-summary"><?php echo e($project->short_description); ?></p>
        <div class="project-card-actions">
            <button type="button" class="project-card-quote open-project-spec-modal-btn" data-project-title="<?php echo e($project->title); ?>">
                <i class="las la-file-alt" aria-hidden="true"></i> <span>Get Quote</span>
            </button>
            <a href="<?php echo e(route('projects.show', $project->slug)); ?>" class="project-card-read-more">
                <span>Read more</span> <i class="las la-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/projects/card.blade.php ENDPATH**/ ?>