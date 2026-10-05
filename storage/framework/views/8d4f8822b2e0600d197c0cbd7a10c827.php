<div class="portfolio-project-card project-portfolio-item" data-category="<?php echo e($project->category_key); ?>" data-aos="zoom-in-down">
    <a href="<?php echo e(route('projects.show', $project->slug)); ?>" class="project-card-thumb-wrap">
        <img src="<?php echo e($project->image_url); ?>" alt="<?php echo e($project->title); ?>">
        <span class="project-category-pill"><?php echo e($project->category); ?></span>
        <div class="project-action-circle"><i class="las la-arrow-right"></i></div>
    </a>
    <div class="project-card-body">
        <div class="project-meta-strip">
            <?php if($project->location): ?><span><i class="las la-map-marker-alt"></i> <?php echo e($project->location); ?></span><?php endif; ?>
            <?php if($project->year): ?><span><?php echo e($project->year); ?></span><?php endif; ?>
            <?php if($project->capacity): ?><span><i class="las la-tachometer-alt"></i> <?php echo e($project->capacity); ?></span><?php endif; ?>
        </div>
        <h3 class="project-card-title"><?php echo e($project->title); ?></h3>
        <p class="project-card-summary"><?php echo e($project->short_description); ?></p>
        <button type="button" class="btn-view-study open-case-study-btn"
                data-name="<?php echo e($project->title); ?>" data-location="<?php echo e($project->location); ?>" data-year="<?php echo e($project->year); ?>"
                data-category="<?php echo e($project->category); ?>" data-capacity="<?php echo e($project->capacity); ?>"
                data-image="<?php echo e($project->image_url); ?>"
                data-overview="<?php echo e($project->description ?: $project->short_description); ?>"
                data-scope="<?php echo e($project->scope); ?>" data-specs="<?php echo e($project->specifications); ?>">
            <span>View case study</span><i class="las la-arrow-right"></i>
        </button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\projects\card.blade.php ENDPATH**/ ?>