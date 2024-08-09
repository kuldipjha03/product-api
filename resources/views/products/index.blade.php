@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="mb-4">
       
            <a href="{{ route('products.create') }}" class="btn btn-info btn-sm">Create New Product</a>
        </div>

        <!-- Products Table in a Box -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Product List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product['id'] }}</td>
                                <td><a href="{{ route('products.show', $product['id']) }}">{{ $product['title'] }}</a></td>
                                <td>
                                    <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
               
               
            </div>
        </div>
    </div>
@endsection
