@if($errors->any())
<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<div class="mb-3"><label for="name">Product Name</label>
<input id="name" name="name" type="text" class="form-control" value="{{ old('name', $product->name ?? '') }}" required></div>
<div class="mb-3"><label for="category">Category Label</label>
<input id="category" name="category" type="text" class="form-control" value="{{ old('category', $product->category ?? '') }}"></div>
<div class="mb-3"><label for="short_description">Short Description</label>
<textarea id="short_description" name="short_description" class="form-control" rows="4">{{ old('short_description', $product->short_description ?? '') }}</textarea></div>
<div class="mb-3"><label for="description">Full Description</label>
<textarea id="description" name="description" class="form-control" rows="4">{{ old('description', $product->description ?? '') }}</textarea></div>
<div class="mb-3"><label for="spec_badge">Specification Badge</label>
<input id="spec_badge" name="spec_badge" type="text" class="form-control" value="{{ old('spec_badge', $product->spec_badge ?? '') }}"></div>
<div class="mb-3"><label for="features">Features (one per line)</label>
<textarea id="features" name="features" class="form-control" rows="4">{{ old('features', $product->features ?? '') }}</textarea></div>
<div class="mb-3"><label for="sort_order">Sort Order</label>
<input id="sort_order" name="sort_order" type="number" class="form-control" value="{{ old('sort_order', $product->sort_order ?? 0) }}" required></div>
<div class="mb-3"><label for="category_key">Filter Category</label><select id="category_key" name="category_key" class="form-control" required><option value="outdoor" @selected(old('category_key', $product->category_key ?? 'outdoor') === 'outdoor')>Theme & Amusement Parks</option>
<option value="adventure" @selected(old('category_key', $product->category_key ?? 'outdoor') === 'adventure')>Adventure & Aerial Parks</option>
<option value="cinema" @selected(old('category_key', $product->category_key ?? 'outdoor') === 'cinema')>Immersive Cinema & Domes</option>
<option value="indoor" @selected(old('category_key', $product->category_key ?? 'outdoor') === 'indoor')>Indoor FEC & Edutainment</option>
</select></div>
<div class="mb-3"><label for="status">Status</label><select id="status" name="status" class="form-control"><option value="1" @selected(old('status', $product->status ?? 1) == 1)>Active</option><option value="0" @selected(old('status', $product->status ?? 1) == 0)>Inactive</option></select></div>
<div class="mb-3"><label for="image">Image</label>
@if(isset($product) && $product->image)<div><img src="{{ asset('storage/'.$product->image) }}" width="150" alt="Current image"></div>@endif
<input id="image" name="image" type="file" accept="image/*" class="form-control"><small>Maximum 4 MB. Leave empty to keep the current image.</small></div>
