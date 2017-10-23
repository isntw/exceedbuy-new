<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarrantyController extends Controller {

    public function index() {
        return view('web.warranty');
    }

    public function store(SubmitRequest $request) {

        \Mail::send('email.contact', array(
            'name' => $request->post('lname') . " " . $request->post('fname'),
            'email' => $request->post('email'),
            'body' => $request->post('body')
                ), function($message) {

            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Contact EXCEEDBUY');
            return redirect()->back()->with('message', 'Thanks for contacting us!');
        });
    }

}
