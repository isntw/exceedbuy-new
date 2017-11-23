<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {

    public function index() {
        return view('web.about')
                        ->with('title', 'About Us')
                        ->with('description', 'A Whole Universe Of Top Quality Products For Your Little Angel!');
    }

}
