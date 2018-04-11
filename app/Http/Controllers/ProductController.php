<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        return view('web.products.index')
                        ->with('title', 'Products')
                        ->with('description', 'All our products are certified and tested by third-party laboratories')
                        ->with('products', $products);
    }

    public function show(Product $product) {
        return view('web.products.show')
                        ->with('title', $product->name)
                        ->with('product', $product);
    }

}
