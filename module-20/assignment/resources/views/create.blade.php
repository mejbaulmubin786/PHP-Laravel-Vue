@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Product</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="product_id">Product ID</label>
            <input type="text" class="form-control" name="product_id" value="{{ old('product_id') }}" required>
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ old('stock') }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection