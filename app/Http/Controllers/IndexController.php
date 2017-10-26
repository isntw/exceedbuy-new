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

    public function services() {
        return view('web.services');
    }

    public function subscribe(Request $request) {
        \Mail::send('email.subscribe', array('email' => $request->post('email')), function($message) {
            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Mail from an Exceedbuy user.');
        });
        \Toastr::success('Success', 'Message was succefully send.');
        return redirect()->back();
    }

}
