@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Add Product</h3>

    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @csrf

        @include('admin.products._form')

        <button class="btn btn-primary">Save Product</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection