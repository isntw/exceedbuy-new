<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {
        return view('web.products')
                        ->with('title', 'Products')
                        ->with('description', 'All our products are certified and tested by third-party laboratories');
    }

    public function ear() {
        return view('web.products.ear.ear')
                        ->with('title', 'Baby Ear Muffs');
    }

}
