<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Retrieve all products

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Retrieve a specific product based on $id

        return view('products.show', compact('product'));
    }

    // Add more methods as needed for CRUD operations (create, update, delete, etc.)
}
