@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label for="title">Title</label>
    <input id="title" class="form-control" name="title" maxlength="255" value="{{ old('title', $blog->title ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="excerpt">Excerpt</label>
    <textarea id="excerpt" class="form-control" name="excerpt" rows="3">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="content">Content</label>
    <textarea id="content" class="form-control" name="content" rows="10" required>{{ old('content', $blog->content ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="image">Image</label>
    <input id="image" class="form-control" type="file" name="image" accept="image/*" aria-describedby="image-help">
    <small id="image-help">Maximum 4 MB. Leave empty to keep the current image.</small>
</div>
<div class="mb-3">
    <label for="status">Status</label>
    <select id="status" class="form-control" name="status" required>
        <option value="published" @selected(old('status', $blog->status ?? 'published') === 'published')>Published</option>
        <option value="draft" @selected(old('status', $blog->status ?? 'published') === 'draft')>Draft</option>
    </select>
</div>
<div class="mb-3">
    <label for="published_at">Published Date</label>
    <input id="published_at" class="form-control" type="date" name="published_at" value="{{ old('published_at', isset($blog) && $blog->published_at ? $blog->published_at->format('Y-m-d') : now()->format('Y-m-d')) }}">
</div>
