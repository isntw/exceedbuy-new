<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index() {
        return view('web.contact');
    }

    public function send(Request $request) {

//        $data = $request->only('fname', 'lname', 'email', 'body');
//
//        Mail::send('home', $data, function ($message) use ($data) {
//            $message->from($data['email']);
//            $message->to('moneaiustin@gmail.com');
//            $message->subject($data['body']);
//        });
    }

}
