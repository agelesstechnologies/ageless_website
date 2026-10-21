<?php if($errors->any()): ?>
<div class="alert alert-danger"><ul class="mb-0"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
<?php endif; ?>
<div class="mb-3"><label for="name">Product Name</label>
<input id="name" name="name" type="text" class="form-control" value="<?php echo e(old('name', $product->name ?? '')); ?>" required></div>
<div class="mb-3"><label for="category">Category Label</label>
<input id="category" name="category" type="text" class="form-control" value="<?php echo e(old('category', $product->category ?? '')); ?>"></div>
<div class="mb-3"><label for="short_description">Short Description</label>
<textarea id="short_description" name="short_description" class="form-control" rows="4"><?php echo e(old('short_description', $product->short_description ?? '')); ?></textarea></div>
<div class="mb-3"><label for="description">Full Description</label>
<textarea id="description" name="description" class="form-control" rows="4"><?php echo e(old('description', $product->description ?? '')); ?></textarea></div>
<div class="mb-3"><label for="spec_badge">Specification Badge</label>
<input id="spec_badge" name="spec_badge" type="text" class="form-control" value="<?php echo e(old('spec_badge', $product->spec_badge ?? '')); ?>"></div>
<div class="mb-3"><label for="features">Features (one per line)</label>
<textarea id="features" name="features" class="form-control" rows="4"><?php echo e(old('features', $product->features ?? '')); ?></textarea></div>
<div class="mb-3"><label for="sort_order">Sort Order</label>
<input id="sort_order" name="sort_order" type="number" class="form-control" value="<?php echo e(old('sort_order', $product->sort_order ?? 0)); ?>" required></div>
<div class="mb-3"><label for="category_key">Filter Category</label><select id="category_key" name="category_key" class="form-control" required><option value="outdoor" <?php if(old('category_key', $product->category_key ?? 'outdoor') === 'outdoor'): echo 'selected'; endif; ?>>Theme & Amusement Parks</option>
<option value="adventure" <?php if(old('category_key', $product->category_key ?? 'outdoor') === 'adventure'): echo 'selected'; endif; ?>>Adventure & Aerial Parks</option>
<option value="cinema" <?php if(old('category_key', $product->category_key ?? 'outdoor') === 'cinema'): echo 'selected'; endif; ?>>Immersive Cinema & Domes</option>
<option value="indoor" <?php if(old('category_key', $product->category_key ?? 'outdoor') === 'indoor'): echo 'selected'; endif; ?>>Indoor FEC & Edutainment</option>
</select></div>
<div class="mb-3"><label for="status">Status</label><select id="status" name="status" class="form-control"><option value="1" <?php if(old('status', $product->status ?? 1) == 1): echo 'selected'; endif; ?>>Active</option><option value="0" <?php if(old('status', $product->status ?? 1) == 0): echo 'selected'; endif; ?>>Inactive</option></select></div>
<div class="mb-3"><label for="image">Image</label>
<?php if(isset($product) && $product->image): ?><div><img src="<?php echo e(asset('storage/'.$product->image)); ?>" width="150" alt="Current image"></div><?php endif; ?>
<input id="image" name="image" type="file" accept="image/*" class="form-control"><small>Maximum 4 MB. Leave empty to keep the current image.</small></div>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/admin/products/_form.blade.php ENDPATH**/ ?>