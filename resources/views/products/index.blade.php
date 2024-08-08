@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New Product</a>
    
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
@endsection
