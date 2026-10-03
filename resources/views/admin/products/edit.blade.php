@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Edit Product</h3>

    <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.products._form')

        <button class="btn btn-primary">Update Product</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection