@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $product['title'] }}" required>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product['price'] }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
