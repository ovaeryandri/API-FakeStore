<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Get all products
     */
    public function index()
    {
        $products = Product::getAllProducts();

        return response()->json([
            'status' => 'success',
            'data' => $products
        ]);
    }

    /**
     * Get specific product
     */
    public function show($id)
    {
        $product = Product::getProduct($id);

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }

    /**
     * Get products by category
     */
    public function getByCategory($category)
    {
        $products = Product::getProductsByCategory($category);

        return response()->json([
            'status' => 'success',
            'category' => $category,
            'data' => $products
        ]);
    }

    /**
     * Get all categories
     */
    public function categories()
    {
        $categories = Product::getCategories();

        return response()->json([
            'status' => 'success',
            'data' => $categories
        ]);
    }
}
