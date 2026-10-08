@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Edit FAQ</h3>

    <form method="POST" action="{{ route('admin.faqs.update', $faq) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
        </div>

        <div class="mb-3">
            <label>Answer</label>
            <textarea name="answer" class="form-control" rows="5" required>{{ $faq->answer }}</textarea>
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ $faq->sort_order }}">
        </div>
        @if($faq->image)
        <div class="mb-3">
            <label>Current Image</label><br>
            <img class="![max-width:150px]" src="{{ asset('storage/faqs/'.$faq->image) }}" alt="FAQ Image">
        </div>
        @endif
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $faq->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$faq->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button class="btn btn-primary">Update FAQ</button>
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
