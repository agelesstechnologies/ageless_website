<?php if($errors->any()): ?>
    <div class="alert alert-danger" role="alert">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="mb-3">
    <label for="title">Title</label>
    <input id="title" class="form-control" name="title" maxlength="255" value="<?php echo e(old('title', $blog->title ?? '')); ?>" required>
</div>
<div class="mb-3">
    <label for="excerpt">Excerpt</label>
    <textarea id="excerpt" class="form-control" name="excerpt" rows="3"><?php echo e(old('excerpt', $blog->excerpt ?? '')); ?></textarea>
</div>
<div class="mb-3">
    <label for="content">Content</label>
    <textarea id="content" class="form-control" name="content" rows="10" required><?php echo e(old('content', $blog->content ?? '')); ?></textarea>
</div>
<div class="mb-3">
    <label for="image">Image</label>
    <input id="image" class="form-control" type="file" name="image" accept="image/*" aria-describedby="image-help">
    <small id="image-help">Maximum 4 MB. Leave empty to keep the current image.</small>
</div>
<div class="mb-3">
    <label for="status">Status</label>
    <select id="status" class="form-control" name="status" required>
        <option value="published" <?php if(old('status', $blog->status ?? 'published') === 'published'): echo 'selected'; endif; ?>>Published</option>
        <option value="draft" <?php if(old('status', $blog->status ?? 'published') === 'draft'): echo 'selected'; endif; ?>>Draft</option>
    </select>
</div>
<div class="mb-3">
    <label for="published_at">Published Date</label>
    <input id="published_at" class="form-control" type="date" name="published_at" value="<?php echo e(old('published_at', isset($blog) && $blog->published_at ? $blog->published_at->format('Y-m-d') : now()->format('Y-m-d'))); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\admin\blogs\_form.blade.php ENDPATH**/ ?>