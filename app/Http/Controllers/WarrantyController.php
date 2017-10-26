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
            'date' => $request->post('date'),
            'body' => $request->post('body')
                ), function($message) {

            $message->from('warranty@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Mail from an Exceedbuy user.');
        });

        \Toastr::success('Success', 'Message was succefully send.');
        return redirect()->back();
    }

}
