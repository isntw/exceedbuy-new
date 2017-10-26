<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarrantyController extends Controller {

    public function index() {
        return view('web.warranty');
    }

    public function store(Request $request) {

        \Mail::send('email.warranty', array(
            'name' => $request->post('lname') . " " . $request->post('fname'),
            'email' => $request->post('email'),
            'date' => $request->post('date'),
            'body' => $request->post('body')
                ), function($message) {
            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Warranty from an Exceedbuy user.');
        });

        \Toastr::success('Success', 'Message was succefully send.');
        return redirect()->back();
    }

}
