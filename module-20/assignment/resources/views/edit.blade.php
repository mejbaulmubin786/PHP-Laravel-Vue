@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('products.update',   $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_id">Product ID</label>
            <input type="text" class="form-control" name="product_id" value="{{ $product->product_id }}" required>
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}">
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image">
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection