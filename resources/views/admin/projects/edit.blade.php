@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Edit Project</h3>

    <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.projects._form')

        <button class="btn btn-primary">Update Project</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection