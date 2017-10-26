<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionRequest;

class IndexController extends Controller {

    public function index() {
        return view('web.index');
    }

    public function single() {
        return view('web.single-page');
    }

    public function services() {
        return view('web.services');
    }

    public function subscribe(SubscriptionRequest $request) {
        \Mail::send('email.subscribe', array(
            'email' => $request->post('email'),
                ), function($message) {
            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('New subscription on Exceedbuy.com');
        });
        \Toastr::success('Success', 'Succefully subscribed.');
        return redirect()->home();
    }

}
