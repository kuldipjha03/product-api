<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    // ProductService into the controller
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    // Display a listing of products from ProductService
    public function index()
    {
        $products = $this->productService->getAllProducts();
        //dd($products);
        //exit;
        // Return the view with the list of products
        /*Sample Response
        0 => array:7 [▼
    "id" => 1
    "title" => "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops"
    "price" => 109.95
    "description" => "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday"
    "category" => "men's clothing"
    "image" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg"
    "rating" => array:2 [▶]
  ]
  1 => array:7 [▼
    "id" => 2
    "title" => "Mens Casual Premium Slim Fit T-Shirts "
    "price" => 22.3
    "description" => "
Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitc
 ▶
"
    "category" => "men's clothing"
    "image" => "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg"
    "rating" => array:2 [▶]
  ]
    */
        return view('products.index', compact('products'));
    }
    // Display the specified product from ProductService
    public function show($id)
    {
        $product = $this->productService->getProduct($id);
        // Return the view with the product details
        return view('products.show', compact('product'));
    }
    // Show the form for creating a new product
    public function create()
    {
        // Return the view for creating a new product
        return view('products.create');
    }
     // Store a newly created product in the ProductService
    public function store(Request $request)
    {
        // Create a new product using ProductService
        $this->productService->createProduct($request->all());
        return redirect()->route('products.index');
    }
    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = $this->productService->getProduct($id);
        // Return the view for editing the product
        return view('products.edit', compact('product'));
    }
     // Update the specified product in the database
    public function update(Request $request, $id)
    {
        $this->productService->updateProduct($id, $request->all());
        // Redirect to the product index page after updating
        return redirect()->route('products.index');
    }
     // Remove the specified product from the database
    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        // Redirect to the product index page after deletion
        return redirect()->route('products.index');
    }
}

