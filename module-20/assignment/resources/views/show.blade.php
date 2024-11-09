@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Price: ${{ $product->price }}</h5>
            <p class="card-text">Description: {{ $product->description }}</p>
            <p class="card-text">Stock: {{ $product->stock ?? 'N/A' }}</p>
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="200">
            @endif
        </div>
    </div>
    <a href="{{ url('/products') }}" class="btn btn-secondary mt-3">Back to Products</a>
</div>
@endsection