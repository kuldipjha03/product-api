@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Edit Product Form Box -->
        <div class="card">
            <div class="card-header">
      
                <h5 class="card-title mb-0">View Product</h5>
            </div>
            <div class="card-body">
              
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $product['title'] }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $product['price'] }}" required>
                    </div>
                   
            </div>
            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm">Back to Products</a>
            </div>
        </div>
    </div>
@endsection
