<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ProductService
{
    protected $baseUri = 'https://fakestoreapi.com';

    public function getAllProducts()
    {
        $response = Http::get("{$this->baseUri}/products");
        return $response->json();
    }

    public function getProduct($id)
    {
        $response = Http::get("{$this->baseUri}/products/{$id}");
        return $response->json();
    }

    public function createProduct($data)
    {
        $response = Http::post("{$this->baseUri}/products", $data);
        return $response->json();
    }

    public function updateProduct($id, $data)
    {
        $response = Http::put("{$this->baseUri}/products/{$id}", $data);
        return $response->json();
    }

    public function deleteProduct($id)
    {
        $response = Http::delete("{$this->baseUri}/products/{$id}");
        return $response->json();
    }
}
