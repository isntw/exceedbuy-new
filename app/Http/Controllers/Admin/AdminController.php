<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $actions = [
            ['href' => route('admin.dashboard.show'), 'title' => 'Lista emailuri']
        ];
        $contests = \App\Contest::all();

        return view('admin.dashboard.index')
                        ->with('title', 'Dashboard')
                        ->with('contests', $contests)
                        ->with('actions', $actions);
    }

    public function show() {
        $contests = \App\Contest::all();
        $string = '';

        foreach ($contests as $contest) {
            $string = $string . $contest->email . ', ';
        }

        return view('admin.dashboard.list')
                        ->with('title', 'Lista Email-uri')
                        ->with('string', $string);
    }

}
