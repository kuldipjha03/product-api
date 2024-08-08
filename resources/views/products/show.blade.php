@extends('layouts.app')

@section('content')
    <h1>{{ $product['title'] }}</h1>
    <p>Price: ${{ $product['price'] }}</p>
    <a href="{{ route('products.index') }}">Back to Products</a>
@endsection
