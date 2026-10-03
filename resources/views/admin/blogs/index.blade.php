@extends('admin.layout')
@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Blogs</h4>
        <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}">Add Blog</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" width="80" class="mb-2">
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->status }}</td>
                    <td>{{ optional($blog->published_at)->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit',$blog) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form class="d-inline" method="POST" action="{{ route('admin.blogs.destroy',$blog) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this blog?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No blogs found.</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $blogs->links() }}
</div>
@endsection