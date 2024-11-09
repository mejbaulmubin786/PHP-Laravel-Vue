@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products List</h2>

    <!-- Success Message -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Search Form -->
    <form action="{{ url('/products/' )  }}" method="GET" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by Product ID or Description" value="{{ request('search') }}">
            <button type="submit" class="btn btn-outline-secondary">Search</button>
        </div>
    </form>

    <!-- Sorting Links -->
    <div class="mb-3">
        <strong>Sort By:</strong>
        <a href="{{ route('products.index', ['sort_by' => 'name', 'sort_order' => (request('sort_by') == 'name' && request('sort_order') == 'asc') ? 'desc' : 'asc']) }}" class="btn btn-secondary">
            Sort by Name ({{ request('sort_by') == 'name' && request('sort_order') == 'asc' ? 'Descending' : 'Ascending' }})
        </a>

        <a href="{{ route('products.index', ['sort_by' => 'price', 'sort_order' => (request('sort_by') == 'price' && request('sort_order') == 'asc') ? 'desc' : 'asc']) }}" class="btn btn-secondary">
            Sort by Price ({{ request('sort_by') == 'price' && request('sort_order') == 'asc' ? 'Descending' : 'Ascending' }})
        </a>

    </div>



    <!-- Products Table -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock ?? 'N/A' }}</td>
                <td>
                    @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
                    @else
                    <img src="{{ asset('storage/products/default.jpg') }}" alt="Default Image" class="img-thumbnail" width="100" />
                    @endif
                </td>
                <td>
                    <a href="{{ url('/products/' . $product->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/products/' . $product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $products->appends(request()->input())->links() }}
    </div>
</div>
@endsection