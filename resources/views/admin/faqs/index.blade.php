@extends('admin.layout')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>FAQs</h3>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">Add FAQ</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Status</th>
                <th>Sort</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->status ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $faq->sort_order }}</td>
                    <td>
                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this FAQ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No FAQs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $faqs->links() }}
</div>
@endsection
