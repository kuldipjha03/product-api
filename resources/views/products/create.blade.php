@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Create Product Form Box -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Product</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm">Create Product</button>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm">Back to Products</a>
            </div>
        </div>
    </div>
@endsection
