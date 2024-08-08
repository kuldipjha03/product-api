@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product['id']) }}">{{ $product['title'] }}</a>
                <a href="{{ route('products.edit', $product['id']) }}">Edit</a>
                <form action="{{ route('products.destroy', $product['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
