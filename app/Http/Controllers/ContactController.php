<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index() {
        return view('web.contact');
    }

    public function store(Request $request) {

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
