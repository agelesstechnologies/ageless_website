@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h4>Edit Blog</h4>
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.blogs.update', $blog) }}">
        @csrf
        @method('PUT')
        @include('admin.blogs._form')
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-secondary" href="{{ route('admin.blogs.index') }}">Back</a>
    </form>
</div>
@endsection
