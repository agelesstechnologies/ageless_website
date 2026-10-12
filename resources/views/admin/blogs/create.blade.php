@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h4>Add Blog</h4>
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.blogs.store') }}">
        @csrf
        @include('admin.blogs._form')
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-secondary" href="{{ route('admin.blogs.index') }}">Back</a>
    </form>
</div>
@endsection
