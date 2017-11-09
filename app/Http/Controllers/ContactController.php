<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubmitRequest;

class ContactController extends Controller
{

    public function index()
    {
        return view('web.contact');
    }

    public function store(SubmitRequest $request)
    {

        \Mail::send('email.contact', array(
            'name' => $request->post('lname') . " " . $request->post('fname'),
            'email' => $request->post('email'),
            'body' => $request->post('body')
        ), function ($message) {

            $message->from('contact@exceedbuy.com');
            $message->to('exceedbuy@gmail.com', 'Admin')->subject('Mail from an Exceedbuy user.');
        });

        \Toastr::success('Success', 'Message was succefully send.');
        return redirect()->back();
    }

}
