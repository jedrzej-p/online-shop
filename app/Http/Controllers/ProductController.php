<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function mainIndex() {
        $products = Product::where('is_active', 1)->orderBy('created_at', 'desc')->take(4)->get();

        return view('main')->with(['products' => $products]);
    }

    public function index() {
        $products = Product::where('is_active', 1)->get();

        return view('product.index')->with(['products' => $products]);
    }

    public function details($id, $name = null) {
        $product = Product::where('id', $id)->first();

        return view('product.details')->with(['product' => $product]);
    }
}
