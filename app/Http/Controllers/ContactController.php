<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SubmitRequest;

class ContactController extends Controller {

    public function index() {
        return view('web.contact');
    }

    public function store(SubmitRequest $request) {

        \Mail::send('email.contact', array(
            'name' => $request->post('lname') . " " . $request->post('fname'),
            'email' => $request->post('email'),
            'body' => $request->post('body')
                ), function($message) {

            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Mail from an Exceedbuy user.');
            return redirect('/');
        });
    }

}
