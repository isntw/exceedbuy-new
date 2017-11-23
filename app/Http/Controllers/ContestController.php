<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;

class ContestController extends Controller {

    public function index() {
        return view('web.contest')
                        ->with('title', 'Giveaway ends in:');
    }

    public function store(Request $request) {
        return \DB::transaction(function () use ($request) {
                    Contest::create($request->only('name', 'email'));
                    return redirect(route('web.index'));
                }, 5);
    }

    public function delete() {
        return view('web.contest');
    }

}
