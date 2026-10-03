@extends('admin.layout')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Projects</h3>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add Project</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Sort</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>
                        @if($project->image)
                            <img src="{{ asset('storage/'.$project->image) }}" width="80">
                        @endif
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->status ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $project->sort_order }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $projects->links('pagination::bootstrap-5') }}
</div>
@endsection
