@extends('admin.layout')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Contact Enquiries</h3>

        <form method="GET" action="{{ route('admin.contacts.index') }}">
            <!-- <select name="sort" class="form-control" onchange="this.form.submit()">
                <option value="new" {{ request('sort') == 'new' ? 'selected' : '' }}>Newest First</option>
                <option value="old" {{ request('sort') == 'old' ? 'selected' : '' }}>Oldest First</option>
            </select> -->
        </form>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse($enquiries as $enquiry)
                <tr>
                    <td>{{ $enquiry->name }}</td>
                    <td>{{ $enquiry->email }}</td>
                    <td>{{ $enquiry->phone }}</td>
                    <td>{{ $enquiry->message }}</td>
                    <td>{{ $enquiry->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No enquiries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $enquiries->appends(request()->query())->links() }}
</div>
@endsection