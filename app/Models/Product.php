<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Product extends Model
{
    protected $baseUrl = 'https://fakestoreapi.com';

    /**
     * Get all products
     */
    public static function getAllProducts()
    {
        return Http::get("https://fakestoreapi.com/products")->json();
    }

    /**
     * Get single product
     */
    public static function getProduct($id)
    {
        return Http::get("https://fakestoreapi.com/products/{$id}")->json();
    }

    /**
     * Get products in specific category
     */
    public static function getProductsByCategory($category)
    {
        return Http::get("https://fakestoreapi.com/products/category/{$category}")->json();
    }

    /**
     * Get all product categories
     */
    public static function getCategories()
    {
        return Http::get("https://fakestoreapi.com/products/categories")->json();
    }
}
