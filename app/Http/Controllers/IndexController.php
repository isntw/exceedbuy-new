<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionRequest;

class IndexController extends Controller {

    public function index() {
        return view('web.index')
                        ->with('title', 'ExceedBuy')
                        ->with('description', 'Quality, a way of life.')
                        ->with('products', \App\Product::all());
    }

    public function services() {
        return view('web.services')
                        ->with('title', 'Blog');
    }

    public function subscribe(SubscriptionRequest $request) {
        \Mail::send('email.subscribe', array(
            'email' => $request->post('email'),
                ), function($message) {
            $message->from('contact@exceedbuy.com');
            $message->to('exceedbuy@gmail.com', 'Admin')->subject('New subscription on Exceedbuy.com');
        });
        \Toastr::success('Success', 'Succefully subscribed.');
        return redirect()->back();
    }

}
