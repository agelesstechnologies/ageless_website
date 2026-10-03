@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Add Project</h3>

    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
        @csrf

        @include('admin.projects._form')

        <button class="btn btn-primary">Save Project</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection