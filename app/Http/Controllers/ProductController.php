<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->productService->getProduct($id);
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->productService->createProduct($request->all());
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = $this->productService->getProduct($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->productService->updateProduct($id, $request->all());
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return redirect()->route('products.index');
    }
}

