<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class ProductApiController extends Controller
{
    /**
     * Get all products
     */
    public function index()
    {
        $response = Http::get("https://fakestoreapi.com/products");
        $products = collect($response->json());

        $categoryProducts = $products->whereIn('id', [1, 2, 3, 4])->values();

        $topProducts = $products->whereIn('id', [5, 6, 7, 8, 9, 10])->values();

        $selectedProduct = [];



        return view('products.index', compact('categoryProducts', 'topProducts', 'selectedProduct'));
    }


    public function indexDetail(Request $request)
    {
        $id = $request->input('product_id');

        $response = Http::get("https://fakestoreapi.com/products/{$id}");

        if ($response->successful()) {
            $productData = $response->json();

            $selectedProduct = [$productData];

            $allProducts = Http::get("https://fakestoreapi.com/products")->json();
            $products = collect($allProducts);

            $categoryProducts = $products->whereIn('id', [9, 2, 15, 8])->values();
            $topProducts = $products->whereIn('id', [5, 6, 12, 16, 9, 10])->values();

            $showModal = true;

            return view('products.index', compact('categoryProducts', 'topProducts', 'selectedProduct', 'showModal'));
        } else {
            return back()->with('error', 'Produk tidak ditemukan.');
        }
    }

    public function getByCategory($category)
    {
        $response = Http::get("https://fakestoreapi.com/products/category/{$category}");

        if ($response->failed()) {
            abort(404, 'Category not found');
        }


        $products = $response->json();


        return view('products.category', compact('products', 'category'));
    }


//     public function show($id)
//     {
//         $product = Product::getProduct($id);

//         return response()->json([
//             'status' => 'success',
//             'data' => $product
//         ]);
//     }


//     public function getByCategory($category)
//     {
//         $products = Product::getProductsByCategory($category);

//         return response()->json([
//             'status' => 'success',
//             'category' => $category,
//             'data' => $products
//         ]);
//     }


//     public function categories()
//     {
//         $categories = Product::getCategories();

//         return response()->json([
//             'status' => 'success',
//             'data' => $categories
//         ]);
//     }
}
