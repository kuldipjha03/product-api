@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
        <button type="submit">Create</button>
    </form>
@endsection
