<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index() {
        $productsByRating = (Product::orderByDesc('product_rating')->limit(4)->get())->values();
        $productsByDate = Product::latest()->limit(8)->get();
        return view('index', compact('productsByRating', 'productsByDate'));
    }
    public function product_list(){
        $products = Product::get();
        $category = "All Product";
        $categories = Category::get();
        return view('product_list', ['category' => $category], compact('products', 'categories'));
    }
    public function product_category($product_category){
        $products = (Category::where('id', $product_category)->first())->products;
        $category = (Category::where('id', $product_category)->first())->category_name;
        $categories = Category::get();
        return view('product_list', ['category' => $category], compact('products','categories'));
    }
    public function product_details($product_id){
        $product = Product::where('id', $product_id)->first();
        $productsByRelation = Product::where('category_id', $product->category->id)
            ->inRandomOrder()->limit(4)->get();
        return view('product_details', ['product' => $product], compact('productsByRelation'));
    }
    public function login(){
        return view('login');
    }
    public function cart(){
        return view('cart');
    }
    public function about(){
        return view('about');
    }
    public function contacts(){
        return view('contacts');
    }
}
