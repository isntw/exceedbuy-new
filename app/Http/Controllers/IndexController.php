<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index() {
        return view('web.index');
    }

    public function single() {
        return view('web.single-page');
    }

}
