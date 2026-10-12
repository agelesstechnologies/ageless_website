@if($errors->any())
<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<div class="mb-3"><label for="title">Project Title</label>
<input id="title" name="title" type="text" class="form-control" value="{{ old('title', $project->title ?? '') }}" required></div>
<div class="mb-3"><label for="category">Category Label</label>
<input id="category" name="category" type="text" class="form-control" value="{{ old('category', $project->category ?? '') }}"></div>
<div class="mb-3"><label for="short_description">Short Description</label>
<textarea id="short_description" name="short_description" class="form-control" rows="4">{{ old('short_description', $project->short_description ?? '') }}</textarea></div>
<div class="mb-3"><label for="description">Full Description</label>
<textarea id="description" name="description" class="form-control" rows="4">{{ old('description', $project->description ?? '') }}</textarea></div>
<div class="mb-3"><label for="location">Location</label>
<input id="location" name="location" type="text" class="form-control" value="{{ old('location', $project->location ?? '') }}"></div>
<div class="mb-3"><label for="year">Year</label>
<input id="year" name="year" type="text" class="form-control" value="{{ old('year', $project->year ?? '') }}"></div>
<div class="mb-3"><label for="capacity">Capacity</label>
<input id="capacity" name="capacity" type="text" class="form-control" value="{{ old('capacity', $project->capacity ?? '') }}"></div>
<div class="mb-3"><label for="scope">Scope (comma separated)</label>
<textarea id="scope" name="scope" class="form-control" rows="4">{{ old('scope', $project->scope ?? '') }}</textarea></div>
<div class="mb-3"><label for="specifications">Specifications (Label: Value | Label: Value)</label>
<textarea id="specifications" name="specifications" class="form-control" rows="4">{{ old('specifications', $project->specifications ?? '') }}</textarea></div>
<div class="mb-3"><label for="sort_order">Sort Order</label>
<input id="sort_order" name="sort_order" type="number" class="form-control" value="{{ old('sort_order', $project->sort_order ?? 0) }}" required></div>
<div class="mb-3"><label for="category_key">Filter Category</label><select id="category_key" name="category_key" class="form-control" required><option value="theme" @selected(old('category_key', $project->category_key ?? 'theme') === 'theme')>Theme & Amusement Parks</option>
<option value="adventure" @selected(old('category_key', $project->category_key ?? 'theme') === 'adventure')>Adventure & Aerial Parks</option>
<option value="cinema" @selected(old('category_key', $project->category_key ?? 'theme') === 'cinema')>Immersive Cinema & Domes</option>
<option value="indoor" @selected(old('category_key', $project->category_key ?? 'theme') === 'indoor')>Indoor FEC & Edutainment</option>
</select></div>
<div class="mb-3"><label for="status">Status</label><select id="status" name="status" class="form-control"><option value="1" @selected(old('status', $project->status ?? 1) == 1)>Active</option><option value="0" @selected(old('status', $project->status ?? 1) == 0)>Inactive</option></select></div>
<div class="mb-3"><label for="image">Image</label>
@if(isset($project) && $project->image)<div><img src="{{ $project->image_url }}" width="150" alt="Current image"></div>@endif
<input id="image" name="image" type="file" accept="image/*" class="form-control"><small>Maximum 4 MB. Leave empty to keep the current image.</small></div>
